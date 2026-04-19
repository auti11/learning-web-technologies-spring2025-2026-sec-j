<?php
session_start();

if(!isset($_SESSION['status'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Profile Picture</title>
</head>
<body>

<table border="1" width="80%" align="center">

<tr>
    <td><h2>XCompany</h2></td>
    <td align="right" colspan="2">
        Logged in as 
        <a href="profile.php"><?php echo $_SESSION['user']['username']; ?></a> |
        <a href="logout.php">Logout</a>
    </td>
</tr>

<tr height="200">

<td width="30%">
    Account
    <hr>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profile.php">View Profile</a></li>
        <li><a href="edit.php">Edit Profile</a></li>
        <li><a href="changePic.php">Change Profile Picture</a></li>
        <li><a href="changePass.php">Change Password</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</td>

<td colspan="2">
<form method="post" action="changePicCheck.php" enctype="multipart/form-data">
<fieldset style="width:400px;">
<legend>PROFILE PICTURE</legend>

Current Picture:<br>
<img src="<?php 
echo isset($_SESSION['user']['profilePic']) 
? $_SESSION['user']['profilePic'] 
: 'default.png'; 
?>" height="100"><br><hr>

Select Image: <input type="file" name="pic"><br><hr>

<input type="submit" name="submit" value="Upload">

</fieldset>
</form>
</td>

</tr>

<tr>
<td colspan="3" align="center">Copyright © 2017</td>
</tr>

</table>

</body>
</html>