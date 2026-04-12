<?php
$degree=[];
if(isset($_POST['submit'])){
    $degree=$_POST['degree'] ?? [];
    foreach($degree as $d){
        echo $d." ";
    }
}
?>

<form method="post">
    <fieldset>
        <legend>DEGREE</legend>

        <input type="checkbox" name="degree[]" value="SSC"<?php if(in_array("SSC",$degree)) echo "checked"; ?>>SSC

        <input type="checkbox" name="degree[]" value="HSC"<?php if(in_array("HSC",$degree)) echo "checked"; ?>>HSC

        <input type="checkbox" name="degree[]" value="BSc"<?php if(in_array("BSc",$degree)) echo "checked"; ?>>BSc

        <br><hr>
        <button type="submit">Submit</button>
    </fieldset>
</form>