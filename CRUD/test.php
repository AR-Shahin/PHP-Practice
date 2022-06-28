<?php

$a = 10;
$b = 20;

// $a = 100;

echo "A $a <br>";
echo "B $b <br>";

function swap(&$a,&$b){
    $t = $a;
    $a = $b;
    $b = $t;
}
swap($a,$b);
echo "A $a <br>";
echo "B $b <br>";