<?php
if(isset($_POST['submit'])){
    $degree = $_POST['degree'];
    foreach($degree as $d){
        echo $d." ";
    }
}
?>
    <form method="post" action="">
<fieldset>
<legend>DEGREE</legend>

<input type="checkbox" name="degree" value="SSC"> SSC

<input type="checkbox" name="degree" value="HSC"> HSC

<input type="checkbox" name="degree" value="BSc"> BSc
<input type="checkbox" name="degree" value="MSc"> MSc

<br><hr>
<input type="submit" name="submit">

</fieldset>
</form>