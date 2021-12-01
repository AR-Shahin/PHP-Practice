<?php

include './vendor/autoload.php';

use NumberToWords\NumberToWords;


$numberToWords = new NumberToWords();


$numberTransformer = $numberToWords->getNumberTransformer('en');


echo $numberTransformer->toWords(1000);
