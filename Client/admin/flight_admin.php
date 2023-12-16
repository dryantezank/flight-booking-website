<div class="container">
    <h2 class="my-4">Quản lý Chuyến bay</h2>
    <?php
    // Lấy trạng thái hành động thêm, xóa, sửa người dùng
    if (isset($_GET['success'])) {
        if ($_GET['success'] === 'delete') {
            echo '<div class="alert alert-success">Xóa thông tin chuyến bay thành công.</div>';
        }

        if ($_GET['success'] === 'update') {
            echo '<div class="alert alert-success">Cập nhật thông tin chuyến bay thành công.</div>';
        }

        if ($_GET['success'] === 'add') {
            echo '<div class="alert alert-success">Thêm chuyến bay thành công.</div>';
        }
    }

    if (isset($_GET['error'])) {
        if ($_GET['error'] === 'delete') {
            echo '<div class="alert alert-danger">Đã xảy ra lỗi khi xóa chuyến bay</div>';
        }
        if ($_GET['error'] === 'update') {
            echo '<div class="alert alert-danger">Đã xảy ra lỗi khi sửa chuyến bay</div>';
        }
        if ($_GET['error'] === 'add') {
            echo '<div class="alert alert-danger">Thêm chuyến bay thất bại.</div>';
        }
    }
    ?>
</div>