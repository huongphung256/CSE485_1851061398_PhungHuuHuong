<?php
    session_start();
    
    if(isset($_SESSION['username'])){
        require "config.php";
        include("sidebar_header.php");
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM skill WHERE skill_id = '$id'");
        if(mysqli_num_rows($result) === 1 ){
            $serv = mysqli_fetch_array($result);
            $name = $serv['name'];
            $level = $serv['level'];
        }
        if(isset($_POST["update"])){
                $name = $_POST["name"];
                $level = $_POST["level"];
                $sql = "UPDATE skill SET name = '$name', level = '$level' WHERE skill_id = '$id'";
                $update = mysqli_query($conn, $sql);
                if($update){
                    header("location: skill.php");
                }
        }
?>
<div class="container">
    <h1>Edit Skill</h1>
    <?php
        if(!empty($statusMsg)){
    ?>
        <p class="status <?php echo $status; ?>" style="color: red;"><?php echo $statusMsg?></p>
    <?php
        }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name?>">
        </div>
        <div class="form-group">
            <label>Level</label>
            <input type="text" class="form-control" name="level" value="<?php echo $level?>">
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