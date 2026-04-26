<!DOCTYPE html>
<html lang="en">
<head>

    <title>Signup</title>
</head>
<body>
    This is the signup page.
    <form action="../controller/signupCheck.php" method="post">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Signup">
    </form>
    <a href="login.php">Already have an account? Login here.</a>
    
</body>
</html>