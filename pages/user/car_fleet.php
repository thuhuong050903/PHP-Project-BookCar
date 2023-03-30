<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="" type="" href="./styles/car_fleet.css">
<title>Cars Fleet</title>
</head>
<body>

<header>
    <?php 
    require "header.php" ; ?>
</header>
<?php 
include "./data_car_fleet.php";
?>
<section class="sectionChooseFleet">
    <div class="container">
        <div class="sectionChooseFleet-title">
            Choose car from our fleet
        </div>
        <div class="sectionChooseFleet-form">
            <form action="" method="post" class="form">
            
                <select name="form-car-make" id="form-car-make">
                    <option value="none">Choose a car make</option>  
                    <option value="<?php echo $cars_make[0]?>"><?php echo $cars_make[0] ?></option>
                    <option value="<?php echo $cars_make[1] ?>"><?php echo $cars_make[1] ?></option>
                    <option value="<?php echo $cars_make[2] ?>"><?php echo $cars_make[2] ?></option>
                    <option value="<?php echo $cars_make[3] ?>"><?php echo $cars_make[3] ?></option>
                    <option value="<?php echo $cars_make[4] ?>"><?php echo $cars_make[4] ?></option>
                </select> 
                
                <select name="form-car-type" id="form-car-type">
                    <option value="none">Choose a car type</option>
                    <option value="<?php echo $car_type[0] ?>"><?php echo $car_type[0] ?></option>
                    <option value="<?php echo $car_type[1] ?>"><?php echo $car_type[1] ?></option>
                    <option value="<?php echo $car_type[2] ?>"><?php echo $car_type[2] ?></option>
                    <option value="<?php echo $car_type[3] ?>"><?php echo $car_type[3] ?></option>
                    <option value="<?php echo $car_type[4] ?>"><?php echo $car_type[4] ?></option>
                </select>
            
                <input type="text" name="search" value="" placeholder="Search" >
                <input type="submit" name="submit" value="Search" class="form-search">
            </form>
        </div>
    </div>
</section>

<footer>
    <?php  
    include "./pages/components/footer.php";
    ?>
</footer>
</body>
</html>