<?php
session_start();


if(!isset($_SESSION['status'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>

<table border="1" width="80%" align="center">

    <tr>
        <td align="left">
            <h2>XCompany</h2>
        </td>
        <td align="right" colspan="2">
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

        <td colspan="2">
            <form method="post" action="editCheck.php">
            <fieldset style="width:400px;">
                <legend>EDIT PROFILE</legend>

                Name: 
                <input type="text" name="name" 
                value="<?php echo $_SESSION['user']['name']; ?>"><br><hr>

                Email: 
                <input type="email" name="email" 
                value="<?php echo $_SESSION['user']['email']; ?>"><br><hr>

                Gender: 
                <input type="radio" name="gender" value="Male"
                <?php if($_SESSION['user']['gender']=="Male") echo "checked"; ?>> Male

                <input type="radio" name="gender" value="Female"
                <?php if($_SESSION['user']['gender']=="Female") echo "checked"; ?>> Female

                <input type="radio" name="gender" value="Other"
                <?php if($_SESSION['user']['gender']=="Other") echo "checked"; ?>> Other
                <br><hr>

                Date of Birth:
                <input type="text" name="dd" size="2"
                value="<?php echo $_SESSION['user']['dd']; ?>"> /

                <input type="text" name="mm" size="2"
                value="<?php echo $_SESSION['user']['mm']; ?>"> /

                <input type="text" name="yyyy" size="4"
                value="<?php echo $_SESSION['user']['yyyy']; ?>">
                <br><hr>

                <input type="submit" name="submit" value="Update">

            </fieldset>
            </form>
        </td>

    </tr>

  
    <tr>
        <td colspan="3" align="center">
            Copyright © 2017
        </td>
    </tr>

</table>

</body>
</html>