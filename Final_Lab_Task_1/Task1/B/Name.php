
  <?php
if(isset($_POST['submit'])){
    echo "Name: ".$_POST['name'];
}
?>

<form method="post">
    <fieldset>
        <legend>NAME</legend>
        Name: <input type="text" name="name"><br>
        <hr>
        <button type="submit" name="submit">Submit</button>
    </fieldset>
</form>