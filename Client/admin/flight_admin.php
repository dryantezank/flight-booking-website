<div class="container">
    <h2 class="my-4">Quản lý Chuyến bay</h2>
    <?php
    // Lấy trạng thái hành động thêm, xóa, sửa người dùng
    if (isset($_GET['success'])) {
        if ($_GET['success'] === 'delete') {
            echo '<div class="alert alert-success">Thao tác xóa thông tin chuyến bay thành công.</div>';
        }

        if ($_GET['success'] === 'update') {
            echo '<div class="alert alert-success">Thao tác cập nhật thông tin chuyến bay thành công.</div>';
        }

        if ($_GET['success'] === 'add') {
            echo '<div class="alert alert-success">Thao tác thêm chuyến bay thành công.</div>';
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
    <a href="add_flight.php" class="btn btn-primary mb-4">Thêm Chuyến bay</a>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Số Hiệu</th>
                    <th>Điểm Khởi Hành</th>
                    <th>Điểm Đến</th>
                    <th>Thời Gian Khởi Hành</th>
                    <th>Thời Gian Đến</th>
                    <th>Chỗ Ngồi</th>
                    <th>Giá Vé</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../pages/setting.php';

                $sql = "SELECT * FROM tb_ChuyenBay";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['ID'] . "</td>";
                        echo "<td>" . $row['SoHieu'] . "</td>";
                        echo "<td>" . getDiaDiemName($row['DiemKhoiHanh']) . "</td>";
                        echo "<td>" . getDiaDiemName($row['DiemDen']) . "</td>";
                        echo "<td>" . $row['ThoiGianKH'] . "</td>";
                        echo "<td>" . $row['ThoiGianDen'] . "</td>";
                        echo "<td>" . $row['ChoNgoi'] . "</td>";
                        echo "<td>" . number_format($row['GiaVe'], 2) . "</td>";
                        echo "<td>
                    <a href='edit_flight.php?id=" . $row['ID'] . "' class='btn btn-primary'>Sửa</a>
                    <a href='delete_flight.php?id=" . $row['ID'] . "' class='btn btn-danger'>Xóa</a>
                  </td>";
                        echo "</tr>";
                    }
                }

                // Đóng kết nối
                $conn->close();

                //Hàm lấy tên Địa điểm dựa vào ID
                function getDiaDiemName($id)
                {
                    global $conn;
                    $sql = "SELECT TenDiaDiem FROM tb_DiaDiem WHERE ID = $id";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    return $row['TenDiaDiem'];
                }
                ?>
            </tbody>
        </table>
    </div>
</div>