<?php
session_start();

if(!isset($_SESSION['status'])){
    header("Location: login.php");
    exit();
}

$id = $_POST['id'];

$product = null;

foreach($_SESSION['products'] as $p){
    if($p['id'] == $id){
        $product = $p;
    }
}
?>

<h2>Edit Product</h2>

<form method="post" action="../controller/productController.php">

    <input type="hidden" name="id" value="<?= $product['id'] ?>">

    Name: <input type="text" name="name" value="<?= $product['name'] ?>"><br>
    Qty: <input type="number" name="qty" value="<?= $product['qty'] ?>"><br>
    Price: <input type="number" name="price" value="<?= $product['price'] ?>"><br>

    <input type="submit" name="update" value="Update">

</form>

<a href="product_list.php">Back</a>