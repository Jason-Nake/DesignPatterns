<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 12:12 PM
 */

namespace Designpatterns\Creational\AbstractFactory;


class DigitalProduct    implements Product
{
    private $price;
    public function __construct(int $price)
    {
        $this->price = $price;
    }
    public function calculatePrice(): int
    {
        return $this->price;
    }
}
