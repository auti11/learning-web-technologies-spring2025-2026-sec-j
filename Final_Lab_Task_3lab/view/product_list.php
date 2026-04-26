<?php
session_start();

if(!isset($_SESSION['status'])){
    header("Location: login.php");
    exit();
}

if(!isset($_SESSION['products'])){
    $_SESSION['products'] = [];
}

$products = $_SESSION['products'];
?>

<h2>Product List</h2>

<a href="add_product.php">Add Product</a> |
<a href="home.php">Back</a>

<br><br>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Qty</th>
    <th>Price</th>
    <th>Action</th>
</tr>

<?php foreach($products as $p){ ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['name'] ?></td>
    <td><?= $p['qty'] ?></td>
    <td><?= $p['price'] ?></td>

    <td>

        <!-- EDIT -->
        <form method="post" action="edit_product.php" style="display:inline;">
            <input type="hidden" name="id" value="<?= $p['id'] ?>">
            <input type="submit" value="Edit">
        </form>

        <!-- DELETE -->
        <form method="post" action="../controller/productController.php" style="display:inline;">
            <input type="hidden" name="id" value="<?= $p['id'] ?>">
            <input type="submit" name="delete" value="Delete">
        </form>

    </td>
</tr>
<?php } ?>

</table>