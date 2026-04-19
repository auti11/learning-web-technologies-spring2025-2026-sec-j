<?php
session_start();

if(isset($_REQUEST['submit'])){

    if($_FILES['pic']['name'] == ""){
        echo "No file selected!";
    }
    else{
        
        $_SESSION['user']['profilePic'] = $_FILES['pic']['name'];

        echo "Profile picture updated!";
    }
}
?>