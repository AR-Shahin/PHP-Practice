<?php

require('app/Math.php');
require('app/Serialize.php');
// $ser = new Serialize('html', 'css');
// $serialize = serialize($ser);
// echo $serialize;

// $ins = (new Math())();
// echo $ins->num1;
// exit();
// echo 'hello Sha';

class Magic
{
    public function __get($params)
    {
        echo "<br><b>{$params}</b> isn't not exits!<br>";
    }

    public function __set($params, $val)
    {
        echo "<br><b>{$params}</b> isn't not exits! New value of {$params} is {$val}<br>";
    }

    public function __call($method, $params = null)
    {
        var_dump($params);
        echo "<br><b>This {$method}</b> doesn't not exits! ";
    }
    public function __callStatic($method, $params = null)
    {
        var_dump($params);
        echo "<br><b>This {$method}</b> doesn't not exits! \n";
    }

    public function sum(...$params)
    {
        return array_sum(...$params);
    }
}

$magic = new Magic();

$magic->this_property;
$magic->this_property = 50;

$magic->helper(10);
Magic::helper(10);

// echo "<br>";
// echo $magic->sum([10, 20, 30]);
// echo "<br>";
// echo array_sum([10, 20]);
// $ar = [10, 20];
// $br = [30, 10];
// $cr = [...$ar, ...$br];
// echo $magic->sum($cr);


// if (is_a($magic, 'Magic')) {
//     echo 'ok';
// } else {
//     echo 'no';
// }

echo get_class($magic);
