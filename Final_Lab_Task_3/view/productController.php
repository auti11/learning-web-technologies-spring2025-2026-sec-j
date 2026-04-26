<?php
session_start();

if(!isset($_SESSION['products'])){
    $_SESSION['products'] = [];
}


if(isset($_POST['add'])){

    if($_POST['name']=="" || $_POST['qty']=="" || $_POST['price']==""){
        echo "All fields required";
        exit();
    }

    $_SESSION['products'][] = [
        'id' => count($_SESSION['products']) + 1,
        'name' => $_POST['name'],
        'qty' => $_POST['qty'],
        'price' => $_POST['price']
    ];

    header("Location: ../view/product_list.php");
    exit();
}


if(isset($_POST['delete'])){

    foreach($_SESSION['products'] as $key => $p){
        if($p['id'] == $_POST['id']){
            unset($_SESSION['products'][$key]);
        }
    }

    $_SESSION['products'] = array_values($_SESSION['products']);

    header("Location: ../view/product_list.php");
    exit();
}


if(isset($_POST['update'])){

    foreach($_SESSION['products'] as &$p){
        if($p['id'] == $_POST['id']){
            $p['name'] = $_POST['name'];
            $p['qty'] = $_POST['qty'];
            $p['price'] = $_POST['price'];
        }
    }

    header("Location: ../view/product_list.php");
    exit();
}
?>