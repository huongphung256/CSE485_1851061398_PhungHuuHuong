<?php
    session_start();
    
    if(isset($_SESSION['username'])){
        require "config.php";
        include("sidebar_header.php");
        $result = mysqli_query($conn,"SELECT * FROM education");
        if(mysqli_num_rows($result) > 0){
            $blog = mysqli_fetch_all($result);
        }
        if(isset($_POST["submit"])){
                $title = $_POST["title"];
                $name = $_POST["name"];
                $yearstart = $_POST["yearstart"];
                $yearend = $_POST["yearend"];
                $description = $_POST["description"];
                $sql = "INSERT INTO education(title, name, yearstart, yearend, description, personal_id) VALUES ('$title','$name','$yearstart','$yearend', '$description', 1)";
                $insert = mysqli_query($conn, $sql);
                if($insert){
                    header("location: work.php");
                }
        }
?>
<div class="container">
    <h1>Add Education</h1>
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
            <label>Name</label>
            <input type="text" class="form-control" name="name" >
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