<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 2:30 PM
 */

class FormatNumber  implements Formatter
{
    public function format(string $input): string
    {
        return number_format($input);
    }
}
