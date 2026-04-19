<?php
session_start();
if(!isset($_SESSION['status'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<body>

<table border="1" width="80%" align="center">
<tr>
<td><h2>XCompany</h2></td>
<td align="right">
Logged in as <a href="profile.php"><?php echo $_SESSION['user']['username']; ?></a> |
<a href="logout.php">Logout</a>
</td>
</tr>

<tr>
<td width="30%">
<ul>
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="profile.php">View Profile</a></li>
<li><a href="edit.php">Edit Profile</a></li>
<li><a href="changePic.php">Change Profile Picture</a></li>
<li><a href="changePass.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</td>

<td valign="top">
<h3>Welcome <?php echo $_SESSION['user']['username']; ?></h3>
</td>
</tr>

<tr>
<td colspan="2" align="center">Copyright © 2017</td>
</tr>

</table>

</body>
</html>