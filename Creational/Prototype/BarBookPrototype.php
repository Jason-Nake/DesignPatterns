<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 4:41 PM
 */

namespace Designpatterns\Creational\Prototype;


class BarBookPrototype  extends BookPrototype
{
    protected $category = 'Bar';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
