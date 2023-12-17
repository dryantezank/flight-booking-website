<div class="container">
    <h2 class="my-4">Danh sách người dùng</h2>
    <?php
    // Lấy trạng thái hành động thêm, xóa, sửa người dùng
    if (isset($_GET['success'])) {
        if ($_GET['success'] === 'delete') {
            echo '<div class="alert alert-success">Xóa thông tin người dùng thành công.</div>';
        }

        if ($_GET['success'] === 'update') {
            echo '<div class="alert alert-success">Cập nhật thông tin người dùng thành công.</div>';
        }

        if ($_GET['success'] === 'add') {
            echo '<div class="alert alert-success">Thêm người dùng thành công.</div>';
        }
    }

    if (isset($_GET['error'])) {
        if ($_GET['error'] === 'delete') {
            echo '<div class="alert alert-danger">Đã xảy ra lỗi khi xóa người dùng</div>';
        }
        if ($_GET['error'] === 'update') {
            echo '<div class="alert alert-danger">Đã xảy ra lỗi khi sửa người dùng</div>';
        }
        if ($_GET['error'] === 'add') {
            echo '<div class="alert alert-danger">Thêm người dùng thất bại.</div>';
        }
    }
    ?>

    <a href="add_user.php" class="btn btn-primary mb-4">Thêm người dùng</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Tên Người Dùng</th>
                    <th>Email</th>
                    <th>Quyền Đăng Nhập</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../pages/setting.php';
                $sql = "SELECT * FROM tb_user";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['ID'] . "</td>";
                        echo "<td>" . $row['TenDangNhap'] . "</td>";
                        echo "<td>" . $row['MatKhau'] . "</td>";
                        echo "<td>" . $row['TenNguoiDung'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['Role'] . "</td>";
                        echo "<td>
                        <a href='edit_user.php?id=" . $row['ID'] . "' class='btn btn-primary'>Sửa</a>
                        <a href='delete_user.php?id=" . $row['ID'] . "' class='btn btn-danger'>Xóa</a>
                      </td>";
                        echo "</tr>";
                    }
                }

                // Đóng kết nối
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</div>