<?php

namespace app\db;

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
}
