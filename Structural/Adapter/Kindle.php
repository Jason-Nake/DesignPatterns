<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/5/6
 * Time: 5:12 PM
 */

namespace DesignPatterns\Structural\Adapter;


class Kindle implements EBookInterface
{
    private $page = 1;

    private $totalPages = 100;

    public function unlock()
    {

    }

    /**
     * 返回当前页和总页数，像[10，100]是总页书100的第10页
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page,$this->totalPages];
    }

    public function pressNext()
    {
        $this->page++;
        return;
    }
}
