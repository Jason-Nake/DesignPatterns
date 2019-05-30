<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 4:38 PM
 */
namespace Designpatterns\Creational\Prototype;


abstract class BookPrototype
{
    protected  $title;
    protected $category;
    abstract public function __clone();

    public function getTitle():string
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }


}
