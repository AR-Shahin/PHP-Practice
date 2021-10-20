<?php

class Triangle implements AreaInterface
{
    public $b;
    public $h;

    function __construct($h, $b)
    {
        $this->h = $h;
        $this->b = $b;
    }

    function area()
    {
        return 0.5 * $this->h * $this->b;
    }
}
