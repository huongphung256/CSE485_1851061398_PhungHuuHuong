<?php
    session_start();
    
    if(isset($_SESSION['username'])){
        require "config.php";
        include("sidebar_header.php");
        $result = mysqli_query($conn,"SELECT * FROM work");
        if(mysqli_num_rows($result) > 0){
            $blog = mysqli_fetch_all($result);
        }
        if(isset($_POST["submit"])){
                $title = $_POST["title"];
                $company = $_POST["company"];
                $description = $_POST["description"];
                $yearstart = $_POST["yearstart"];
                $yearend = $_POST["yearend"];
                $sql = "INSERT INTO work(title, company, description, yearstart, yearend, personal_id) VALUES ('$title','$company','$description','$yearstart','$yearend',1)";
                $insert = mysqli_query($conn, $sql);
                if($insert){
                    header("location: work.php");
                }
        }
?>
<div class="container">
    <h1>Add Work</h1>
    <?php
        if(!empty($statusMsg)){
    ?>
        <p class="status <?php echo $status; ?>" style="color: red;"><?php echo $statusMsg?></p>
    <?php
        }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" >
        </div>
        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="company" >
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" >
        </div>
        <div class="form-group">
            <label>Yearstart</label>
            <input type="text" class="form-control" name="yearstart" >
        </div>
        <div class="form-group">
            <label>Yearend</label>
            <input type="text" class="form-control" name="yearend" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name = "submit">Add</button>
        </div>
    </form>
</div>
<?php
       
    }else{
        header("location: ../index.php");
    exit();
    }
    include "sidebar_footer.php";
?>