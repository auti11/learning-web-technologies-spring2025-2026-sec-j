<?php
session_start();

if(isset($_POST['submit'])){

    $u = $_POST['username'];
    $p = $_POST['password'];

    if(isset($_SESSION['user']) &&
       $u == $_SESSION['user']['username'] &&
       $p == $_SESSION['user']['password']){

        $_SESSION['status'] = true;

        header("Location: ../view/home.php");
        exit();
    }

    echo "Invalid username or password";
}
?>