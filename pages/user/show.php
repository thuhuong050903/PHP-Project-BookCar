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
<link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/user.css">
<link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/header.css">
<link rel="stylesheet" href="../../../PHP-Project-BookCar/styles/footer.css">
<title>Home Page</title>
</head>
<body>
        <!-- header -->
        <?php 
        include "./pages/components/header.php" ?>
        <!-- section1 -->
        <section class="section1">
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
<!-- code session 2 -->
<div class="latest-blog" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-all text-center">
                            <h1 style="color: white;">OUR SERVICES</h1>
                            <p>WE PROVIDE THE BEST SERVICES TO SERVE CUSTOMERS</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="https://vidhantravels.com/img/cars/bmw.jpg" alt=""style="width:360px;height:250px"/>
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>BOOK A CAR</h3>
                                    <p>We provide an online car booking service to our customers, making it easy for them to book a car quickly and conveniently. Customers can book a car in advance and choose the type of car that suits their needs.</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="https://i.pinimg.com/736x/37/67/52/376752e6c8548f30282a8d315faf1b3d--bmw-cars-cars-motorcycles.jpg" alt="" style="width:360px;height:250px"/>
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>CARPOOLING</h3>
                                    <p>Our carpooling service allows customers to share rides with others in the same destination. It is an economical and time-saving solution for those who do not want to pay too much for transportation and comfort during the trip.</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4sij6hWXWmIylQqn3k0G7VApmxFHhz0JNLKizg2_2qzhr5KQjNgk-rp6uK6zzw3wcplU&usqp=CAU" alt=""style="width:360px;height:250px"/>
                            </div>
                            <div class="blog-content">
                                <div class="title-blog">
                                    <h3>QUICK SHIPPING</h3>
                                    <p>We provide fast shipping service for customers who need to transport goods in the shortest time. We can deliver the goods to the location requested by the customer within a few hours or the same day.</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

<!-- Phan feedback tu khach hang -->
   
<section class="sc6">	
    <div class="container-sc6">
        <div class="text-title1">
            <h3>TESTIMONIAL</h3>
        </div>
        <div class="text-title2">
            <p>We take pride in our quality and service</p> 
        </div>

        <div class="wrap">
            <div class="main-text" style="height: 300px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>There was a time when I mistakenly transferred an excess to buy 1 ticket, then contacted customer care, and I was supported to check and transfer immediately, without cumbersome procedures like other parties.
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="./images/a1.jpg" alt="" style="width:50px;height:50px;">
                </div>
                <div class="name">
                    <p>Mr Hoàn</p>
                </div>

            </div>
            <div class="main-text" style="height: 275px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>I am very satisfied with the service of Da Nang car. polite and attentive staff, drive carefully not to overtake carelessly, stop at the right place. I feel satisfied with the car service.
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="./images/a2.png" alt="" style="width:50px;height:50px;">
                </div>
                <div class="name">
                    <p>Mr Thắng</p>
                </div>

            </div>
            <div class="main-text" style="height: 250px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text" > 
                        <p>Yesterday, I was quite excited and satisfied when using the Đà Nẵng - Quảng Trị bus service, the driver was enthusiastic, the flight attendant helped me carry my luggage.
                        </p>
                    </div>
                        
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="./images/a3.jpg" alt="" style="width:50px;height:50px;">
                </div>
                <div class="name">
                    <p>Mr Biên</p>
                </div>
            </div>
            <div class="main-text" style="height: 275px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>The car runs smoothly, does not overtake carelessly. The driver is very historical, the operator is cute. The garage should open more new routes for customers to have more choices.
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="./images/a4.jpg" alt="" style="width:50px;height:50px;">
                </div>
                <div class="name">
                    <p>Mr Thơ</p>
                </div>
            </div>
            <div class="main-text" style="height: 300px;">
                <div class="text-box">
                    <div class="icon">
                        <i class="fa-solid fa-quote-left"></i>
                    </div>
                    <div class="text"> 
                        <p>It was a holiday, so it was very surprising when the garage was not packed with guests, only enough seats were already gone. Service is extremely enthusiastic, my child dropped a teddy bear from his pocket 
                        </p>
                    </div>
                </div>
                <div class="triangle" ></div>
                <div class="avatar">
                    <img src="./images/a5.jpg" alt="" style="width:50px;height:50px;">
                </div>
                <div class="name">
                    <p>Mr Lực</p>
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