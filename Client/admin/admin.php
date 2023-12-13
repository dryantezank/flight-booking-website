<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../page/link.libary.php';
    include '../page/setting.php';
    ?>
    <title>Trang Quản Trị Minh Nhat Airways</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./admin.php"><img src="../page/images/logo/logo.png" alt="Logo" width="80px"></a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php
                        session_start();

                        if (isset($_SESSION['lg-username'])) {
                            echo '<span id="username">' . $_SESSION['lg-username'] . '</span>';
                        }
                        ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../page/home.php">Thoát</a>
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
    <?php
    include '../page/script.libary.php';
    ?>
</body>

</html>