<?php
    session_start();
    include("sidebar_header.php");
    if(isset($_SESSION['username'])){
        require "config.php";
        
        $result = mysqli_query($conn,"SELECT * FROM blog");
        if(mysqli_num_rows($result) > 0){
            $blog = mysqli_fetch_all($result);
        }
        if(isset($_POST["submit"])){
            $status = "error";
            if(!empty($_FILES["img"]["name"])){
                $fileName = basename($_FILES["img"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
                $allowTypes = array('jpg','png','jpeg','gif');
                if(in_array($fileType,$allowTypes)){
                    $img = 'image/'.$_FILES["img"]["name"];
                    $title = $_POST["title"];
                    $description = $_POST["description"];
                    $time = $_POST["time"];
                    $heart = $_POST["heart"];
                    $eye = $_POST["eye"];
                    $sql = "INSERT INTO blog(image, title, description, time, heart, eye, personal_id) VALUES ('$img','$title','$description','$time','$heart','$eye',1)";
                    $insert = mysqli_query($conn, $sql);
                    if($insert){
                        header("location: index.php");
                        $status = 'success';
                        $statusMsg = "Upload file successfully";
                        
                    }else{
                        $statusMsg = "Upload file failed. Please try again.";
                    }
                }else{
                    $statusMsg = "Sorry. Only JPG, JPEG, PNG or GIF files are allowed top upload.";
                }
            }else{
                $statusMsg = "Please select an image file to upload.";
            }
        }
?>
<div class="container">
    <h1>Add Blog</h1>
    <?php
        if(!empty($statusMsg)){
    ?>
        <p class="status <?php echo $status; ?>" style="color: red;"><?php echo $statusMsg?></p>
    <?php
        }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="img">
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" >
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" >
        </div>
        <div class="form-group">
            <label>Time</label>
            <input type="text" class="form-control" name="time" >
        </div>
        <div class="form-group">
            <label>Heart</label>
            <input type="text" class="form-control" name="heart" >
        </div>
        <div class="form-group">
            <label>Eye</label>
            <input type="text" class="form-control" name="eye" >
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