<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 11:36 AM
 */

namespace Designpatterns\Creational\FactoryMethod;


class FileLoggerFactory implements LoggerFactory
{
    private $filePath;
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }
    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}
