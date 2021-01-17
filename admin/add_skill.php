<?php
    session_start();
    
    if(isset($_SESSION['username'])){
        require "config.php";
        include("sidebar_header.php");
        $result = mysqli_query($conn,"SELECT * FROM skill");
        if(mysqli_num_rows($result) > 0){
            $blog = mysqli_fetch_all($result);
        }
        if(isset($_POST["submit"])){
                $name = $_POST["name"];
                $level = $_POST["level"];
                $sql = "INSERT INTO skill(name, level, personal_id) VALUES ('$name','$level',1)";
                $insert = mysqli_query($conn, $sql);
                if($insert){
                    header("location: skill.php");
                }
        }
?>
<div class="container">
    <h1>Add Skill</h1>
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
            <input type="text" class="form-control" name="name" >
        </div>
        <div class="form-group">
            <label>Level</label>
            <input type="text" class="form-control" name="level" >
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