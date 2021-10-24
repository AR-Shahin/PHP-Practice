<?php
require "./bootstrap.php";

use App\models\Shahin;
use App\models\Student;
use App\models\Teacher;
use App\models\User;
use NumberToWords\NumberToWords;

new User();
new Student();
new Teacher();
new Shahin();

echo n2w(105000);

echo "<br>";

// create the number to words "manager" class
$numberToWords = new NumberToWords();

// build a new number transformer using the RFC 3066 language identifier
$numberTransformer = $numberToWords->getNumberTransformer('en');
echo $numberTransformer->toWords(1000);
