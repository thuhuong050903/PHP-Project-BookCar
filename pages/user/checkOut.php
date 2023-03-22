<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <header>
        <?php 
        include "/pages/components/header.php";
        ?>
    </header>
    <form class="form-information" method="post">
        <div class="form-information-group">
            <div class="tiltle">Name <span class="required">*</span></div>
            <input type="text" name="name" value="" placeholder="Please enter your name">
        </div>
        <div class="group">
            <div class="tiltle">Phone number <span class="required">*</span></div>
            <input type="text" name="phoneNumber" value="" placeholder="Please enter your phone number">
        </div>
        <div class="group">
            <div class="tiltle">Email to receive trip information <span class="required">*</span></div>
            <input type="text" name="email" value="" placeholder="Please enter your email">
        </div>
    </form>
</body>
</html>