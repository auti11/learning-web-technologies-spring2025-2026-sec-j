<?php
if(isset($_POST['submit'])){
    $gender = $_POST['gender'];
    echo "Gender: ".$gender;
}
?>

<form method="post">
<fieldset>
<legend>GENDER</legend>

<input type="radio" name="gender" value="Male"
<?php if(isset($_POST['gender']) && $gender=="Male"){echo "checked";} ?>> Male

<input type="radio" name="gender" value="Female"
<?php if(isset($_POST['gender']) && $gender=="Female"){echo "checked";} ?>> Female

<br><br>
<input type="submit" name="submit">

</fieldset>
</form>