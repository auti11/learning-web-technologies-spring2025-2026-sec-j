<?php 
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Home</title>
</head>
<body>
   <h1>Home<?php echo $_SESSION['user']['username']; ?></h1>
   <p>This is the home page. Welcome to the home page!</p>
   <a href="product_list.php">Manage Product</a> |
   <a href="../controller/logout.php">Logout</a>
</body>
</html>