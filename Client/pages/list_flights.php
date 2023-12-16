
<?php 
    include './setting.php';
    //truy vấn dữ liệu
    $sql = "SELECT
        cb.SoHieu AS SoHieuChuyenBay,
        dd1.TenDiaDiem AS DiemKhoiHanh,
        dd2.TenDiaDiem AS DiemDen,
        dd2.TenHinhAnh AS TenAnhDiemDen,
        cb.ThoiGianKH AS ThoiGianKhoiHanh,
        cb.ThoiGianDen AS ThoiGianDen,
        cb.ChoNgoi AS SoGheTrong,
        cb.GiaVe AS GiaVe
        FROM
        tb_ChuyenBay cb
        INSERT JOIN tb_DiaDiem dd1 ON cb.DiemKhoiHanh = dd1.ID
        INSERT JOIN tb_DiaDiem dd2 ON cb.DiemDen = dd2.ID
        LIMIT 6;
    ";

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