<?php
session_start();

if(isset($_REQUEST['submit'])){

    $_SESSION['user']['name'] = $_REQUEST['name'];
    $_SESSION['user']['email'] = $_REQUEST['email'];
    $_SESSION['user']['gender']= $_REQUEST['gender'];
    $_SESSION['user']['dd'] = $_REQUEST['dd'];
    $_SESSION['user']['mm']  = $_REQUEST['mm'];
    $_SESSION['user']['yyyy']= $_REQUEST['yyyy'];

    header('location: profile.php');
}
?>