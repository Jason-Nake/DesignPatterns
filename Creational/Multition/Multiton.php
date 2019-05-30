<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 4:31 PM
 */
namespace Designpatterns\Creational\Multiton;

class Multiton
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';

    private static $instances = [];

    private function __construct()
    {
    }

    /**
     * @param string $instanceName
     * @return Multiton
     */
    public static function getInstance(string $instanceName):Multiton
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }
        return self::$instances[$instanceName];
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
