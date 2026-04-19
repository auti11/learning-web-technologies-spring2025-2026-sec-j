<?php
session_start();

session_destroy();
setcookie('status','',time()-10,'/');

header('location: login.php');
?>