<?php
    include '../pages/setting.php';

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $flight = $_GET['id'];

        $sql = "DELETE FROM tb_chuyenbay WHERE ID = $flight";

        if ($conn->query($sql) === TRUE) {
            header("Location: admin.php?page=flights&success=delete");
            exit();
        } else {
            header("Location: admin.php?page=flights&error=delete");
            exit();
        }
    }
    $conn->close();
?>