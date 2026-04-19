<?php
session_start();

if(!isset($_SESSION['status'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
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
<form method="post" action="changePassCheck.php">
<fieldset style="width:400px;">
<legend>CHANGE PASSWORD</legend>
<table>
    <tr>
        <td>Current Password: </td>
        <td><input type="password" name="old"></td>
    </tr>
    <tr>
        <td>New Password: </td>
        <td><input type="password" name="new"></td>
    </tr>
    <tr>
        <td>Retype New Password: </td>
        <td><input type="password" name="confirm"></td>
      
    </tr>
    
    <tr>
        <td colspan="2">
            <input type="submit" name="submit" value="Change">
        </td>
    </tr>
</table>
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