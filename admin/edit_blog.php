<?php
    session_start();
    if(isset($_GET['id'])){
        require "config.php";
        include("sidebar_header.php");
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM blog WHERE blog_id = '$id'");
        if(mysqli_num_rows($result) === 1 ){
            $serv = mysqli_fetch_array($result);
            $img = $serv['image'];
            $title = $serv['title'];
            $description = $serv['description'];
            $time = $serv['time'];
            $heart = $serv['heart'];
            $eye = $serv['eye'];
        }

        if(isset($_POST['update'])){
            $status = "error";
            if(!empty($_FILES["img"]["name"])){
                $fileName = basename($_FILES["img"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                $allowTypes = array('jpg','png','jpeg','gif');
                if(in_array($fileType,$allowTypes)){
                    $img = 'image/'.$_FILES["img"]["name"];
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $time = $_POST['time'];
                    $heart = $_POST['heart'];
                    $eye = $_POST['eye'];

                    $update = mysqli_query($conn, "UPDATE blog SET image = '$img', title = '$title', description = '$description', time = '$time', heart = '$heart', eye = '$eye' WHERE blog_id = '$id'");
                    if($update){
                        $status = 'success';
                        $statusMsg = "Upload file successfully";
                        header("location: blog.php");
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
    <h1>Edit Blog</h1>
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
            <input type="file" name="img" value="<?php echo $img?>">
        </div>
        <div class="form-group">
            <label>Title</label>
            <textarea name="title" rows="4" cols="100"><?php echo $title?></textarea>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="4" cols="100"><?php echo $description?></textarea>
        </div>
        <div class="form-group">
            <label>Time</label>
            <textarea name="time" rows="4" cols="100"><?php echo $time?></textarea>
        </div>
        <div class="form-group">
            <label>Heart</label>
            <textarea name="heart" rows="4" cols="100"><?php echo $heart?></textarea>
        </div>
        <div class="form-group">
            <label>Eye</label>
            <textarea name="eye" rows="4" cols="100"><?php echo $eye?></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </div>
    </form>
</div>
<?php
        include "sidebar_footer.php";
    }else{
        header("location: ../index.php");
    exit();
    }
?>