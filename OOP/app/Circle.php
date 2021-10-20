<?php


class Circle implements AreaInterface
{
    public $r;

    function __construct($r)
    {
        $this->r = $r;
    }

    function area()
    {
        return pi() * $this->r * $this->r;
    }
}
