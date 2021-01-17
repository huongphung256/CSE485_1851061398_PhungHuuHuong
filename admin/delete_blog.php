<?php
    include('sidebar_header.php');
    require "config.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM blog WHERE blog_id='$id'");
        header("location: blog.php");
    }
    include('sidebar_footer.php');
?>
