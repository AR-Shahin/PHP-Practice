<?php


class Math
{
    public $num1 = 20;
    public function __invoke()
    {
        echo '<br>invoke call<br>';
    }

    public function __construct()
    {
        echo '<br>construct<br>';
    }

    public function __destruct()
    {
        echo '<br>destruct<br>';
    }
}
