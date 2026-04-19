<?php
session_start();

if(isset($_REQUEST['submit'])){

    $name       = $_REQUEST['name'];
    $email      = $_REQUEST['email'];
    $username   = $_REQUEST['username'];
    $password   = $_REQUEST['password'];
    $confirm    = $_REQUEST['confirm'];
    $gender     = $_REQUEST['gender'] ?? "";
    $dd         = $_REQUEST['dd'];
    $mm         = $_REQUEST['mm'];
    $yyyy       = $_REQUEST['yyyy'];

    if($name=="" || $email=="" || $username=="" || $password=="" || $confirm==""){
        echo "Null input!";
    }
    else if($password != $confirm){
        echo "Password mismatch!";
    }
    else{
        $_SESSION['user'] = [
            'name'=>$name,
            'email'=>$email,
            'username'=>$username,
            'password'=>$password,
            'gender'=>$gender,
            'dd'=>$dd,
            'mm'=>$mm,
            'yyyy'=>$yyyy
        ];

        echo "Registration successful! <a href='login.php'>Login</a>";
    }
}
?>