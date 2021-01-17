<?php
    session_start();
    if(isset($_SESSION['username'])){
        require "config.php";
        include("sidebar_header.php");
        $result = mysqli_query($conn,"SELECT * FROM skill");
        if(mysqli_num_rows($result) > 0){
            $blog = mysqli_fetch_all($result);
        }
    
    
?>
<h1>List Skill</h1>
<table class="table" position="relative">
    <thead>
        <tr>
            <th>Name</th>
            <th>Level</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($blog as $b){?>
        <tr>
            <td><?php echo $b[1]?></td>
            <td><?php echo $b[2]?></td>
            <th><a href="edit_skill.php?id=<?php echo $b[0];?>"><i class="far fa-edit"></i></a></th>
            <th><a href="delete_skill.php?id=<?php echo $b[0];?>"><i class="far fa-trash-alt"></i></a></th>
        </tr>
        <?php } ?>
    </tbody>
</table>
<form method="POST" action="add_skill.php">
    <button type="submit" class="btn btn-primary" style="float: right; margin-right: 30px">Add</button>
</form>
<?php
        include "sidebar_footer.php";
    }else{
        header("location: ../index.php");
        exit();
    }
?>