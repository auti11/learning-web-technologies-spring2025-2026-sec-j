<?php
$bg="";
if(isset($_POST['submit'])){
    $bg=$_POST['bg'];
    echo "Blood Group: ".$bg;
}
?>
<form method="post" action="">
       <fieldset>
        <legend>Blood Group</legend>
        <select name="bg" id="bg">
            <option value=""></option>
            <option value="A+" <?php if($bg=="A+") echo "selected"; ?>>A+</option>

            <option value="A-" <?php if($bg=="A-") echo "selected"; ?>>A-</option>
            <option value="B+" <?php if($bg=="B+") echo "selected"; ?>>B+</option>
            <option value="B-" <?php if($bg=="B-") echo "selected"; ?>>B-</option>
            <option value="AB+" <?php if($bg=="AB+") echo "selected"; ?>>AB+</option>
            <option value="AB-" <?php if($bg=="AB-") echo "selected"; ?>>AB-</option>
            <option value="O+" <?php if($bg=="O+") echo "selected"; ?>>O+</option>
            <option value="O-" <?php if($bg=="O-") echo "selected"; ?>>O-</option>
        </select>
        <br><hr>
        <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>