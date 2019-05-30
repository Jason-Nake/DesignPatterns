<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 2:28 PM
 */

class FormatString  implements Formatter
{
    public function format(string $input): string
    {
        return $input;
    }
}
