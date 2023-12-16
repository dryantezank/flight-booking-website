<?php

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: admin.php");
    exit;
}

$userID = $_GET['id'];

include '../pages/setting.php';

$query = "SELECT * FROM tb_User WHERE ID = $userID";
$result = $conn->query($query);

if ($result->num_rows === 0) {
    header("Location: admin.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $tenDangNhap = $_POST['TenDangNhap'];
    $tenNguoiDung = $_POST['TenNguoiDung'];
    $email = $_POST['Email'];
    $role = $_POST['Role'];

    $updateQuery = "UPDATE tb_User SET TenDangNhap = '$tenDangNhap', TenNguoiDung = '$tenNguoiDung', Email = '$email', Role = '$role' WHERE ID = $userID";
    if ($conn->query($updateQuery) === TRUE) {
        header("Location: admin.php?page=user&success=update");
        exit;
    } else {
        echo "Error updating user: " . $conn->error;
    }
}

$user = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <?php
    include '../pages/link_libary.php';
    ?>
</head>
<body>
    <div class="container">
        <h2>Edit User</h2>
        <form method="post" action=''>
            <div class="form-group">
                <label for="TenDangNhap">Tên Đăng Nhập:</label>
                <input type="text" class="form-control" id="TenDangNhap" name="TenDangNhap" value="<?php echo $user['TenDangNhap']; ?>" required>
            </div>
            <div class="form-group">
                <label for="TenNguoiDung">Họ Tên:</label>
                <input type="text" class="form-control" id="TenNguoiDung" name="TenNguoiDung" value="<?php echo $user['TenNguoiDung']; ?>" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $user['Email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="Role">Quyền:</label>
                <select class="form-control" id="Role" name="Role" required>
                    <option value="NORMAL" <?php if ($user['Role'] === 'NORMAL') echo 'selected'; ?>>Normal</option>
                    <option value="ADMIN" <?php if ($user['Role'] === 'ADMIN') echo 'selected'; ?>>Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a href="admin.php?page=user" class="btn btn-secondary">Trở Về</a>
        </form>
    </div>
    <?php
    include '../pages/script_libary.php';
    ?>
</body>
</html>