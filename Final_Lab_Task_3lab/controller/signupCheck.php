<?php
session_start();

if(isset($_POST['submit'])){

    $_SESSION['user'] = [
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'email' => $_POST['email']
    ];

    header("Location: ../view/login.php");
    exit();
}
?>