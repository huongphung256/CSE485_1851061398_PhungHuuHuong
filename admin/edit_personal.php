<?php
    session_start();
    if(isset($_GET['id'])){
        require "config.php";
        include("sidebar_header.php");
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM personal WHERE personal_id = '$id'");
        if(mysqli_num_rows($result) === 1 ){
            $serv = mysqli_fetch_array($result);
            $avatar = $serv['avatar'];
            $fullname = $serv['fullname'];
            $phone = $serv['phone'];
            $email = $serv['email'];
            $website = $serv['website'];
            $address = $serv['address'];
            $facebook_link = $serv['facebook_link'];
            $youtube_link = $serv['youtube_link'];
            $twitter_link = $serv['twitter_link'];
            $github_link = $serv['github_link'];
            $introduce = $serv['introduce'];
            $job = $serv['job'];
        }
    }
    if(isset($_POST['update'])){
        $status = "error";
        if(!empty($_FILES["avatar"]["name"])){
            $fileName = basename($_FILES["avatar"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            $allowTypes = array('jpg','png','jpeg','gif');
            if(in_array($fileType,$allowTypes)){
                $avatar = 'image/'.$_FILES["avatar"]["name"];
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $website = $_POST['website'];
                $address = $_POST['address'];
                $facebook_link = $_POST['facebook_link'];
                $youtube_link = $_POST['youtube_link'];
                $twitter_link = $_POST['twitter_link'];
                $github_link = $_POST['github_link'];
                $introduce = $_POST['introduce'];
                $job = $_POST['job'];

                $update = mysqli_query($conn, "UPDATE personal SET avatar = '$avatar', fullname = '$fullname', phone = '$phone', email = '$email', website = '$website', address = '$address', facebook_link = '$facebook_link', youtube_link = '$youtube_link', twitter_link = '$twitter_link', github_link = '$github_link', introduce = '$introduce', job = '$job' WHERE personal_id = '$id'");
                if($update){
                    $status = 'success';
                    $statusMsg = "Upload file successfully";
                    header("location: personal.php");
                }else{
                    $statusMsg = "Upload file failed. Please try again.";
                }
            }else{
                $statusMsg = "Sorry. Only JPG, JPEG, PNG or GIF files are allowed top upload.";
            }
        }else{
            $statusMsg = "Please select an image file to upload.";
        }
    
?>
<div class="container">
    <h1>Edit Personal</h1>
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
            <input type="file" name="avatar" value="<?php echo $avatar?>">
        </div>
        <div class="form-group">
            <label>Fullname</label>
            <textarea name="fullname" rows="4" cols="100"><?php echo $fullname?></textarea>
        </div>
        <div class="form-group">
            <label>phone</label>
            <textarea name="phone" rows="4" cols="100"><?php echo $phone?></textarea>
        </div>
        <div class="form-group">
            <label>email</label>
            <textarea name="email" rows="4" cols="100"><?php echo $email?></textarea>
        </div>
        <div class="form-group">
            <label>website</label>
            <textarea name="website" rows="4" cols="100"><?php echo $website?></textarea>
        </div>
        <div class="form-group">
            <label>address</label>
            <textarea name="address" rows="4" cols="100"><?php echo $address?></textarea>
        </div>
        <div class="form-group">
            <label>facebook_link</label>
            <textarea name="facebook_link" rows="4" cols="100"><?php echo $facebook_link?></textarea>
        </div>
        <div class="form-group">
            <label>youtube_link</label>
            <textarea name="youtube_link" rows="4" cols="100"><?php echo $youtube_link?></textarea>
        </div>
        <div class="form-group">
            <label>twitter_link</label>
            <textarea name="twitter_link" rows="4" cols="100"><?php echo $twitter_link?></textarea>
        </div>
        <div class="form-group">
            <label>github_link</label>
            <textarea name="github_link" rows="4" cols="100"><?php echo $github_link?></textarea>
        </div>
        <div class="form-group">
            <label>introduce</label>
            <textarea name="introduce" rows="4" cols="100"><?php echo $introduce?></textarea>
        </div>
        <div class="form-group">
            <label>job</label>
            <textarea name="job" rows="4" cols="100"><?php echo $job?></textarea>
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