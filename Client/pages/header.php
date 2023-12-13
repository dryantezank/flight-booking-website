<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="navbar-brand" href="#">
            <img src="" alt="" width="100px">
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
                    <a href="#" class="nav-link">Trang chủ</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Đặt vé</a>
                </li>
            </ul>
        </div>
    </nav>
</header>