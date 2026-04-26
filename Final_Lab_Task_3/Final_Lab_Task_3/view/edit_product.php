<?php
session_start();


if(!isset($_SESSION['products'])){
    $_SESSION['products'] = [];
}

if(!isset($_POST['id'])){
    echo "Invalid request!";
    exit();
}

$id = $_POST['id'];
$product = null;


foreach($_SESSION['products'] as $p){
    if($p['id'] == $id){
        $product = $p;
        break;
    }
}


if($product == null){
    echo "Product not found!";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form method="post" action="../controller/productController.php">

    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

    Name:
    <input type="text" name="name" value="<?php echo $product['name']; ?>"><br>

    Quantity:
    <input type="number" name="qty" value="<?php echo $product['qty']; ?>"><br>

    Price:
    <input type="number" name="price" value="<?php echo $product['price']; ?>"><br>

    <input type="submit" name="update" value="Update">

</form>

<br>
<a href="product_list.php">Back</a>

</body>
</html>