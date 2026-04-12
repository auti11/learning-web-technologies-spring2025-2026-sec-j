    <?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    echo "Email: $email";
}
?>
    
    <form method="post"action="">
        <fieldset>
            <legend>EMAIL</legend>
        Email:<input type="email" name="email"><br>
        <hr>
        <button type="submit">Submit</button>
        </fieldset>
    </form>