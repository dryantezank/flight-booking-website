
<?php 
    include './setting.php';
    //truy vấn dữ liệu

    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        echo '<section id="popular-flights" class="py-5">
            <div class="container">
                <h2 class="text-center">Các chuyến bay sắp tới</h2>
                <div class="row">';

        while ($row = $result->fetch_assoc())
        {
            echo '<div class="col-md-4">
                <div class="card mb-4">
                <img src="./assets/images/locate' . $row["TenAnhDiemDen"] . '" class="card-img-top" alt="' .$row["DiemDen"]. '"/>
                <div class="card-body">
                    <h3 class="card-title">' .$row["DiemKhoiHanh"].'-'.$row["DiemDen"].'</h3>
                    <p class="card-text">Ngày đi: ' .date("d/m/y" , strtotime($row["ThoiGianKhoiHanh"])).'</p>
                    <p class="card-text">Giờ đi: ' .date("H:i" , strtotime($row["ThoiGianKhoiHanh"])).'</p>
                    <p class="card-text"Số ghế trống: '.$row["SoGheTrong"].'</p>
                    <p class="card-text">Giá vé' . $row['GiaVe'] .'VND</p>
                    <a href="#" class="btn btn-primary">Đặt vé</a>
                </div>
            </div>
        </div>';
        }
        echo '</div></div></section>';
    } else{
        echo"Không có dữ liệu chuyến bay";
    }
$conn->close();
?>