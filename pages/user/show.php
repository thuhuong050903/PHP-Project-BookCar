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
<link rel="stylesheet" href="/styles/user.css">
<title>Home Page</title>

</head>
<body>
    <!-- Code header và section 1 -->
    <div class="header-section1">
        <!-- header -->
        <header>
            <div class="header-logo">
                <img src="https://o.remove.bg/downloads/89bd9379-0143-4de8-8e72-69155c6ba036/logo-removebg-preview.png" alt="logo">
            </div>
            <div class="header-optional">
                <a href="">HOME</a>
            </div>
            <div class="header-optional">
                <a href="">ABOUT US</a>
            </div>
            <div class="header-optional">
                <a href="">SERVICES</a>
            </div>
            <div class="header-optional">
                <a href="">OUR FLEETS</a>
            </div>
            <div class="header-optional">
                <a href="">BLOG</a>
            </div>
            <div class="header-optional">
                <a href="">CONTACT US</a>
            </div>
            <div class="header-optional">
                <a href="">LOGIN</a>
            </div>
        </header>
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

    <!-- ------------------------------------------ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>