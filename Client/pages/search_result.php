<!DOCTYPE html>
<html>
<head>
    
    <title>Kết quả tìm kiếm chuyến bay</title>
    <?php
        include './link_libary.php';
    ?>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Kết quả tìm kiếm chuyến bay</h1>

        <?php
            $from = $_POST['from'];
            $to = $_POST['to'];
            $departureDate = $_POST['departureDate'];
            $seat = $_POST['seat'];

            include './setting.php';
        //    $sql = "SELECT "

            $result = $conn -> query($sql);
            if ($result->num_rows > 0)
            {
                echo "<table class='table table-striped mt-4'>
                    <thead>
                        <tr>
                            <th scope = 'col'>Mã nơi đi</th>
                            <th scope = 'col'>Mã nơi đi</th>
                            <th scope = 'col'>Ngày đi</th>
                            <th scope = 'col'>Ghế trống</th>
                        </tr>
                    </thead>
                <tbody>";
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>" . $row['DiemKhoiHanh'] . "</td>";
                    echo "<td>" . $row['DiemDen'] . "</td>";
                    echo "<td>" . $row['ThoiGianKH'] . "</td>";
                    echo "<td>" . $row["ChoNgoi"] . "</td>";
                    echo "<td><a href='#' class='btn btn-primary>Đặt vé </a></td>";
                    echo "</tr>";
                }
                echo "</tbody>
                </table>";
            }
            else {
                echo "<p class='mt-4'>Không tìm thấy chuyến bay phù hợp</p>";
            }
            $conn->close();
        ?>
        <a href="./home.php#booking" class="btn btn-primary mt-3">Quay lại trang tìm kiếm</a>
    </div>
   <?php
    include './script_libary.php';
   ?>
</body>
</html>
