<?php

namespace App\models;

use Exception;

class User extends DB
{
    private $items = [];

    public function getAllItems()
    {
        $sql = "SELECT * FROM items ORDER BY `id` DESC";

        $result = $this->con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->items[] = $row;
            }
        }

        return $this->items;
    }

    public function test()
    {
        echo "TEST " . __CLASS__;
    }


    public function registration(...$data)
    {
        $password = md5($data[2]);
        $sql = "INSERT INTO `users` (`id`, `name`,`email`,`password`) VALUES (NULL, '$data[0]','$data[1]','$password')";

        try {
            if ($this->con->query($sql)) {
                return true;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }

 
    public function authenticate($email,$password){
        $password = md5($password);
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'LIMIT 1";

        $result = $this->con->query($sql);
        try {
            if ($result) {
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    return $row;
                } else {
                    return false;
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
   
}
