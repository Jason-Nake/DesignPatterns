<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 12:16 PM
 */

use Designpatterns\Creational\AbstractFactory\ProductFactory;
use Designpatterns\Creational\AbstractFactory\DigitalProduct;
use Designpatterns\Creational\AbstractFactory\ShippableProduct;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);

        $this->assertInstanceOf(DigitalProduct::class,$product);
    }
    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        $this->assertInstanceOf(ShippableProduct::class,$product);
    }
    public function testCanCalculatePriceForShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);

        $this->assertEquals(200,$product->calculatePrice());
    }
    public function testCanCalculatePriceForDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);

        $this->assertEquals(150,$product->calculatePrice());
    }

}
