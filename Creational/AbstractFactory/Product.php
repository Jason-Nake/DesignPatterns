<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 12:03 PM
 */
namespace Designpatterns\Creational\AbstractFactory;

interface Product
{
    public function calculatePrice(): int;
}
