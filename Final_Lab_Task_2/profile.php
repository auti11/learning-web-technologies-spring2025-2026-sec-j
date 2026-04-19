<?php
session_start();

// 🔴 protect page
if(!isset($_SESSION['status'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<table border="1" width="80%" align="center">

  
    <tr>
        <td align="left">
            <h2>XCompany</h2>
        </td>
        <td align="right" COLSPAN="2">
            Logged in as 
            <a href="profile.php">
                <?php echo $_SESSION['user']['username']; ?>
            </a> |
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

        <!-- Profile Info -->
        <td>
            <fieldset style="width:400px;">
                <legend>PROFILE</legend>

                Name: <?php echo $_SESSION['user']['name']; ?><br><hr>
                Email: <?php echo $_SESSION['user']['email']; ?><br><hr>
                Gender: <?php echo $_SESSION['user']['gender']; ?><br><hr>
                DOB: 
                <?php 
                    echo $_SESSION['user']['dd']."/".
                         $_SESSION['user']['mm']."/".
                         $_SESSION['user']['yyyy']; 
                ?>

            </fieldset>
        </td>

        <!-- Profile Picture -->
        <td align="center">
            <a href="changePic.php">
                <img src="<?php 
                    echo isset($_SESSION['user']['profilePic']) 
                    ? $_SESSION['user']['profilePic'] 
                    : 'default.png'; 
                ?>" height="100px">Change Picture
            </a>
        </td>

    </tr>

    <!-- Footer -->
    <tr>
        <td colspan="3" align="center">
            Copyright © 2017
        </td>
    </tr>

</table>

</body>
</html>