<?php
include("../../app/helper/Session.php");
include("../../app/db/Item.php");
include("../../app/db/DB.php");

use app\db\Item;
use app\helper\Session;

$item = new Item();
// Store 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['store'])) {

        $title = $_REQUEST['title'];
        if (empty($title)) {
            Session::set('error', "Field must not be empty!");
            header('location: ../../index.php');
        } else {
            $item->store($title);
            // $item->test();
        }
        echo Session::get('error');
    }
}
