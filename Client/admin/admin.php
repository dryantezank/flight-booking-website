<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include '../pages/link_libary.php';
        include '../pages/setting.php';
    ?>
    <title>Trang Quản Trị AGU Airways</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./admin.php"><img src="../assets/images/logo/logo.png" alt="Logo" width="80px"></a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php

                            if(isset($_SESSION['lg-username'])){
                                echo '<span id="username">' . $_SESSION['lg-username'] .'</span>';
                            }
                        ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../pages/home.php">Thoát</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="?pages=flights">Chuyến bay</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pages=locate">Địa điểm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pages=customer">Khách Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pages=user">Người dùng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?pages=comment">Đánh giá phản hồi</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <?php
                    if(isset($_GET['pages']) && $_GET['pages'] == 'user'){
                        include '../admin/user_admin.php';
                    }

                    if(isset($_GET['pages']) && $_GET['pages'] == 'locate'){
                    include '../admin/locate_admin.php';
                    }

                    if(isset($_GET['pages']) && $_GET['pages'] == 'flights'){
                    include '../admin/flight_admin.php';
                    }

                    if(isset($_GET['pages']) && $_GET['pages'] == 'customer'){
                    include '../admin/customer_admin.php';
                    }

                    if(isset($_GET['pages']) && $_GET['pages'] == 'comment'){
                        include '../admin/feedback.php';
                        }
                ?>
            </div>
        </div>
    </div>
    <?php
        include '../pages/script_libary.php';
    ?>
</body>
</html>