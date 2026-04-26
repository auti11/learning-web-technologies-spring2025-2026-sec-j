<?php
session_start();

if(!isset($_SESSION['products'])){
    $_SESSION['products'] = [];
}

# ADD PRODUCT
if(isset($_POST['add'])){

    $_SESSION['products'][] = [
        'id' => count($_SESSION['products']) + 1,
        'name' => $_POST['name'],
        'qty' => $_POST['qty'],
        'price' => $_POST['price']
    ];

    header("Location: ../view/product_list.php");
    exit();
}

# DELETE PRODUCT
if(isset($_POST['delete'])){

    foreach($_SESSION['products'] as $k => $p){
        if($p['id'] == $_POST['id']){
            unset($_SESSION['products'][$k]);
        }
    }

    $_SESSION['products'] = array_values($_SESSION['products']);

    header("Location: ../view/product_list.php");
    exit();
}

# UPDATE PRODUCT
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