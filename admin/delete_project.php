<?php
    include('sidebar_header.php');
    require "config.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM project WHERE project_id='$id'");
        header("location: project.php");
    }
    include('sidebar_footer.php');
?>
