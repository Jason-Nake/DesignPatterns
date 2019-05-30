<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/5/6
 * Time: 5:04 PM
 */

namespace DesignPatterns\Structural\Adapter;


class Book  implements BookInterface
{
    private $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
