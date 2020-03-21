<?php
/*
 * This file is part of the PommProject/Foundation package.
 *
 * (c) 2014 - 2015 Grégoire HUBERT <hubert.greg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PommProject\Foundation\PreparedQuery;

use PommProject\Foundation\QueryManager\QueryParameterParserTrait;
use PommProject\Foundation\Listener\SendNotificationTrait;
use PommProject\Foundation\Exception\FoundationException;
use PommProject\Foundation\Client\Client;

/**
 * PreparedQuery
 *
 * @package   Foundation
 * @copyright 2014 - 2015 Grégoire HUBERT
 * @author    Grégoire HUBERT <hubert.greg@gmail.com>
 * @license   X11 {@link http://opensource.org/licenses/mit-license.php}
 */
class PreparedQuery extends Client
{
    use QueryParameterParserTrait;
    use SendNotificationTrait;

    protected $sql;
    private $is_prepared = false;
    private $identifier;
    private $converters;

    /**
     * getSignatureFor
     *
     * Returns a hash for a given sql query.
     *
     * @static
     * @access public
     * @param  string $sql Sql query
     * @return string
     */
    public static function getSignatureFor($sql)
    {
        return md5($sql);
    }

    /**
     * __construct
     *
     * Build the prepared query.
     *
     * @access public
     * @param  string $sql SQL query
     * @throws FoundationException
     */
    public function __construct($sql)
    {
        if (empty($sql)) {
            throw new FoundationException("Can not prepare an empty query.");
        }

        $this->sql        = $sql;
        $this->identifier = static::getSignatureFor($sql);
    }

    /**
     * @see ClientPoolerInterface
     */
    public function getClientType()
    {
        return 'prepared_query';
    }

    /**
     * getClientIdentifier
     *
     * Return the query identifier.
     *
     * @access public
     * @return string Query identifier.
     */
    public function getClientIdentifier()
    {
        return $this->identifier;
    }

    /**
     * shutdown
     *
     * Deallocate the statement in the database.
     *
     * @see ClientInterface
     */
    public function shutdown()
    {
        if ($this->is_prepared === true) {
            $this
                ->getSession()
                ->getConnection()
                ->executeAnonymousQuery(sprintf(
                    "deallocate %s",
                    $this->getSession()->getConnection()->escapeIdentifier($this->getClientIdentifier())
                ));

            $this->is_prepared = false;
        }
    }

    /**
     * execute
     *
     * Launch the query with the given parameters.
     *
     * @access public
     * @param  array    $values Query parameters
     * @return Resource
     */
    public function execute(array $values = [])
    {
        if ($this->is_prepared === false) {
            $this->prepare();
        }

        $values = $this->prepareValues($this->sql, $values);
        $this->sendNotification(
            'query:pre',
            [
                'sql'           => $this->sql,
                'parameters'    => $values,
                'session_stamp' => $this->getSession()->getStamp(),
            ]
        );

        $start    = microtime(true);
        $resource = $this
            ->getSession()
            ->getConnection()
            ->sendExecuteQuery(
                $this->getClientIdentifier(),
                $values,
                $this->sql
            );
        $end      = microtime(true);
        $this->sendNotification(
            'query:post',
            [
                'result_count' => $resource->countRows(),
                'time_ms'      => sprintf("%03.1f", ($end - $start) * 1000),
            ]
        );

        return $resource;
    }

    /**
     * prepare
     *
     * Send the query to be prepared by the server.
     *
     * @access protected
     * @return PreparedQuery $this
     */
    protected function prepare()
    {
        $this
            ->getSession()
            ->getConnection()
            ->sendPrepareQuery(
                $this->getClientIdentifier(),
                $this->orderParameters($this->sql)
            );
        $this->is_prepared = true;

        return $this;
    }

    /**
     * getSql
     *
     * Get the original SQL query
     *
     * @access public
     * @return string SQL query
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * prepareValues
     *
     * Prepare parameters to be sent.
     *
     * @access protected
     * @param  mixed    $sql
     * @param  array    $values
     * @return array    $prepared_values
     */
    protected function prepareValues($sql, array $values)
    {
        if ($this->converters === null) {
            $this->prepareConverters($sql);
        }

        foreach ($values as $index => $value) {
            if (isset($this->converters[$index])) {
                $values[$index] = call_user_func($this->converters[$index], $value);
            }
        }

        return $values;
    }

    /**
     * prepareConverters
     *
     * Store converters needed for the query parameters.
     *
     * @access protected
     * @param mixed             $sql
     * @return PreparedQuery    $this
     */
    protected function prepareConverters($sql)
    {
        foreach ($this->getParametersType($sql) as $index => $type) {
            if ($type === '') {
                $this->converters[$index] = null;
            } else {
                $converter = $this
                    ->getSession()
                    ->getClientUsingPooler('converter', $type)
                    ->getConverter()
                    ;

                $this->converters[$index] = function ($value) use ($converter, $type) {
                    return $converter->toPgStandardFormat($value, $type, $this->getSession());
                };
            }
        }

        return $this;
    }
}
