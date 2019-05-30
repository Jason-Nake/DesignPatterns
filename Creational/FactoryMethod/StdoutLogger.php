<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 11:26 AM
 */

namespace Designpatterns\Creational\FactoryMethod;


class StdoutLogger  implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}
