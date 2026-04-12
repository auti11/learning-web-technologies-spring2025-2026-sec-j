<?php
if(isset($_POST['submit'])){
    $degree = $_POST['degree'];
    foreach($degree as $d){
        echo $d." ";
    }
}
?>