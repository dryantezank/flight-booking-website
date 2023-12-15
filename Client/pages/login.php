<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký / Đăng nhập</title>
    <?php
        include './link_libary.php';
    ?>

    <style>
        body{
            background-color: #f8f9fa;
        }

        .container
        {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <?php
    // kiểm tra phương thức truy xuất đến trang hiện tại có phải là post hay ko
        if($_SERVER["REQUEST_METHOD" == "POST"])
        {
            $login_name = $_POST["login-username"];
            $login_pass = $_POST["login-password"];

            include './setting.php';

            $sql = "SELECT * FROM tb_user WHERE TenDangNhap = '$login_name' LIMIT 1";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0)
            { //nếu tìm thấy user thì kiểm tra password
                $row = $result->fetch_assoc();

                //hàm so sánh mật khẩu nhập vào với mật khẩu được mã hóa trong CSDL, tự động giải mã và so sánh
                if (password_verify($login_pass, $row['MatKhau']))
                {
                    // tạo và gán giá trị cho các biến session
                    $_SESSION["lg-username"] = $row['tenDangNhap'];
                    $_SESSION["role"] = $row['Role'];

                    //nếu đăng nhập thành công thì chuyển về trang home
                    header("Location: ./home.php");
                    exit();
                }
                else{ //thông báo lỗi đăng nhập
                    echo'<div class="alert alert-danger"> Tên đăng nhập hoặc mật khẩu không đúng.</div>';
                }
            }else{
                echo '<div class = "alert alert-danger">Tên đăng nhập hoặc mật khẩu không đúng.</div>';
            }
        }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a href="#login" class="nav-link active" id="login-tab" data-toggle="tab" role="tab"
                                aria-controls="login" aria-selected="true">
                                Đăng nhập
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#register" class="nav-link" id="login-tab" data-toggle="tab" role="tab"
                                aria-controls="register" aria-selected="false">
                                    Đăng ký
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-contend">
                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <h5 class="card-title">Đăng nhập</h5>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="login-username">Tài khoản</label>
                                        <input type="text" class="form-control" id="login-username" name="login-username">
                                    </div>

                                    <div class="form-group">
                                        <label for="login-password">Mật khẩu</label>
                                        <input type="password" class="form-control" id="login-password" name="login-password">
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        Đăng nhập
                                    </button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <h5 class="card-title">Đăng ký</h5>
                                <form>
                                    <div class="form-group">
                                        <label for="register-username">Tên tài khoản</label>
                                        <input type="text" class="form-control" id="register-username">
                                    </div>

                                    <div class="form-group">
                                        <label for="register-password">Mật khẩu</label>
                                        <input type="password" class="form-control" id="register-password">
                                    </div>

                                    <div class="form-group">
                                        <label for="regiter-email">Địa chỉ Email</label>
                                        <input type="email" class="form-control" id="register-email">
                                    </div>

                                    <div class="form-group">
                                        <label for="register-fullname">Họ tên</label>
                                        <input type="text" class="form-control" id="register-fullname">
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        Đăng ký
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include './script_libary.php';
    ?>
</body>
</html>