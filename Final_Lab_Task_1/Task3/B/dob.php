    <?php
if(isset($_POST['submit'])){
    $dob = $_POST['dob'];
    echo "DOB: ".$dob;
}
?>
    <form method="post"action="">
        <fieldset>
            <legend>Date of Birth</legend>
        <input type="date" name="dob"><br>
        <hr>
        <button type="submit">Submit</button>
        </fieldset>
    </form>