<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>Trang Quản Trị PNTN Airways</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./admin.php"><img src="../assets/images/Logo.png" alt="Logo" width="100px"></a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">

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
                            <a class="nav-link" href="?page=flights">Chuyến bay</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=locate">Địa điểm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=customer">Khách Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=user">Người dùng</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <?php
                if (isset($_GET['page']) && $_GET['page'] == 'user') {
                    include './user_adm.php';
                }

                if (isset($_GET['page']) && $_GET['page'] == 'locate') {
                    include './locate_adm.php';
                }

                if (isset($_GET['page']) && $_GET['page'] == 'flights') {
                    include './flights_adm.php';
                }

                if (isset($_GET['page']) && $_GET['page'] == 'customer') {
                    include './customer_adm.php';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- link js bootstrap -->
    <script src="../assets/js/bootstrap.js"></script> 
    
</body>

</html>