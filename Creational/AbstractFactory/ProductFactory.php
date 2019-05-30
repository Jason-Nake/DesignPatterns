<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 12:05 PM
 */

namespace Designpatterns\Creational\AbstractFactory;


class ProductFactory
{
    const SHIPPING_COST = 50;

    public function createShippableProduct(int $price):Product
    {
        return new ShippableProduct($price,self::SHIPPING_COST);
    }

    public function createDigitalProduct(int $price):Product
    {
        return new DigitalProduct($price);
    }
}
