<?php
namespace Bike;
/**
 *
 * @author Taynov Dmitry
 * @email dtaynov@gmail.com
 */

class Version
{
    private static $v = '0.0.1';

    public static function get()
    {
        return self::$v;
    }
}
