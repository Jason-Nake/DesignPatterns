<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/5/6
 * Time: 5:08 PM
 */

namespace DesignPatterns\Structural\Adapter;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    public function getPage(): array;

}
