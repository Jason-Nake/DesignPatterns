<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/5/8
 * Time: 10:24 AM
 */

namespace DesignPatterns\Structural\Decorator;


class WebService implements RenderAbleInterface
{
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData(): string
    {
        return $this->data;
    }
}
