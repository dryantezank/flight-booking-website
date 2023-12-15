<div class="container">
    <h2 class="my-4">Quản Lý Khách Hàng</h2>
    <a href="add_dia_diem.php" class="btn btn-primary mb-4">Thêm Khách Hàng</a>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ Tên Khách Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../pages/setting.php';
                    $query = "SELECT * FROM tb_KhachHang";
                    $result = $conn->query($query);

                    if($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>" . $row['ID'] . "</td>";
                            echo "<td>" . $row['Ho'] . "</td>";
                            echo "<td>" . $row['Ten'] . "</td>";
                            echo "<td>" . $row['Email'] . "</td>";
                            echo "<td>" . $row['SoDienThoai'] . "</td>";
                            echo "<td>
                                    <a href='edit_customer.php?id=" . $row['ID'] . "' class='btn btn-primary'>Sửa</a>
                                    <a href='delete_customer.php?id=" . $row['ID'] . "' class='btn btn-primary'>Xoá</a>
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