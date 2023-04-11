<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
     <!----===== Iconscout CSS ===== -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/header.css">
    <link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/footer.css">
</head>
<body>

<?php
include('../components/header.php')
?>
<div class="containershow" style="background-color: grey;" >

<div class="ss2" style="padding-top:200px">
    <form action="" method="get">
        <div class="form-group">
            <label for="filter">Bộ lọc giá:</label>
            <select class="form-control" id="filter" name="filter">
            <option value="all">Tất cả</option>
            <option value="low-to-high">Giá từ thấp đến cao</option>
            <option value="high-to-low">Giá từ cao đến thấp</option>
            </select>
        </div>
         <button type="submit" class="btn btn-primary">Lọc</button>
    </form>
</div>


<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'booking_car';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


// Kiểm tra kết nối

if (!$conn) {
  die("Kết nối không thành công: " . mysqli_connect_error());
}

$form_pickUp_locations = $_POST['point_of_departure'];
$form_drop_location= $_POST['destination'];
$time = $_POST['time'];


$sql = "SELECT point_of_departure, destination, trip_date, price_book, price_ship, 
 name_drivers , name_vehicles   FROM trips ,vehicles , drivers
        WHERE point_of_departure = '$form_pickUp_locations' AND destination = '$form_drop_location' AND trip_date > '$time'
        AND trips.id_drivers = drivers.id_drivers AND trips.id_vehicle = vehicles.id_vehicle ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['point_of_departure'] . ' - ' . $row['destination'] . '</h5>';
        echo '<p class="card-text">Time: ' . $row['trip_date'] . '</p>';
        echo '<a href="#" class="btn btn-primary">Đặt xe</a>';
        echo '<a href="#" class="btn btn-primary">Gửi hàng</a>';
        echo '<a href="#" class="btn btn-primary">Xem chi tiết</a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>No trips found.</p>';
}
?>
</div>


<?php
include('../components/footer.php')

?>
</body>
</html>
