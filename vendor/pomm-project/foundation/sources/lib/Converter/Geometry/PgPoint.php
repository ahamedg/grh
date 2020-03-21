<?php
/*
 * This file is part of PommProject's Foundation package.
 *
 * (c) 2014 Grégoire HUBERT <hubert.greg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PommProject\Foundation\Converter\Geometry;

use PommProject\Foundation\Converter\TypeConverter;
use PommProject\Foundation\Converter\ConverterInterface;
use PommProject\Foundation\Session\Session;

/**
 * PgPoint
 *
 * Converter for PostgreSQL point type.
 *
 * @package Foundation
 * @copyright 2014 Grégoire HUBERT
 * @author Grégoire HUBERT
 * @license X11 {@link http://opensource.org/licenses/mit-license.php}
 * @see ConverterInterface
 */
class PgPoint extends TypeConverter
{
    /**
     * getTypeClassName
     *
     * @see TypeConverter
     */
    public function getTypeClassName()
    {
        return '\PommProject\Foundation\Converter\Type\Point';
    }

    /**
     * toPg
     *
     * @see ConverterInterface
     */
    public function toPg($data, $type, Session $session)
    {
        if ($data === null) {
            return sprintf("NULL::%s", $type);
        }

        $data = $this->checkData($data);

        return sprintf(
            "point(%s,%s)",
            $data->x,
            $data->y
        );
    }
}
