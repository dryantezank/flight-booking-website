<?php

include '../pages/setting.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $role = $_POST["role"];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO tb_user (ID, TenDangNhap, MatKhau, TenNguoiDung, Email, Role) VALUES (NULL, '$username', '$hashedPassword', '$fullname', '$email', '$role')";
        if($conn->query($sql) === TRUE){
            header("Location: admin.php?page=user&success=add");
            exit();
        }else{
            //die("lỗi: " . $conn->error);
            header("Location: admin.php?page=user&error=add");
            exit();
        }   
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng</title>
    <?php
    include '../pages/link_libary.php';
    ?>
</head>

<body>
    <div class="container">
        <h2 class="my-4">Thêm người dùng</h2>
        <form method="POST" action=''>
            <div class="form-group">
                <label for="username">Tên Đăng Nhập:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="fullname">Tên Người Dùng:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="role">Vai Trò:</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="NONE">-- Chọn vai trò --</option>
                    <option value="NORMAL" selected>Người dùng thường</option>
                    <option value="ADMIN">Quản trị viên</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="admin.php?page=user" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
    <?php
    include '../pages/script_libary.php';
    ?>
</body>

</html>