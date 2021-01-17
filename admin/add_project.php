<?php
    session_start();
    include("sidebar_header.php");
    if(isset($_SESSION['username'])){
        require "config.php";
        
        $result = mysqli_query($conn,"SELECT * FROM project");
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
                    $name = $_POST["name"];
                    $description = $_POST["description"];
                    $sql = "INSERT INTO project(image, name, description, personal_id) VALUES ('$img','$name','$description', 1)";
                    $insert = mysqli_query($conn, $sql);
                    if($insert){
                        header("location: project.php");
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
    <h1>Add Project</h1>
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
            <label>Name</label>
            <input type="text" class="form-control" name="name" >
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" >
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