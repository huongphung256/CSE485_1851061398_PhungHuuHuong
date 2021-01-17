<?php
    session_start();
    if(isset($_SESSION['username'])){
        require "config.php";
        include("sidebar_header.php");
        $result = mysqli_query($conn,"SELECT * FROM personal");
        if(mysqli_num_rows($result) > 0){
            $blog = mysqli_fetch_all($result);
        }
    
    
?>
<h1>Personal</h1>
<table class="table" position="relative">
    <thead>
        <tr>
            <th>Avatar</th>
            <th>Fullname</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Website</th>
            <th>Address</th>
            <th>Facebook_link</th>
            <th>Youtube_link</th>
            <th>Twitter_link</th>
            <th>Github_link</th>
            <th>Introduce</th>
            <th>Job</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($blog as $b){?>
        <tr>
            
            <td><img src="../<?php echo $b[2]?>" style="width: 100px; height: 100px-->"></td>
            
            <td><?php echo $b[1]?></td><td><?php echo $b[3]?></td>
            <td><?php echo $b[4]?></td>
            <td><?php echo $b[5]?></td>
            <td><?php echo $b[6]?></td>
            <td><?php echo $b[7]?></td>
            <td><?php echo $b[8]?></td>
            <td><?php echo $b[9]?></td>
            <td><?php echo $b[10]?></td>
            <td><?php echo $b[11]?></td>
            <td><?php echo $b[12]?></td>
            <th><a href="edit_personal.php?id=<?php echo $b[0];?>"><i class="far fa-edit"></i></a></th>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php
        include "sidebar_footer.php";
    }else{
        header("location: ../index.php");
        exit();
    }
?>