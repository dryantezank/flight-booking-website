<div class="container">
    <h2 class="my-4">Quản lý Địa điểm</h2>
    <a href="add_dia_diem.php" class="btn btn-primary mb-4">Thêm Địa điểm</a>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mã Địa điểm</th>
                    <th>Tên Địa điểm</th>
                    <th>Hình ảnh</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM tb_DiaDiem";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['ID'] . "</td>";
                        echo "<td>" . $row['MaDiaDiem'] . "</td>";
                        echo "<td>" . $row['TenDiaDiem'] . "</td>";
                        echo "<td><img src='../assets/images/locate/" . $row['TenHinhAnh'] . "' width='200px' alt='Hình ảnh'></td>";
                        echo "<td>
                        <a href='edit_dia_diem.php?id=" . $row['ID'] . "' class='btn btn-primary'>Sửa</a>
                        <a href='delete_dia_diem.php?id=" . $row['ID'] . "' class='btn btn-danger'>Xóa</a>
                      </td>";
                        echo "</tr>";
                    }
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>