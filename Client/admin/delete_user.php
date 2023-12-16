<?php
include '../pages/setting.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $userId = $_GET['id'];

    $sql = "DELETE FROM tb_user WHERE ID = $userId";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php?page=user&success=delete");
        exit();
    } else {
        header("Location: admin.php?page=user&error=delete");
        exit();
    }
}
mysqli_close($conn);
?>
