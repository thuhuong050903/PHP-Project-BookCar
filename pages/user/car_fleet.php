<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Cars Fleet</title>
</head>
<body>
    <section class="sectionChooseFleet">
        <div class="sectionChooseFleet-title">
            <form action="" method="post" class="sectionChooseFleet-form">
                <?php
                    include('data_car_fleet.php'); 
                    for ($i=0;$i <= sizeof($cars_make);$i++) {  
                ?>
                <select name="form-car-make" id="form-car-make">
                    <option value="none">Choose a car make</option>  
                    <option value="<?php echo $cars_make[0]?>"><?php echo $cars_make[0] ?></option>
                    <option value="<?php echo $cars_make[1] ?>"><?php echo $cars_make[1] ?></option>
                    <option value="<?php echo $cars_make[2] ?>"><?php echo $cars_make[2] ?></option>
                    <option value="<?php echo $cars_make[3] ?>"><?php echo $cars_make[3] ?></option>
                    <option value="<?php echo $cars_make[4] ?>"><?php echo $cars_make[4] ?></option>
                </select> 
                <?php } 
                    for($i = 1; $i <= sizeof($cars_type); $i++) {
                        ?>
                <select name="form-car-type" id="form-car-type">
                    <option value="none">Choose a car type</option>
                    <option value="<?php echo $cars_type[0] ?>"><?php echo $cars_type[0] ?></option>
                    <option value="<?php echo $cars_type[1] ?>"><?php echo $cars_type[1] ?></option>
                    <option value="<?php echo $cars_type[2] ?>"><?php echo $cars_type[2] ?></option>
                    <option value="<?php echo $cars_type[3] ?>"><?php echo $cars_type[3] ?></option>
                    <option value="<?php echo $cars_type[4] ?>"><?php echo $cars_type[4] ?></option>
                </select>
                <?php } ?>
                <input type="text" name="search" value="" placeholder="Search">
                <input type="submit" name="submit" value="Search" >
            </form>
        </div>
    </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>