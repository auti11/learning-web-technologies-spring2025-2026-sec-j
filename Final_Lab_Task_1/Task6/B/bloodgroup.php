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
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <br><hr>
        <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>