<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 2:00 PM
 */

final class Singleton
{
    private static $instance;

    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * 不允许从外部调用，以防止创建多个实例
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    /**
     * 防止实例被克隆（这会创建实例的副本）
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * 防止反序列化（这将创建他的副本）
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
