<?php

class Square implements AreaInterface
{
    public $a;

    function __construct($a)
    {
        $this->a = $a;
    }

    function area()
    {
        return $this->a * $this->a;
    }
}
