<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/4/22
 * Time: 3:00 PM
 */

class StringReverseWorker
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }


    public function run(string $text)
    {
        return strrev($text);
    }
}
