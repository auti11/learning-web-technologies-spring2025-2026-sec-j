<?php
session_start();

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($username == "" || $password == ""){
    echo "Null input!";
}
else if($_SESSION['user']['username'] == $username 
     && $_SESSION['user']['password'] == $password){

    $_SESSION['status'] = true;

    if(isset($_REQUEST['remember'])){
        setcookie('status', 'true', time()+3000, '/');
    }

    header('location: dashboard.php');
}
else{
    echo "Invalid user!";
}
?>
    