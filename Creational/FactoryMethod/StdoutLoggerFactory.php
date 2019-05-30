<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 11:34 AM
 */

namespace Designpatterns\Creational\FactoryMethod;


class StdoutLoggerFactory   implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
