<?php
    include('sidebar_header.php');
    require "config.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM education WHERE education_id='$id'");
        header("location: education.php");
    }
    include('sidebar_footer.php');
?>
