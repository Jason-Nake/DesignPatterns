<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 5:46 PM
 */
use PHPUnit\Framework\TestCase;
class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock('DesignPatterns\Structural\Facade\OsInterFace');

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder("DesignPatterns\Structural\Facade\BisonInterface")
            ->setMethods(['launch','execute','waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new Facade($bios,$os);

        $facade->turnOn();

        $this->assertEquals('Linux',$os->getName());
    }
}
