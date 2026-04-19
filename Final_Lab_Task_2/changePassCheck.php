<?php
session_start();

if(isset($_REQUEST['submit'])){

    $old     = $_REQUEST['old'];
    $new     = $_REQUEST['new'];
    $confirm = $_REQUEST['confirm'];

    if($old=="" || $new=="" || $confirm==""){
        echo "Null input!";
    }
    else if($_SESSION['user']['password'] != $old){
        echo "Current password incorrect!";
    }
    else if($new != $confirm){
        echo "New password mismatch!";
    }
    else{
        $_SESSION['user']['password'] = $new;
        echo "Password changed successfully!";
    }
}
?>