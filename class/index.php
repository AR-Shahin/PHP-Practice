<?php
require_once 'User.php';
require_once 'Student.php';

use Student as s;
use User as u;

$user = new u\User();
$student = new s\User();

if ($user instanceof s\User) {
    echo true;
}
