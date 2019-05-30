<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 11:31 AM
 */

namespace Designpatterns\Creational\FactoryMethod;


interface LoggerFactory
{
    public function createLogger(): Logger;
}
