<?php


class Node
{
    public $next;
    public $prev;
    public $data;

    function __construct($data)
    {
        $this->data = $data;
        $this->prev = null;
        $this->next = null;
    }
}

class LinkList
{
    public $head;
    public $tail;
    public $count;

    function __construct()
    {
        $this->count = 0;
        $this->head = null;
        $this->tail = null;
    }

    public function insert($data)
    {
        $newNode = new Node($data);

        if ($this->head === null) {
            $this->head = $this->tail = $newNode;
            $this->count++;
        } else {
            $this->tail->next = $newNode;
            $newNode->prev = $this->tail;
            $this->tail = $newNode;
            $this->count++;
        }
    }

    public function print_list()
    {
        $temp = $this->head;

        while ($temp != null) {
            echo "{$temp->data} ";
            $temp = $temp->next;
        }
    }
}


$db = new LinkList();
$db->insert(10);
$db->insert(20);
$db->insert(30);
$db->insert(40);
$db->insert(50);

$db->print_list();
