<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Chuyến bay</title>
    <?php
    include '../pages/link_libary.php';
    ?>
</head>

<body>
    <div class="container">
        <h2 class="my-4">Thêm Chuyến bay</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $soHieu = $_POST['soHieu'];
            $diemKhoiHanh = $_POST['diemKhoiHanh'];
            $madiemkh = $_POST['diemKhoiHanh'];
            $diemDen = $_POST['diemDen'];
            $thoiGianKH = $_POST['thoiGianKH'];
            $thoiGianDen = $_POST['thoiGianDen'];
            $choNgoi = $_POST['choNgoi'];
            $giaVe = $_POST['giaVe'];

            include '../pages/setting.php';

            $sql = "INSERT INTO tb_ChuyenBay (ID, SoHieu, DiemKhoiHanh, DiemDen, ThoiGianKH, ThoiGianDen, ChoNgoi, GiaVe)
                      VALUES (NULL, '$soHieu', $diemKhoiHanh, $diemDen, '$thoiGianKH', '$thoiGianDen', $choNgoi, $giaVe)";

            if ($conn->query($sql) === TRUE) {
                header("Location: admin.php?page=flights&success=add");
                exit();
            } else {
                header("Location: admin.php?page=flights&error=add");
                exit();
            }

            $conn->close();
        }
        ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="soHieu">Số Hiệu:</label>
                <input type="text" class="form-control" id="soHieu" name="soHieu" required>
            </div>
            <div class="form-group">
                <label for="diemKhoiHanh">Điểm Khởi Hành:</label>
                <select class="form-control" id="diemKhoiHanh" name="diemKhoiHanh" required>
                    <option value="NONE">Chọn Điểm Khởi Hành</option>
                    <?php
                    include '../pages/setting.php';

                    $sql = "SELECT * FROM tb_diadiem";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['ID'] . '">' . $row['TenDiaDiem'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="diemDen">Điểm Đến:</label>
                <select class="form-control" id="diemDen" name="diemDen" required>
                    <option value="NONE">Chọn Điểm Đến</option>
                    <?php
                    $sql = "SELECT * FROM tb_diadiem";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['ID'] . '">' . $row['TenDiaDiem'] . '</option>';
                        }
                    }
                    $conn->close();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="thoiGianKH">Thời Gian Khởi Hành:</label>
                <input type="datetime-local" class="form-control" id="thoiGianKH" name="thoiGianKH" required>
            </div>
            <div class="form-group">
                <label for="thoiGianDen">Thời Gian Đến:</label>
                <input type="datetime-local" class="form-control" id="thoiGianDen" name="thoiGianDen" required>
            </div>
            <div class="form-group">
                <label for="choNgoi">Chỗ Ngồi:</label>
                <input type="number" class="form-control" id="choNgoi" name="choNgoi" required>
            </div>
            <div class="form-group">
                <label for="giaVe">Giá Vé:</label>
                <input type="number" step="0.01" class="form-control" id="giaVe" name="giaVe" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>

    <?php
    include '../pages/script_libary.php';
    ?>
</body>

</html>