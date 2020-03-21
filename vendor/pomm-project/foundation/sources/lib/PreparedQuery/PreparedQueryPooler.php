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

use PommProject\Foundation\Client\ClientPooler;

/**
 * PreparedQueryPooler
 *
 * Clients pooler for PreparedQuery instances.
 *
 * @package   Pomm
 * @copyright 2014 - 2015 Grégoire HUBERT
 * @author    Grégoire HUBERT
 * @license   X11 {@link http://opensource.org/licenses/mit-license.php}
 * @see       ClientPooler
 */
class PreparedQueryPooler extends ClientPooler
{
    /**
     * getPoolerType
     *
     * @see ClientPoolerInterface
     */
    public function getPoolerType()
    {
        return 'prepared_query';
    }

    /**
     * getClientFromPool
     *
     * @see    ClientPooler
     * @param  string             $sql
     * @return PreparedQuery|null
     */
    protected function getClientFromPool($sql)
    {
        return $this
            ->getSession()
            ->getClient(
                $this->getPoolerType(),
                PreparedQuery::getSignatureFor($sql)
            )
        ;
    }

    /**
     * createClient
     *
     * @see    ClientPooler
     * @param  string $sql SQL query
     * @return PreparedQuery
     */
    public function createClient($sql)
    {
        return new PreparedQuery($sql);
    }
}
