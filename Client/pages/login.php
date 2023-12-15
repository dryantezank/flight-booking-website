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
</body>
</html>