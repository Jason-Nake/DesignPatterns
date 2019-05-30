<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 5:15 PM
 */

use PHPUnit\Framework\TestCase;
use Designpatterns\Creational\Multiton\Multiton;
class MultitonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_1);

        $this->assertInstanceOf(Multiton::class,$firstCall);
        $this->assertSame($firstCall,$secondCall);
    }

    public function testUniquenessForEveryInstance()
    {
        $firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_2);

        $this->assertInstanceOf(Multiton::class,$firstCall);
        $this->assertInstanceOf(Multiton::class,$secondCall);
        $this->assertNotSame($firstCall,$secondCall);
    }
}
