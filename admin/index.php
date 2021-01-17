<?php
    session_start();
    if(isset($_SESSION['username'])){
        include "sidebar_header.php";
?>
    <h1>Hello <?php echo $_SESSION['username']?></h1>
<?php
        include "sidebar_footer.php";
    }else{
        header("location: ../index.php");
        exit();
    }
?>