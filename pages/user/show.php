<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<script src="https://kit.fontawesome.com/11a9c95312.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="./styles/user.css">
<title>Home Page</title>

</head>
<body>
    <!-- Code header và section 1 -->
    <div class="header-section1">
        <!-- header -->
        <?php 
        include "./pages/components/header.php" ?>
        <!-- section1 -->
        <section id="section1">
            <div class="section1-content">
                <div class="section1-content-left">
                    <h1 style="margin-left: 30px;"> <i>WELLCOME TO SUPER</i></h1>
                    <br>
                    <br>
                    <h3 style="width: 250px;text-align: center;margin: auto;"><i> Now you can go anywhere with our car booking service.</i></h3>
                </div>
                <!-- form section 1 -->
                <div class="section1-content-right">
                    <form class="section1-form">
                        <table>
                            <tr>
                                <td>
                                    <span class="form-title">PICK UP LOCATION</span>
                                </td>
                                <td>
                                    <input list="form-pickUp-locations" name="form-pickUp-location" id="form-pickUp-location">
                                    <datalist id="form-pickUp-locations">
                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                        <option value="Huế">Huế</option>
                                        <option value="Nha Trang">Nha Trang</option>
                                        <option value="Hải Dương">Hải Dương</option>
                                        <option value="Quảng Bình">Quảng Bình</option>
                                    </datalist>
                                    <span class="form-icon"><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="form-title">DROP LOCATION</span>
                                </td>
                                <td>
                                    <input list="form-drop-locations" name="form-drop-location" id="form-drop-location">
                                    <datalist id="form-drop-locations">
                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                        <option value="Huế">Huế</option>
                                        <option value="Nha Trang">Nha Trang</option>
                                        <option value="Hải Dương">Hải Dương</option>
                                        <option value="Quảng Bình">Quảng Bình</option>

                                        <option value="Hải Dương">Hải Dương</option>
                                        <option value="Quảng Bình">Quảng Bình</option>
                                    </datalist>
                                    <span class="form-icon"><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="form-title">DATE TIME</span>
                                </td>
                                <td>
                                    <input type="datetime-local" class="form-date-time">
                                </td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <input type="submit" name="submit" value="SEARCH CAR">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
    </div>
        </section>
    </div>
<!-- code session 2 -->
<?php
    $car = array();
    $car[0]["tensp"] = "Service";
    $car[0]["mota"] = "Trying to catch up with very new social network? Do you find yourself juggling with copy and images to make sure to share at least.";
    $car[0]["anhsp"] = "https://vidhantravels.com/img/cars/bmw.jpg";

    $car[1]["tensp"] = "Best Coverage";
    $car[1]["mota"] = "Trying to catch up with very new social network? Do you find yourself juggling with copy and images to make sure to share at least.";
    $car[1]["anhsp"] = "https://i.pinimg.com/736x/37/67/52/376752e6c8548f30282a8d315faf1b3d--bmw-cars-cars-motorcycles.jpg";

    $car[2]["tensp"] = "Lowest";
    $car[2]["mota"] = "Trying to catch up with very new social network? Do you find yourself juggling with copy and images to make sure to share at least.";
    $car[2]["anhsp"] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4sij6hWXWmIylQqn3k0G7VApmxFHhz0JNLKizg2_2qzhr5KQjNgk-rp6uK6zzw3wcplU&usqp=CAU";
    ?>
    <div class="session2">
        <div class="title"><b>
                <h2 class="titleh2">OUR SERVICES</h2>
            </b>
        </div>
        <div>
            <div class="productcar">
                <div class="product">
                    <?php
                    $n = count($car);
                    for ($i = 0; $i < $n; $i++) {

                    ?>
                        <div class=" col-12 ">
                            <div class="col-3" styte="width:200px">
                                    <img class="card-img-top" src="<?php echo $car[$i]["anhsp"] ?>" alt="">
                                    <br>
                                    <div class="card-title product-title text-center h5" style="color:white"><?php echo $car[$i]["tensp"] ?></div>
                                    <div class="price text-center h6" style="color:gray" ><?php echo $car[$i]["mota"] ?></div>
                                    <br>
                                    <a class="detail"  href="">
                                        <button class="btn btn-success" style="margin-bottom:40px;">Read More -> </button>
                                    </a>
                                    <br>
                                </div>
                            </div>

                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
<!-- Phan feedback tu khach hang -->
   
<section class="sc6">	
    <div class="container">
        <div class="text-title1">
            <h3>KHÁCH HÀNG NÓI GÌ</h3>
        </div>
        <div class="text-title2">
            <p>Chúng tôi tự hào về chất lượng và dịch vụ của mình</p> 
        </div>

        <div class="wrap">
            <div class="main-text">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>Có lần mình chuyển khoản nhầm mua thừa 1 vé, sau đó liên hệ lại với chăm sóc khách hàng thì được hỗ trợ kiểm tra và chuyển khoản lại ngay, không bị thủ tục rườm rà như bên khác. 
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="./images/a1.jpg" alt="" style="width:50px;height:50px;">
                </div>
                <div class="name">
                    <p>Bùi Xuân Hoàn</p>
                </div>

            </div>
            <div class="main-text">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>Mình rất hài lòng về dịch vụ của xe Điện Biên. nhân viên lịch sự chu đáo, lái xe cẩn thận không phóng nhanh vượt ẩu, dừng nghỉ đúng chỗ. Tôi cảm thấy hài lòng về dịch vụ xe.
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="./images/a2.png" alt="" style="width:50px;height:50px;">
                </div>
                <div class="name">
                    <p>Nguyễn Hữu Thắng</p>
                </div>

            </div>
            <div class="main-text" style="height: 275px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text" > 
                        <p>Hôm qua, mình khá thích thú và hài lòng khi sử dụng dịch vụ xe khoang giường Hà Nội - Sơn La, lái xe nhiệt tình, bạn tiếp viên hỗ trợ mình xách hành lí.
                        </p>
                    </div>
                        
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="./images/a3.jpg" alt="" style="width:50px;height:50px;">
                </div>
                <div class="name">
                    <p>Nguyễn Văn Biên</p>
                </div>
            </div>
            <div class="main-text">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>Xe chạy êm, không phóng nhanh vượt ẩu. Tài xế rất lịch sử, tổng đài trả lời dễ thương. Nhà xe nên mở thêm nhiều tuyến mới để khách hàng có thêm sự lựa chọn.
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="./images/a4.jpg" alt="" style="width:50px;height:50px;">
                </div>
                <div class="name">
                    <p>Phan Đức Thơ</p>
                </div>
            </div>
            <div class="main-text" style="height: 275px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>Đang lễ tết nên cực kì bất ngờ khi nhà xe không nhét khách, chỉ đủ số ghế là đã đi rồi. Phục vụ thì cực kì nhiệt tình, con mình rơi gấu bông ra khỏi túi mà gọi cho anh phụ xe tìm hộ gửi lại văn phòng cho mình.
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="./images/a5.jpg" alt="" style="width:50px;height:50px;">
                </div>
                <div class="name">
                    <p>Phan Thanh Lực</p>
                </div>
            </div>
        </div>
    </div>
</section>
 
<?php 
        include "./pages/components/footer.php" ?>
    <!-- ------------------------------------------ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>