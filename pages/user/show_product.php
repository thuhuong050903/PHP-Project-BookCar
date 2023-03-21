<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type car</title>
    <style>
        .selection {
            background-color: width;
            display: block;
            width: 100%;
        }

        .selection h2 b {
            font-size: 30px;
            color: black;
        }

        button {
            padding: 10px;
            border-radius: 10px;
            display: block;
            margin-top: 10px;

        }

        button a {
            color: black;
            text-decoration: none;
            font-style: sans-serif;
            font-size: 20px;
        }

        .container {
            margin-top: 0px;
            width: 100%;
            height: auto;
            display: grid;
            grid-template-columns: 20% 80%;
            background-color: darkgrey;
        }

        .selection {
            margin-left: 20px;
        }

        .list_product h2 b {
            font-size: 30px;
            color: black;
            text-align: center;
        }

        @media(min-width:100%) {}

        .product {
            margin-left: 1px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            grid-gap: 15px;
        }



        .detail_order {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .detail_order button {
            width: 100px;
            height: 50px;
            

        }

        .detail_order a {
            text-decoration: none;
        }

        .card {
            height: 550px;
        }

        .card-title {
            text-align: center;
        }

        .price {
            text-align: center;
        }

        .col-12 {
            background-color: white;
            border-radius: 15px;
            height: auto;

        }

        .card-img-top {
            border-radius: 15px 15px 0px 0px;
        }
        .btn-success{
            background-color: green;
        }
        .add-to-cart{
            background-color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="selection">
            <h2><b>Chọn loại xe<b></h2>
            <?php
            include "connect.php";
            $sl = "SELECT*FROM dstype";
            $kq = mysqli_query($conn, $sl);
            while ($d = mysqli_fetch_array($kq)) {
            ?>
                <button style="width: 200px">
                    <a href="type_car.php? type=<?php echo  $d['idtype']  ?> "><?php echo  $d['type_name'] ?></a>
                </button>
            <?php } ?>
        </div>
        <div class="list_product">
            <center>
                <h2><b>Danh sách xe tiêu chuẩn<b></h2>
            </center>
            <div class="product">
                <?php
                if (isset($_GET['type'])) {
                    $idtype = $_GET['type'];
                    $sl = "SELECT name , image , price from dscar WHERE idtype =$idtype";
                    $kq = mysqLi_query($conn, $sl);
                    while ($d = mysqli_fetch_array($kq)) {
                ?>
                        <div class=" col-12 ">
                            <div class="card product p-2" styte="width:auto">
                                <img class="card-img-top" src="<?php echo $d["image"] ?>" height="350px" width="100%" alt="">
                                <div class="card-title product-title text-center h5"><?php echo $d["name"] ?></div>
                                <div class="price text-center h6"><?php echo $d["price"] ?></div>
                                <div class="detail_order">
                                    <a class="detail" href="detail.php? detail=<?php echo $i; ?>" style="width:200px; height:60px; ">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><b>Xem chi tiết</b></button>
                                    </a>
                                    <a>
                                        <button class="text-center add-to-cart btn btn-outline-success add-cart">
                                            <span class="material-symbols-outlined"><b>Book</b></span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>


                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>