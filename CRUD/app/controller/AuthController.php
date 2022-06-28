<?php

use App\helper\Auth;
use App\helper\Session;
use App\models\User;

require("../../vendor/autoload.php");
$user = new User();
$auth = new Auth();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # Registration
    if (isset($_POST['registration'])) {
    
        $name = $_REQUEST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($name) || empty($email) || empty($password)) {
            Session::set('type', 'warning');
            Session::set('alert', 'Field must not be empty!');
            header("Location: /registration.php");
            exit();
        } else {
            if ($user->registration($name,$email,$password)) {
                Session::set('type', 'success');
                Session::set('alert', 'User Created Successfully, Please login!');
                header("Location: /login.php");
            }
        }
    }

    # Login 
    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password)){
           $res = $user->authenticate($email,$password);
           if($res){
            $auth->setAuth($res);
            header("Location: /login.php");
            exit();
           }else{
            Session::set('type', 'danger');
            Session::set('alert', 'Invalid Credentials!');
            header("Location: /login.php");
            exit();
           }
        }else{
            Session::set('type', 'warning');
            Session::set('alert', 'Field must not be empty!');
            header("Location: /login.php");
            exit();
        }
    }

       # logout 
       if (isset($_POST['logout'])) {
            $auth->removeAuth($res);
            header("Location: /login.php");
            exit();
       }

}
