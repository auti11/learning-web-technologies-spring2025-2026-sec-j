<?php 
session_start();

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_SESSION['user']) &&
       $username == $_SESSION['user']['username'] &&
       $password == $_SESSION['user']['password']){

        $_SESSION['status'] = true;

        header("Location: ../view/home.php");
        exit();
    }
    else {
        echo "Invalid username or password";
    }
}
?>