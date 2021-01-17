<?php
    include('sidebar_header.php');
    require "config.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM skill WHERE skill_id='$id'");
        header("location: skill.php");
    }
    include('sidebar_footer.php');
?>
