<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 10:17 AM
 */
use Designpatterns\Creational\SimpleFactory\SimpleFactory;
use Designpatterns\Creational\SimpleFactory\Bicycle;
use PHPUnit\Framework\TestCaseTest;

class SimpleFactoryTest extends TestCaseTest
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class,$bicycle);
    }
}
