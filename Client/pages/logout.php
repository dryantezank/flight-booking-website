<?php
//xóa thông tin trong session
session_unset();

//hủy session
session_destroy();

//chuyển đến trang home sau khi đăng xuất thành công
header("Location: ./home.php");
exit();
?>