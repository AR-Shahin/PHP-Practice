<?php
// session_start();

// echo Session::get('error');
// Session::forgot('error');

include("./vendor/autoload.php");

use app\db\Item;
use App\helper\Session;

$i = new Session;

$i->sTest();
