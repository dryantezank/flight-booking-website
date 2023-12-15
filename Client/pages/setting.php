<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "qldatve";

    $conn = new mysqli($servername, $username, $password, $databasename);

    if($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }
    // else{
    //     echo "<script>alert('Kết nối thành công')</script>";
    // }
?>