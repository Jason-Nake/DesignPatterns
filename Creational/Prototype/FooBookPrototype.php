<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 4:42 PM
 */

namespace Designpatterns\Creational\Prototype;


class FooBookPrototype  extends BookPrototype
{
    protected $category = "Foo";

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
