<?php
session_start();

if(!isset($_SESSION['status'])){
    header("Location: login.php");
    exit();
}
?>
<h1>login for manage products</h1>
<h1>Welcome <?php echo $_SESSION['user']['username']; ?></h1>

<a href="product_list.php">Manage Products</a> |
<a href="../controller/logout.php">Login</a>