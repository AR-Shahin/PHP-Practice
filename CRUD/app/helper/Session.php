<?php

namespace App\helper;

class Session
{
    public static function set($key, $value)
    {
        if (!isset($_SESSION)) session_start();
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (!isset($_SESSION)) session_start();
        if (!empty($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

    public static function forgot($key)
    {
        if (!isset($_SESSION)) session_start();

        unset($_SESSION[$key]);
    }

    public function sTest()
    {
        echo "STEST";
    }
}
