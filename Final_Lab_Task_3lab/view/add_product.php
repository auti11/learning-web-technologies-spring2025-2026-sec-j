<?php
session_start();

if(!isset($_SESSION['status'])){
    header("Location: login.php");
    exit();
}
?>

<h2>Add Product</h2>

<form method="post" action="../controller/productController.php">

    Name: <input type="text" name="name"><br>
    Qty: <input type="number" name="qty"><br>
    Price: <input type="number" name="price"><br>

    <input type="submit" name="add" value="Add Product">

</form>

<a href="product_list.php">Back</a>