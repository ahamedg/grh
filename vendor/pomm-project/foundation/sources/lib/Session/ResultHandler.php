<?php
/*
 * This file is part of the Pomm's Foundation package.
 *
 * (c) 2014 - 2015 Grégoire HUBERT <hubert.greg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PommProject\Foundation\Session;

use PommProject\Foundation\Exception\FoundationException;

/**
 * ResultHandler
 *
 * Wrap a PostgreSQL query result resource.
 *
 * @package   Foundation
 * @copyright 2014 - 2015 Grégoire HUBERT
 * @author    Grégoire HUBERT
 * @license   X11 {@link http://opensource.org/licenses/mit-license.php}
 */
class ResultHandler
{
    protected $handler;

    /**
     * __construct
     *
     * Constructor
     *
     * @access public
     * @param  resource $result_resource
     */
    public function __construct($result_resource)
    {
        if (!is_resource($result_resource) || get_resource_type($result_resource) !== 'pgsql result') {
            throw new \InvalidArgumentException(sprintf(
                "Given handler is not a resource of a pgsql result ('%s' given).",
                gettype($result_resource)
            ));
        }

        $this->handler = $result_resource;
    }

    /**
     * __destruct
     *
     * Call free() if handler is set.
     *
     * @access public
     * @return void
     */
    public function __destruct()
    {
        if ($this->handler !== null) {
            $this->free();
        }
    }

    /**
     * free
     *
     * Free a result from memory.
     *
     * @access public
     * @return ResultHandler $this
     */
    public function free()
    {
        @pg_free_result($this->handler);
        $this->handler = null;

        return $this;
    }

    /**
     * fetchRow
     *
     * Fetch a row as associative array. Index starts from 0.
     *
     * @access public
     * @param  int   $index
     * @throws \OutOfBoundsException if $index out of bounds.
     * @return array
     */
    public function fetchRow($index)
    {
        $values = @pg_fetch_assoc($this->handler, $index);

        if ($values === false) {
            throw new \OutOfBoundsException(sprintf("Cannot jump to non existing row %d.", $index));
        }

        return $values;
    }

    /**
     * countFields
     *
     * Return the number of fields of a result.
     *
     * @access public
     * @return int long
     */
    public function countFields()
    {
        return pg_num_fields($this->handler);
    }

    /**
     * countRows
     *
     * Return the number of rows in a result.
     *
     * @access public
     * @return int long
     */
    public function countRows()
    {
        return pg_num_rows($this->handler);
    }

    /**
     * getFieldNames
     *
     * Return an array with the field names of a result.
     *
     * @access public
     * @return array
     */
    public function getFieldNames()
    {
        $names = [];

        for ($i = 0; $i < $this->countFields(); $i++) {
            $names[] = $this->getFieldName($i);
        }

        return $names;
    }

    /**
     * getFieldType
     *
     * Return the associated type of a field.
     *
     * @access public
     * @param  int $name
     * @return string
     */
    public function getFieldType($name)
    {
        $type = pg_field_type($this->handler, $this->getFieldNumber($name));

        return $type !== 'unknown' ? $type : null;
    }

    /**
     * getFieldName
     *
     * Return the name from a field number.
     *
     * @access public
     * @param  int    $field_no
     * @return string
     * @throws \InvalidArgumentException
     */
    public function getFieldName($field_no)
    {
        if (!is_int($field_no)) {
            throw new \InvalidArgumentException(sprintf(
                "getFieldType::field_no = '%s' is not an integer.\n",
                $field_no
            ));
        }

        return pg_field_name($this->handler, $field_no);
    }

    /**
     * getFieldNumber
     *
     * Return the field index from its name.
     *
     * @access protected
     * @param  string $name
     * @return int long
     */
    protected function getFieldNumber($name)
    {
        $no = pg_field_num($this->handler, sprintf('"%s"', $name));

        if ($no ===  -1) {
            throw new \InvalidArgumentException(sprintf("Could not find field name '%s'. Available fields are {%s}.", $name, join(', ', array_keys(pg_fetch_assoc($this->handler)))));
        }

        return $no;
    }

    /**
     * fetchColumn
     *
     * Fetch a column from a result.
     *
     * @access public
     * @param  string $name
     * @return array
     */
    public function fetchColumn($name)
    {
        return pg_fetch_all_columns($this->handler, $this->getFieldNumber($name));
    }

    /**
     * fieldExist
     *
     * Check if a field exist or not.
     *
     * @access public
     * @param  mixed $name
     * @return bool
     */
    public function fieldExist($name)
    {
        return (bool) (pg_field_num($this->handler, $name) > -1);
    }

    /**
     * getTypeOid
     *
     * Return the type oid of the given field.
     *
     * @access public
     * @param  string   $name
     * @throws  FoundationException on error
     * @return int|null
     */
    public function getTypeOid($name)
    {
        $ret = pg_field_type_oid($this->handler, $name);

        if ($ret === false) {
            throw new FoundationException(
                sprintf(
                    "Error while fetching type oid for field '%s'.",
                    $name
                )
            );
        }

        return $ret;
    }
}
