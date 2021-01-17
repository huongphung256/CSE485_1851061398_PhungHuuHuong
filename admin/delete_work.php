<?php
    include('sidebar_header.php');
    require "config.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM work WHERE work_id='$id'");
        header("location: work.php");
    }
    include('sidebar_footer.php');
?>
