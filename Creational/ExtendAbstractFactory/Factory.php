<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/7/4
 * Time: 2:38 PM
 */

namespace DesignPatterns\Creational\ExtendAbstractFactory;


class Factory
{
    public $db = 'MySQL';

    public $namespace = 'DesignPatterns\Creational\ExtendAbstractFactory';

    public function __construct()
    {
        $config = include 'config.php';
        $this->db = $config['driver'];
    }

    public function createUser()
    {
        $className = $this->namespace.$this->db.'User';

        try {
            $class = new \ReflectionClass($className);
            $user = $class->newInstance();
        } catch (\ReflectionException $exception) {
            throw new \InvalidArgumentException('暂不支持的数据库类型');
        }
        return $user;
    }

    public function createArticle()
    {
        $className = $this->namespace . $this->db .'Article';

        try {
            $class = new \ReflectionClass($className);
            $article = $class->newInstance();
        } catch (\ReflectionException $exception) {
            throw new \InvalidArgumentException('暂不支持的数据类型');
        }
        return $article;
    }
}
