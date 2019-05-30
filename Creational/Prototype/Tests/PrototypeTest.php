<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 4:43 PM
 */
namespace Designpatterns\Creational\Prototype\Tests;
use Designpatterns\Creational\Prototype\BarBookPrototype;
use Designpatterns\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++){
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class,$book);
        }

        for ($i = 0; $i < 5; $i++){
            $book = clone $barPrototype;
            $book->setTitle("Bar Book No ". $i);
            $this->assertInstanceOf(BarBookPrototype::class,$book);
        }

    }
}
