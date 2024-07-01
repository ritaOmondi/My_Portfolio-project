<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "portfolio";
$port = 3307;


$conn = mysqli_connect($host, $username, $password, $database, $port);



if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $guest = $_POST['guest'];
    $destination = $_POST['destination'];
    /*$arrival = date('Y-m-d', strtotime($_POST['arrival']));
    $leaving = date('Y-m-d', strtotime($_POST['leaving'])); */
  


$request = "INSERT INTO booking (name, email, phone, address, guest, destination) 
VALUES ('$name', '$email', '$phone', '$address', '$guest', '$destination')";

mysqli_query($conn, $request);
    header('location:book.php'); 
} else {
    echo 'something went wrong';
} 
?>