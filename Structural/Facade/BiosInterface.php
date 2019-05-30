<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 5:26 PM
 */

namespace Designpatterns\Structural\Facade;

/**
 * 创建基础输入输出系统接口类
 * Interface BiosInterface
 * @package Designpatterns\Structural\Facade
 */
interface BiosInterface
{

    /**
     * 声明执行方法
     * @return mixed
     */
    public function execute();

    /**
     * 申明等待密码输入方法
     * @return mixed
     */
    public function waitForKeyPress();

    /**
     * 申明登录方法
     * @param OsInterface $os
     * @return mixed
     */
    public function launch(OsInterface $os);

    /**
     * 申明关机方法
     * @return mixed
     */
    public function powerDown();

}
