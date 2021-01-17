<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="Bootstrap/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  </head>
  <body>
    <section id="admin">
        <div class="wrapper">
            <input type="checkbox" id="check">
            <div class="header">
                <div class="header-menu">
                    <div class="title-admin">Ad<span>min</span></div>
                    <!--<div class="sidebar-btn" id="sidebar-check" for="check">
                        <i class="fas fa-bars"></i>
                    </div>-->
                    <label for="check" class="sidebar-btn">
                        <i class="fas fa-bars" id="sidebar-btn"></i>
                    </label>
                    <ul>
                        <li><a href="logout.php"><i class="fas fa-power-off"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="../image/7.jpg" alt="">
                        <p>Admin</p>
                    </center>
                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-concierge-bell"></i><span>Services<i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="../services/index.php"><i class="fas fa-list"></i><span>List</span></a>
                            <a href="../services/add_services.php"><i class="fas fa-folder-plus"></i><span>Add</span></a>
                        </div>
                    </li>
                    <li class="item" id="message">
                        <a href="#message" class="menu-btn">
                            <i class="fas fa-concierge-bell"></i><span>Services<i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-folder-plus"></i><span>Add</span></a>
                            <a href="#"><i class="fas fa-edit"></i><span>Edit</span></a>
                            <a href="#"><i class="fas fa-folder-minus"></i><span>Delete</span></a>
                        </div>
                    </li>
                
                </div>
            </div>
            <div class="main-container">
            
            
        
            
        

