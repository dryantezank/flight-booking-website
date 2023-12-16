<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa Chuyến bay</title>
    <?php
    include '../pages/link_libary.php';
    ?>
</head>

<body>
    <div class="container">
        <h2 class="my-4">Chỉnh sửa Chuyến bay</h2>
        <?php
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $soHieu = $_POST['soHieu'];
            $diemKhoiHanh = $_POST['diemKhoiHanh'];
            $diemDen = $_POST['diemDen'];
            $thoiGianKH = $_POST['thoiGianKH'];
            $thoiGianDen = $_POST['thoiGianDen'];
            $choNgoi = $_POST['choNgoi'];
            $giaVe = $_POST['giaVe'];

            include '../pages/setting.php';

            $sql = "UPDATE tb_chuyenbay SET SoHieu = '$soHieu', DiemKhoiHanh = $diemKhoiHanh, DiemDen = $diemDen,
                      ThoiGianKH = '$thoiGianKH', ThoiGianDen = '$thoiGianDen', ChoNgoi = $choNgoi, GiaVe = $giaVe WHERE ID = $id";

            if ($conn->query($sql) === TRUE) {
                header("Location: admin.php?page=flights&success=update");
                exit();
            } else {
                header("Location: admin.php?page=flights?error=update");
                exit();
            }

            $conn->close();
        }


        $id = $_GET['id'];

        include '../pages/setting.php';

        $sql = "SELECT * FROM tb_ChuyenBay WHERE ID = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $soHieu = $row['SoHieu'];
        $diemKhoiHanh = $row['DiemKhoiHanh'];
        $diemDen = $row['DiemDen'];
        $thoiGianKH = $row['ThoiGianKH'];
        $thoiGianDen = $row['ThoiGianDen'];
        $choNgoi = $row['ChoNgoi'];
        $giaVe = $row['GiaVe'];

        $conn->close();

        ?>

        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="soHieu">Số Hiệu:</label>
                <input type="text" class="form-control" id="soHieu" name="soHieu" value="<?php echo $soHieu; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="diemKhoiHanh">Điểm Khởi Hành:</label>
                <select class="form-control" id="diemKhoiHanh" name="diemKhoiHanh" required>
                    <?php
                    include '../page/setting.php';

                    $sql = "SELECT * FROM tb_diadiem";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($diemKhoiHanh == $row['ID']) {
                                echo '<option value="' . $row['ID'] . '" selected>' . $row['TenDiaDiem'] . '</option>';
                            } else {
                                echo '<option value="' . $row['ID'] . '" >' . $row['TenDiaDiem'] . '</option>';
                            }
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="diemDen">Điểm Đến:</label>
                <select class="form-control" id="diemDen" name="diemDen" required>
                    <?php

                    $sql = "SELECT * FROM tb_diadiem";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($diemDen == $row['ID']) {
                                echo '<option value="' . $row['ID'] . '" selected>' . $row['TenDiaDiem'] . '</option>';
                            } else {
                                echo '<option value="' . $row['ID'] . '">' . $row['TenDiaDiem'] . '</option>';
                            }
                        }
                    }

                    $conn->close();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="thoiGianKH">Thời Gian Khởi Hành:</label>
                <input type="datetime-local" class="form-control" id="thoiGianKH" name="thoiGianKH"
                    value="<?php echo $thoiGianKH; ?>" required>
            </div>
            <div class="form-group">
                <label for="thoiGianDen">Thời Gian Đến:</label>
                <input type="datetime-local" class="form-control" id="thoiGianDen" name="thoiGianDen"
                    value="<?php echo $thoiGianDen; ?>" required>
            </div>
            <div class="form-group">
                <label for="choNgoi">Chỗ Ngồi:</label>
                <input type="number" class="form-control" id="choNgoi" name="choNgoi" value="<?php echo $choNgoi; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="giaVe">Giá Vé:</label>
                <input type="number" step="0.01" class="form-control" id="giaVe" name="giaVe"
                    value="<?php echo $giaVe; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
    <?php
    include '../pages/script_libary.php';
    ?>
</body>

</html>