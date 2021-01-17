<?php
    session_start();
    
    if(isset($_SESSION['username'])){
        require "config.php";
        include("sidebar_header.php");
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM work WHERE work_id = '$id'");
        if(mysqli_num_rows($result) === 1 ){
            $serv = mysqli_fetch_array($result);
            $title = $serv['title'];
            $company = $serv['company'];
            $description = $serv['description'];
            $yearstart = $serv['yearstart'];
            $yearend = $serv['yearend'];
        }
        if(isset($_POST["update"])){
                $title = $_POST["title"];
                $company = $_POST["company"];
                $description = $_POST["description"];
                $yearstart = $_POST["yearstart"];
                $yearend = $_POST["yearend"];
                $sql = "UPDATE work SET title = '$title', company = '$company', description = '$description', yearstart = '$yearstart', yearend = '$yearend' WHERE work_id = '$id'";
                $update = mysqli_query($conn, $sql);
                if($update){
                    header("location: work.php");
                }
        }
?>
<div class="container">
    <h1>Edit Work</h1>
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
            <input type="text" class="form-control" name="title" value="<?php echo $title?>">
        </div>
        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="company" value="<?php echo $company?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="<?php echo $description?>">
        </div>
        <div class="form-group">
            <label>Yearstart</label>
            <input type="text" class="form-control" name="yearstart" value="<?php echo $yearstart?>">
        </div>
        <div class="form-group">
            <label>Yearend</label>
            <input type="text" class="form-control" name="yearend" value="<?php echo $yearend?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name = "update">Update</button>
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