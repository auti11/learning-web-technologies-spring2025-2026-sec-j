
<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    echo "Name: ".$name;
}
?>

<form method="post">
    <fieldset>
        <legend>NAME</legend>
        Name: <input type="text" name="name" value="<?php if(isset($name)) echo $name?>"><br>
        <hr>
        <button type="submit" name="submit">Submit</button>
    </fieldset>
</form>