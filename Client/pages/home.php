<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>...</title>

    <?php
        include'./link_libary.php';
    ?>

    <style>
        .text-center
        {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        include './setting.php';
        include './header.php'; 

        //kiểm tra các biến session có được thiết lập hay chưa
        if(isset($_POST['login-username']) && isset($_POST['login-password']))
        {
            $username = $_POST['login-username'];
        }
    ?>

<!--banner-->

<section class="carousel slide" data-ride="carousel" id="banner">
    <ol class="carousel-indicators">
        <li data-target="#banner" data-slide-to ="0" class="active"></li>
        <li data-target="#banner" data-slide-to="1"></li>
        <li data-target="#banner" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item-active">
            <img src="../assets/images/banner/banner1.png" alt="Banner 1" class="d-block w-100">
        </div>

        <div class="carousel-item">
            <img src="../assets/images/banner/banner2.png" alt="" class="d-block w-100" alt="Banner 2">
        </div>

        <div class="carousel-item">
            <img src="../assets/images/banner/banner3.png" alt="" class="d-block w-100" alt="Banner 3">
        </div>
    </div>
    <a href="#banner" role="button" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a href="#banner" role="button" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
    
<!--Quang cao & noi dung-->
<section class="jumbotron text-center" id="welcome">
    <div class="container">
        <h1 class="display-4">Chào mừng bạn đến với bình nguyên vô tận</h1>
        <p class="lead">
            Hãy đến với chúng tôi bạn sẽ được bay xa
        </p>
        <a href="#" class="btn btn-primary">Đặt vé</a>
    </div>
</section>

<?php 
    include './footer.php';
    include './search_flights.php';
    include './intro.php';
    include './script_libary.php';
    include './list_flights.php';
?>
</body>
</html>