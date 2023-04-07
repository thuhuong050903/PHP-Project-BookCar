<?php 
include ("/user/connect.php");
$sql = "CREATE DATABASE booking_project";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
};

$sql = "create table acc 
( id_acc int not null primary key auto_increment,
user_name varchar (100) not null,
user_password varchar (20) not null,
token varchar (20) not null);

create table users
( id_user int not null primary key auto_increment,
id_acc int not null,
user_name varchar(100) not null,
user_email varchar (100) not null,
user_address varchar(100) not null,
user_phone varchar(11) not null,
foreign key (id_acc) references acc(id_acc));

create table book_cars 
( id_bookcar int not null primary key auto_increment,
id_user int not null,
quantity int not null,
price int not null,
foreign key (id_user) references users(id_user));

create table drivers (
id_driver int not null primary key auto_increment,
 id_acc int not null,
driver_name varchar(100) not null,
driver_image varchar(255) not null,
driver_description varchar(255) not null,
driver_license varchar (100) not null,
driver_address varchar(255) not null,
driver_age int not null,
driver_phone varchar(11) not null,
foreign key (id_acc) references acc(id_acc));

create table vehicles (
id_vehicle int not null primary key auto_increment,
vehicle_name varchar(100) not null,
vehicle_type varchar(100) not null,
vehicle_image varchar(255) not null,
vehicle_capacity varchar(10) not null,
seat int not null,
vehicle_description varchar(255) not null,
price_book numeric not null,
price_ship numeric not null);

create table trips (
id_trip int not null primary key auto_increment,
id_driver int not null,
id_vehicle int not null,
departure varchar(255) not null,
destination varchar(255) not null,
trip_date datetime not null,
trip_status varchar(50) not null,
foreign key (id_driver) references drivers (id_driver),
foreign key (id_vehicle) references vehicles (id_vehicle));

create table items (
id_item int not null primary key auto_increment,
id_user int not null,
id_trip int not null,
item_name varchar(100) not null,
item_weight int not null,
item_description varchar(255) not null,
quantity int not null,
foreign key (id_user) references users(id_user),
foreign key (id_trip) references trips(id_trip));

create table payment (
id_payment int not null primary key auto_increment,
id_item int not null,
id_bookcar int not null,
payment_method varchar(50) not null,
amount int not null,
payment_status varchar(100) not null,
foreign key (id_item) references items(id_item),
foreign key (id_bookcar) references book_cars (id_bookcar));


create table orders (
id_order int not null primary key auto_increment,
id_trip int not null,
id_payment int not null,
order_status varchar(50) not null,
foreign key (id_payment) references payment (id_payment),
foreign key (id_trip) references trips(id_trip));
";
    
if ($conn->query($sql) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();



?>