<?php
    session_start();
    if(isset($_SESSION['username'])){
        require "config.php";
        include("sidebar_header.php");
        $result = mysqli_query($conn,"SELECT * FROM blog");
        if(mysqli_num_rows($result) > 0){
            $blog = mysqli_fetch_all($result);
        }
    
    
?>
<h1>List Services</h1>
<table class="table" position="relative">
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Time</th>
            <th>Heart</th>
            <th>Eye</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($blog as $b){?>
        <tr>
            <td><img src="../<?php echo $b[1]?>" style="width: 100px; height: 100px-->"></td>
            <td><?php echo $b[2]?></td>
            <td><?php echo $b[3]?></td>
            <td><?php echo $b[4]?></td>
            <td><?php echo $b[5]?></td>
            <td><?php echo $b[6]?></td>
            <th><a href="edit_blog.php?id=<?php echo $b[0];?>"><i class="far fa-edit"></i></a></th>
            <th><a href="delete_blog.php?id=<?php echo $b[0];?>"><i class="far fa-trash-alt"></i></a></th>
        </tr>
        <?php } ?>
    </tbody>
</table>
<form method="POST" action="add_blog.php">
    <button type="submit" class="btn btn-primary" style="float: right; margin-right: 30px">Add</button>
</form>
<?php
        include "sidebar_footer.php";
    }else{
        header("location: ../index.php");
        exit();
    }
?>