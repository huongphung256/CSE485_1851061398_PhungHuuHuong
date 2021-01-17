<?php
    $conn = mysqli_connect('localhost', 'root', '', 'cv');
    if(!$conn) {
        die("Connect error" . mysqli_connect_error());
        exit();
    }
?>