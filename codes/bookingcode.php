<?php

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$surname = $_POST['surname'];
$room_type = $_POST['room_type'];
$email = $_POST['email'];
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];


if ($room_type == 'single')
{
  $price = 5000;
}
if ($room_type == 'double')
{
  $price = 6000;
}
if ($room_type == 'tripple')
{
  $price = 7000;
}
$stop = strtotime($checkout_date);
$start = strtotime($checkin_date);

$daysdiff =($stop - $start)/60/60/24;
$amount = $daysdiff*$price;
$user = $amount; 


// Database connection
$conn = new mysqli('localhost','root','','nelson');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration_2(firstname, middlename, surname, room_type, email, checkin_date, checkout_date) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss",$firstname, $middlename, $surname, $room_type, $email, $checkin_date, $checkout_date);
    $execval = $stmt->execute();
    echo $execval;
    header("location: ../stripe/paymentform.php?user=".$user);
    
    $stmt->close();
    $conn->close();
}

?>

