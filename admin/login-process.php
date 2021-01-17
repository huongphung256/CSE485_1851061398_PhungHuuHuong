<?php
    session_start();
    include "config.php";
    echo $_POST['username'];
    if(isset($_POST['username']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $user = validate($_POST['username']);
        $pass = validate($_POST['password']);

        if(empty($user)){
            header("location: index.php?error=Username is requied");
            exit();
        }else if(empty($pass)){
            header("location: index.php?error=Password is requied");
            exit();
        }else{
            $sql = "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['username'] == $user && $row['password'] == $pass){
                    $_SESSION['username'] = $row['username'];
                    echo 'loi 1';
                    header('location: index.php');
                }else{
                    echo 'loi 2';
                    header("location: index.php?error=Incorrect username or password");
                    exit();
                }
            }else{
                echo 'loi 3';
                //header("location: index.php?error=Incorrect username or password");
                exit();
            }
        }
    }else{
        echo 'loi 4';
        header('location: index.php');
        exit();
    }
?>