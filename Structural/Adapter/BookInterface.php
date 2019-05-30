<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/5/6
 * Time: 5:01 PM
 */

namespace DesignPatterns\Structural\Adapter;


interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;

}
