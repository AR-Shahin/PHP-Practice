<?php

use App\helper\Session;
use App\models\Item;

require("../../vendor/autoload.php");
$item = new Item();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # Store
    if (isset($_POST['store'])) {
        $title = $_POST['title'];
        if (empty($title)) {
            Session::set('error', "Field must not be empty!");
            header("Location: /");
        } else {
            Session::forgot('error');
            if ($item->store($title)) {
                Session::set('type', 'success');
                Session::set('alert', 'Data Created Successfully!');
                header("Location: /");
            }
        }
    }

    # Delete 
    if (isset($_POST['delete'])) {
        $id = $_REQUEST['id'];

        if ($item->delete($id)) {
            Session::set('type', 'success');
            Session::set('alert', 'Data Deleted Successfully!');
            header("Location: /");
        }
    }

    # update 
    if (isset($_POST['update'])) {
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        // echo $item->update($title, $id);
        if ($item->update($title, $id)) {
            Session::set('type', 'warning');
            Session::set('alert', 'Data Updated Successfully!');
            header('location: /');
        }
    }
}
