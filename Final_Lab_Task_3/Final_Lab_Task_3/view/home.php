<?php 
session_start();

if(!isset($_SESSION['status'])){
    header("Location: login.php");
    exit();
}
?>

<h1>Welcome <?php echo $_SESSION['user']['username']; ?></h1>

<a href="product_list.php">Manage Product</a> |
<a href="../controller/logout.php">Logout</a>