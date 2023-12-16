<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Airways - Đặt Mua Vé Máy Bay</title>
    <?php
        include './link_libary.php';
    ?>

    <style>
        .text-center{
            color: red;
        }
    </style>
</head>

<body>
    <?php
    include './setting.php';
    include './header.php';

    //kiểm tra các biến session có được thiết lập hay chưa
    if(isset($_POST['login-username']) && isset($_POST['login-password'])){
        $username = $_POST['login-username'];
        //echo "<script>console.log('$username')</script>";
    }
    ?>
    <!-- banner -->
    <section id="banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner" data-slide-to="0" class="active"></li>
            <li data-target="#banner" data-slide-to="1"></li>
            <li data-target="#banner" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/banner/banner1.png" class="d-block w-100" alt="Banner 1" />
            </div>

            <div class="carousel-item">
                <img src="./assets/images/banner/banner2.png" class="d-block w-100" alt="Banner 2" />
            </div>

            <div class="carousel-item">
                <img src="./assets/images/banner/banner3.png" class="d-block w-100" alt="Banner 3" />
            </div>
        </div>
        
        <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
    <!-- quảng cáo và nội dung -->
    <section id="welcome" class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4">Chào mừng đến với Airways chuyến đi cùng tôi</h1>
            <p class="lead">
                Hãy khám phá những chuyến bay tuyệt vời cùng chúng tôi
            </p>
            <a href="#" class="btn btn-primary">Đặt Vé Ngay</a>
        </div>
    </section>
    <?php
        include 'search_flights.php';
        include './list_flights.php';
        include './intro.php';
        include './footer.php';
        include './link_libary.php';
    ?>
</body>

</html>