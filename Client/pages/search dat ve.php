 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dat ve may bay</title>
</heal>
<body>
    <h1>Dat ve may bay</title>

    <form action="process_booking.php" method="POST">
        <lable for="from">tu:</lable>
        <input type="text" name="from" required>

        <label for="to">Den:</lable>
        <<input type="text"name="to"required>

        <label for="arrival">Ngay den:</lable>
        <<input type="date"name="arrival_date"required>

        <label for="name">Ho va Ten:</lable>
        <<input type="text"name="name"required>

        <label for="Seat_number">So ghe:</lable>
        <<input type="text"name="seat_number"required>
        
        <button type="submit">Dat ve</button>
    </form>

 </body>
 </html>   
 
<?php
 $servername ="your_name";
 $username ="your_username";
 $psssword ="your_password";
 $dbname ="your_database";

 $conn = new mysqli($servername, $username, $password, $dbname);

 //kiem tra ket noi
 if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);

 }
 //xu ly thong tin dat ve
 if($_SERVER["REQUEST_METHOR"]=="POST"){
    $name = $_POST["name"];
    $flight_id = $_POST["flight_id"];
    $seat_number = $_POST["seat_number"];
    //Thuc hien truy van dat ve
    $sql = "INSERT INTO bookings (name, flight_id, seat_number)VALUES('$name', '$flight_id', $seat_number')";
    if ($conn ->query($sql) == TRUE){
        echo "Dat ve thanh cong!";
    }else{
        echo "Error:".$sql. "<br>". $conn->error;
    }
 }
 //Thuc hien lay thong tin nguoi dung
 $sql ="SELECT * FROM users JOIN bookings ON users.user_id = booking.user_id";
 $result = $conn->query($sql);

 if($result->num_rows > 0){
    echo "<h2>Thong .tin nguoi dung va chuyen bay:</h2>";
    echo "<table><tr><th>user id</th><th>Name</th><th>Form</th><th>To</th><th>Departure date</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["user_id"]."</td><td>".$row["name"]."</td><td>".$row["from_location"]."</td><td>".$row["to_location"]."</td><td>".$row["departure_date"]."</td></tr>";
    }
    echo "</table>";

 }else{
    echo "Khong co thong tin nao.";
 }
 
 //Lay danh sach chuyen bay co san
 $sql = "SELECT *FROM flights";
 $result = $conn->query($sql);

 if ($result->num_rows> 0){
    //Hien thi danh sach chuyen bay
    echo"<table><tr><th><flight id</th><th>Departure Data</th><th>Arrival Date</th></tr>";
    while($row = $result->frtch_assoc()){
        echo "<tr><td>".$row["flight_id"]."<td><td>".$row["departure_date"]."</td><td>".$row["arrival_date"]."<td></tr>";
      
    }
    echo "<table>";
    //Mau dat ve
    echo"<form method='POST' action='process_booking.php'>
        <label for='flight_id'>flight id:</lable>
        <input type='text' name='flight_id' required>
        <label for='name'>Name:</label>
        <input type='text' name='seat_number' required>
        <label for='departure_date'>Departure Date:</label>
        <input type'date' name='departure_date' required>
        <label for='arrival_date'>Arrival Date:</label>   
        <input type='date' name='arrival_date' required>
        <button type='submit'>Dat ve</button>
        </form>"
}else{
    echo "khong co chuyen bay nao";
}           
 //Dong ket noi
 $conn->close();
 
 ?>
