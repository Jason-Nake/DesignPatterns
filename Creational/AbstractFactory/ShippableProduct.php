<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 12:08 PM
 */

namespace Designpatterns\Creational\AbstractFactory;


class ShippableProduct  implements Product
{
    private $productPrice;
    private $shippingCosts;
    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }
    public function calculatePrice(): int
    {
        return $this->productPrice + $this->shippingCosts;
    }
}
