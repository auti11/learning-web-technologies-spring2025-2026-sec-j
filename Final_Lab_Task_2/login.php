<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login</title>
</head>
<body>
    <table border="1" width="80%" align="center">
        <tr>
            <td>
                <h2>XCompany</h2>
            </td>
            <td align="right">
                <a href="index.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <fieldset style="width:400px;">
                    <form method="post" action="loginCheck.php">
                <legend>LOGIN</legend>
                    Username: <input type="text" name="username"><br><br>
                    Password: <input type="password" name="password"><br><br>
                    <hr>
                    <input type="checkbox" name="remember"> Remember Me<br><br>
                    <input type="submit" name="submit" value="Submit"><a href="forgot.php">Forgot Password?</a>
                </legend>
                 </fieldset>
                 </form>

            </td>
        </tr>

<tr>
<td colspan="2" align="center">Copyright © 2017</td>
</tr>
    </table>
</body>
</html>