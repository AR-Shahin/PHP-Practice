<?php

namespace app\db;

use Exception;

include './app/db/DB.php';


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
        echo "TEST";
    }


    public function store($title)
    {
        //return $title;
        $sql = "INSERT INTO `items` (`id`, `title`) VALUES (NULL, '$title')";
        // $sql = "INSERT INTO items (title) VALUES ($title)";

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
