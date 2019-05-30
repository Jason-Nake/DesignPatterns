<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 10:10 AM
 */

namespace Designpatterns\Creational\SimpleFactory;


class SimpleFactory
{
    public function createBicycle():Bicycle
    {
        return new Bicycle();
    }
}
