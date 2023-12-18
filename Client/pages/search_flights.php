<!--Tìm kiếm chuyến bay--->
<section id="booking" class="bg-light" class="py-5">
    <div class="container">
        <h2 class="text-center">Tìm Kiếm Chuyến Bay</h2>
        
        <form method="post" action="../pages/search_result.php">
            <div class="form-group">
                <label for="from">Nơi đi:</label>
                <select name="from" id="from" class="from-control">
                    <option value="None">Chọn nơi đi</option>

                    <?php
                        include '../pages/setting.php';
                        $sql = "SELECT * FROM tb_DiaDiem";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo '<option value ="' .$row['MaDiaDiem'] . '"> ('. $row['MaDiaDiem'].')' . $row['TenDiaDiem'] . '</option>';
                            }
                        }
                    ?>
                </select>
                <div id="placeFromError" class="alert alert-danger mt-3" role="alert" style="display: none;"></div>
            </div>
            <div class="form-group">
                <label for="to">Nơi đến:</label>
                <select name="to" id="to" class="form-control">
                    <option value="None">Chọn nơi điến</option>

                    <?php
                        include '../pages/setting.php';

                        $sql = "SELECT * FROM tb_DiaDiem";
                        $result = $conn-> query($sql);

                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo '<option value = "' . $row['MaDiaDiem'] . '"> ('. $row['MaDiaDiem'].') ' . $row['TenDiaDiem'] . '</option>';
                            }
                        }
                    ?>
                </select>
                <div class="alert alert-danger mt-3" id="placeToError" role="alert" style="display: none"></div>
            </div>
            <div class="form-group">
                <label for="departureDate">Ngày đi: </label>
                <input type="date" class="form-control" id="departureDate" name="departureDate"/>
                <div class="alert alert-danger mt-3" id="departureDateError" role="alert" style="display: none;"></div>

            </div>
            <div class="form-group">
                <label for="seat">Ghế trống:</label>
                <input type="text" name="seat" id="seat" class="form-control" placeholder="Vui lòng nhập số ghế trống" />
                <div id="seatErrorNotify" class="alert alert-danger mt-3" role="alert" style="display: none;"></div>

            </div>
            <div class="form-group">
                <input type="submit" value="Tìm kiếm chuyến bay" class="btn btn-primary" />
            </div>
        </form>
    </div>
</section>