<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>


<table border="1" width="100%">
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
<td colspan="2" align="center">

<form method="post" action="regCheck.php">
<fieldset style="width:300px;">
<legend>REGISTRATION</legend>

Name: <input type="text" name="name"><br><br>
Email: <input type="email" name="email"><br><br>
User Name: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>
Confirm Password: <input type="password" name="confirm"><br><br>

<fieldset>
<legend>Gender</legend>
 <input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
</fieldset>
<br>

<fieldset>
<legend>Date of Birth</legend>
 <input type="text" name="dd" size="2"> /
 
 <input type="text" name="mm" size="2"> /
<input type="text" name="yyyy" size="4">
</fieldset>
<br>

<input type="submit" name="submit" value="Submit">
<input type="reset">

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