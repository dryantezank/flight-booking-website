<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý dữ liệu phản hồi ở đây, ví dụ: lưu vào cơ sở dữ liệu
    $name = $_POST["name"];
    $feedback = $_POST["feedback"];

    // Thực hiện các thao tác xử lý dữ liệu, ví dụ: lưu vào cơ sở dữ liệu

    // Chuyển hướng người dùng trở lại trang chính sau khi gửi phản hồi
    header("Location: feedback.php");
    exit();
}
?>