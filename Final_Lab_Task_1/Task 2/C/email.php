    <?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    echo "Email: $email";
}
?>
    <form method="post" action="">
 <fieldset>
<legend>EMAIL</legend>

Email:
<input type="email" name="email"
value="<?php if(isset($_POST['email'])){echo $email;} ?>">

<br><br>
<input type="submit" name="submit">

</fieldset>
</form>