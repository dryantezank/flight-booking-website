<div class="container">
        <h2 class="my-4">Customer Feedback</h1>

		<?php
    // Lấy trạng thái hành động thêm, xóa, sửa người dùng
    if (isset($_GET['success'])) {
        if ($_GET['success'] === 'delete') {
            echo '<div class="alert alert-success">Xóa phản hồi người dùng thành công.</div>';
        }

        if ($_GET['success'] === 'update') {
            echo '<div class="alert alert-success">Cập nhật phản hồi người dùng thành công.</div>';
        }

        if ($_GET['success'] === 'add') {
            echo '<div class="alert alert-success">Thêm phản hồi người dùng thành công.</div>';
        }
    }

    if (isset($_GET['error'])) {
        if ($_GET['error'] === 'delete') {
            echo '<div class="alert alert-danger">Đã xảy ra lỗi khi xóa phản hồi</div>';
        }
        if ($_GET['error'] === 'update') {
            echo '<div class="alert alert-danger">Đã xảy ra lỗi khi sửa phản hồi</div>';
        }
        if ($_GET['error'] === 'add') {
            echo '<div class="alert alert-danger">Thêm phản hồi thất bại.</div>';
        }
    }
    ?>
        <!-- Display feedback -->
        <?php include 'display_feedback.php'; ?>

        <!-- Feedback form -->
        <form action="submit_feedback.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Feedback:</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
    </div>