<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 2:33 PM
 */

final class StaticFactory
{
    public static function factory(string $type):Formatter
    {
        if ($type == 'number') {
            return new FormatNumber();
        } elseif ($type == 'string'){
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}
