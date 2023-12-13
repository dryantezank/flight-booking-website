<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>...</title>
</head>
<body>
    <?php
        include './header.php'; 

        if(isset($_POST['login-username'])&& isset($_POST['login-password']))
        {
            $username = $_POST['login-username'];
        }
    ?>

<!--banner-->

<section class="carousel slide" data-ride="carousel" id="banner">
    <ol>
        <li data-target="#banner" data-slide-to ="0" class="active"></li>
        <li data-target="#banner" data-slide-to="1"></li>
        <li data-target="#banner" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item-active">
            <img src="" alt="" class="d-block w-100">
        </div>

        <div class="carousel-item">
            <img src="" alt="" class="d-block w-100">
        </div>

        <div class="carousel-item">
            <img src="" alt="" class="d-block w-100">
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
<section class="jumbotron text-center">
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
?>
</body>
</html>