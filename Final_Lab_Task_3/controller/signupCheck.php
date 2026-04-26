<?php 
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email =$_POST['email'];

   if($username == "" || $password == "" || $email = ""){
        echo "All fields are required";
    }
    else {
        $_SESSION['user'] = [
            'username' => $username,
            'password' => $password,
            'email' => $email
        ];
        header("Location: ../view/login.php");
    }
   }
?>