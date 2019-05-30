<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 5:30 PM
 */

namespace Designpatterns\Structural\Facade;

/**
 * 创建操作系统接口类
 * Interface OsInterface
 * @package Designpatterns\Structural\Facade
 */
interface OsInterface
{
    /**
     * 声明关机方法
     * @return mixed
     */
    public function halt();


    /**
     * 申明获取名称方法，返回字符串格式数据
     * @return string
     */
    public function getName():string;
}
