<?php
session_start();

if(isset($_REQUEST['submit'])){

    $email = $_REQUEST['email'];

    if($_SESSION['user']['email'] == $email){
        echo "Your password is: ".$_SESSION['user']['password'];
    }else{
        echo "Email not found!";
    }
}
?>