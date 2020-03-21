<?php
/*
 * This file is part of PommProject's Foundation package.
 *
 * (c) 2014 - 2015 Grégoire HUBERT <hubert.greg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PommProject\Foundation\Converter;

use PommProject\Foundation\Session\Session;
use PommProject\Foundation\Exception\ConverterException;

/**
 * PgTimestamp
 *
 * Date and timestamp converter
 *
 * @package   Foundation
 * @copyright 2014 - 2015 Grégoire HUBERT
 * @author    Grégoire HUBERT <hubert.greg@gmail.com>
 * @license   X11 {@link http://opensource.org/licenses/mit-license.php}
 * @see       ConverterInterface
 */
class PgTimestamp implements ConverterInterface
{
    const TS_FORMAT = 'Y-m-d H:i:s.uP';

    /**
     * fromPg
     *
     * @see ConverterInterface
     */
    public function fromPg($data, $type, Session $session)
    {
        $data = trim($data);

        return $data !== '' ? new \DateTime($data) : null;
    }

    /**
     * toPg
     *
     * @see ConverterInterface
     */
    public function toPg($data, $type, Session $session)
    {
        return
            $data !== null
            ? sprintf("%s '%s'", $type, $this->checkData($data)->format(static::TS_FORMAT))
            : sprintf("NULL::%s", $type)
            ;
    }

    /**
     * toPgStandardFormat
     *
     * @see ConverterInterface
     */
    public function toPgStandardFormat($data, $type, Session $session)
    {
        return
            $data !== null
            ? $this->checkData($data)->format(static::TS_FORMAT)
            : null
            ;
    }

    /**
     * checkData
     *
     * Ensure a DateTime instance.
     *
     * @access protected
     * @param  mixed $data
     * @throws ConverterException
     * @return \DateTime
     */
    protected function checkData($data)
    {
        if (!$data instanceof \DateTime) {
            try {
                $data = new \DateTime($data);
            } catch (\Exception $e) {
                throw new ConverterException(
                    sprintf(
                        "Cannot convert data from invalid datetime representation '%s'.",
                        $data
                    ),
                    null,
                    $e
                );
            }
        }

        return $data;
    }
}
