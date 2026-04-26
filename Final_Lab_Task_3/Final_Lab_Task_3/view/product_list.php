<?php 
session_start();

if(!isset($_SESSION['products'])){
    $_SESSION['products'] = [];
}

$products = $_SESSION['products'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>

<h2>Product List</h2>

<a href="add_product.php">Add Product</a> |
<a href="home.php">Back</a>

<br><br>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Action</th>
</tr>

<?php foreach($products as $p){ ?>

<tr>
    <td><?php echo $p['id']; ?></td>
    <td><?php echo $p['name']; ?></td>
    <td><?php echo $p['qty']; ?></td>
    <td><?php echo $p['price']; ?></td>

    <td>

      
        <form method="post" action="edit_product.php" style="display:inline;">
            <input type="hidden" name="id" value="<?php echo $p['id']; ?>">
            <input type="submit" value="Edit">
        </form>

       
     <form method="post" action="../controller/productController.php">
    <input type="hidden" name="id" value="<?php echo $p['id']; ?>">
    <input type="submit" name="delete" value="Delete">
</form>

    </td>
</tr>

<?php } ?>

</table>

</body>
</html>