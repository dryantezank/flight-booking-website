<div class="container">
    <h2 class="my-4">Danh sách người dùng</h2>
    <?php
    // Trạng thái
    if (isset($_GET['success'])) {
        if ($_GET['success'] === 'delete') {
            echo '<div class="alert alert-success">Thông tin người dùng đã được xoá thành công.</div>';
        }

        if ($_GET['success'] === 'update') {
            echo '<div class="alert alert-success">Thông tin người dùng đã được cập nhật thành công.</div>';
        }

        if ($_GET['success'] === 'add') {
            echo '<div class="alert alert-success">Thông tin người dùng đã được thêm thành công.</div>';
        }
    }

    if (isset($_GET['error'])) {
        if ($_GET['error'] === 'delete') {
            echo '<div class="alert alert-danger">Thao tác xoá thông tin người dùng đã bị lỗi</div>';
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
        </table>
    </div>
</div>