<?php

use App\helper\Auth;
use App\models\Item;
use App\helper\Session;

require("./bootstrap/app.php");

$auth = new Auth();
if(!$auth->isAuthenticate()){
 
    header('location: login.php');
    exit;
}
$item = new Item();
include_once('./views/layouts/header.php');


?>
<div class="d-flex justify-content-between">
    <div class="">
        <h6 class="mt-3">Hello, <?= Session::get('authName')?></h6>
        <h6 class="">Email: <?= Session::get('authEmail')?></h6>
    </div>
    <div class="align-self-center">
        <form action="./app/controller/AuthController.php" method="POST">
            <button class="btn btn-sm btn-success" name="logout">Logout</button>
        </form>
    </div>
</div>
<hr>
<h2 class="text-center m-5">All Items</h2>
<hr>
<?php
if (Session::get('alert')) {
?>
    <div class="alert alert-<?= Session::get('type') ?> alert-dismissible fade show" role="alert">
        <?= Session::get('alert') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<div class="row justify-content-center">
    <div class="col-md-7">
        <table class="table table-bordered text-center">
            <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>

            <?php
            foreach ($item->getAllItems() as $key => $item) {
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $item['title'] ?></td>
                    <td>
                        <a href="" class="btn btn-sm btn-success">View</a>
                        <a href="edit.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-info">Edit</a>
                        <form action="./app/controller/ItemController.php" class="d-inline" method="POST">
                            <input type="hidden" name="id" id="" value="<?= $item['id'] ?>">
                            <button name="delete" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div class="col-md-5">
        <h4>Create New Item</h4>
        <form action="./app/controller/ItemController.php" method="POST">
            <input type="text" class="form-control" name="title" placeholder="Enter Title">
            <?php
            if (!empty(Session::get('error'))) { ?>
                <span class="text-danger p-1 d-block"><?= Session::get('error') ?></span>
            <?php }
            ?>
            <br>
            <button class="btn btn-sm btn-success" name="store">Submit</button>
        </form>
    </div>
</div>


<?php
Session::forgot('alert');
Session::forgot('error');
include_once('./views/layouts/footer.php');
?>
