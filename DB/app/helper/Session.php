<?php

namespace app\helper;

include("../db/Item.php");
include("../db/DB.php");

use app\db\DB;
use app\db\Item;

class Session
{

    public static function set($key, $value)
    {
        session_start();
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        session_start();
        if (!empty($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

    public static function forgot($key)
    {
        session_start();
        unset($_SESSION[$key]);
    }

    public function sTest()
    {
        echo "STEST";
    }
}
