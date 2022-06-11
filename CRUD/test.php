<?php
require("./bootstrap/app.php");

use App\helper\Session;

// if (!isset($_SESSION)) session_start();
echo Session::get('reee');
