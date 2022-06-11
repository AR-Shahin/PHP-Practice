<?php

namespace App\models;

use Exception;

class Item extends DB
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


    public function store($title)
    {
        $sql = "INSERT INTO `items` (`id`, `title`) VALUES (NULL, '$title')";

        try {
            if ($this->con->query($sql)) {
                return true;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `items` WHERE `items`.`id` = $id";

        try {
            if ($this->con->query($sql)) {
                return true;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }

    public function show($id)
    {
        $sql = "SELECT * FROM items WHERE `id` = $id";

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

        return false;
    }

    public function update($title, $id)
    {
        $sql = "UPDATE `items` SET `title` = '$title' WHERE `items`.`id` = $id";

        try {
            if ($this->con->query($sql)) {
                return true;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return false;
    }
}
