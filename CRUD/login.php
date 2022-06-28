<?php

use App\helper\Auth;
use App\helper\Session;

require("./bootstrap/app.php");

$auth = new Auth();
if($auth->isAuthenticate()){
 
    header('location: index.php');
    exit;
}

include_once('./views/layouts/header.php');


?>

<h2 class="text-center m-5">Login</h2>
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
    <div class="col-5">
        <div class="card">
            <div class="card-body">
                <form action="./app/controller/AuthController.php" method="POST">
                    <div class="my-2">
                        <label for=""><b>Email</b></label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <div class="my-2">
                        <label for=""><b>Password</b></label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>
                    <div class="my-2">
                        <button class="btn btn-sm btn-success" name="login">Login</button>
                        <a href="./registration.php" class="btn btn-link">Registration</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
Session::forgot('alert');
Session::forgot('error');
include_once('./views/layouts/footer.php');
?>
