<?php

use App\models\Item;
use App\helper\Session;

require("./bootstrap/app.php");

$item = new Item();

include_once('./views/layouts/header.php');


Session::forgot('alert');
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    # edit 
    if (isset($_GET['id'])) {
        $id = $_REQUEST['id'];

        $res = $item->show($id);
        if ($res) {
            $data = $res;
        } else {
            header('location: index.php');
        }
    }
}


?>


<h2 class="text-center m-5">Edit Item</h2>
<hr>
<a href="index.php" class="btn btn-sm btn-info">Back</a>
<div class="row justify-content-center">

    <div class="col-md-5">
        <h4>Edit Item</h4>
        <form action="./app/controller/ItemController.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <input type="text" class="form-control" name="title" value="<?= $data['title'] ?>">
            <?php
            if (!empty(Session::get('error'))) { ?>
                <span class="text-danger p-1 d-block"><?= Session::get('error') ?></span>
            <?php }
            ?>
            <br>
            <button class="btn btn-sm btn-success" name="update">Submit</button>
        </form>
    </div>
</div>


<?php

include_once('./views/layouts/footer.php');
?>
