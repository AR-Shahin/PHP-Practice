<?php

namespace App\models;

use Exception;

class DB
{
    public $con;
    private $host = "localhost:3306";
    private $userName = "main";
    private $password = "1234";
    private $dbName = "php_raw";
    public function __construct()
    {
        try {
            $this->con = mysqli_connect($this->host, $this->userName, $this->password, $this->dbName);
            if ($this->con) {
                $this->con;
            } else {
                echo "NOT Connected!";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function test()
    {
        echo 'test';
    }
}
