<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="navbar-brand" href="#">
            <img src="../assets/images/logo/logo.png" alt="" width="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php
                    if(isset($_SESSION["role"]))
                    {
                        $role = $_SESSION["role"];
                        if($role == 'ADMIN')
                        {
                            echo' "<li class="nav-item">
                            <a href="" class="nav-link">Dashboard</a>;
                            </li>';
                        }
                    }
                ?>
                <li class="nav-item active">
                    <a href="#" class="nav-link">Trang Chủ</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Đặt Vé</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Lịch Trình</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Liên Hệ</a>
                </li>

                <?php
                if(isset($_SESSION["lg-username"]))
                {
                    $login_username = $_SESSION["lg-username"];

                    echo '<li class="nav-item dropdown">';
                    echo '<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                    echo '<span id="username">Xin chào, '.$login_username.'</span> </a>';
                    echo '<a class="dropdown-item" href="">Đăng Xuất</a> </div> </li>';
                }
                else
                {
                    echo '<div class="user-actions">';
                    echo '<a href="" class="btn btn-primary">Đăng Nhập</a>';
                    echo '<a href="" class="btn btn-secondary">Đăng Ký</a>';
                    echo'</div>';
                }
                ?>
            </ul>
        </div>
    </nav>
</header>