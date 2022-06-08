<?php

include("./app/db/Item.php");

use app\db\Item;

include_once('./views/layouts/header.php');

$item = new Item();

?>


<h2 class="text-center m-5">All Items</h2>
<hr>
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
                        <a href="" class="btn btn-sm btn-info">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div class="col-md-5">
        <h4>Create New Item</h4>
        <form action="">
            <input type="text" class="form-control" name="title" placeholder="Enter Title">
            <br>
            <button class="btn btn-sm btn-success">Submit</button>
        </form>
    </div>
</div>


<?php
include_once('./views/layouts/footer.php');
?>
