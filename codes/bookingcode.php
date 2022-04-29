<?php

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$email = $_POST['email'];
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];


// Database connection
$conn = new mysqli('localhost','root','','nelson');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration_2(firstname, middlename, surname, password, email, checkin_date, checkout_date) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss",$firstname, $middlename, $surname, $password, $email, $checkin_date, $checkout_date);
    $execval = $stmt->execute();
    echo $execval;
    header('location: ../stripe/paymentform.php');;
    
    $stmt->close();
    $conn->close();
}

?>

