<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 11:39 AM
 */
use Designpatterns\Creational\FactoryMethod\StdoutLoggerFactory;
use Designpatterns\Creational\FactoryMethod\StdoutLogger;
use Designpatterns\Creational\FactoryMethod\FileLoggerFactory;
use Designpatterns\Creational\FactoryMethod\FileLogger;
use PHPUnit\Framework\TestCase;
class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(StdoutLogger::class,$logger);
    }
    public function testCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(FileLogger::class,$logger);
    }
}
