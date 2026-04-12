<?php
if(isset($_POST['submit'])){
    $gender = $_POST['gender'];
    echo "Gender: ".$gender;
}
?>

<form method="post">
<fieldset>
<legend>GENDER</legend>

<input type="radio" name="gender" value="Male"> Male

<input type="radio" name="gender" value="Female"> Female

<br><br>
<input type="submit" name="submit">

</fieldset>
</form>