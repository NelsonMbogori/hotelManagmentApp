<?php

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$location = $_POST['location'];

// Database connection
$conn = new mysqli('localhost','root','','nelson');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration_2(firstname, middlename, surname, password, email, gender, location) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss",$firstname, $middlename, $surname, $password, $email, $gender, $location);
    $execval = $stmt->execute();
    echo $execval;
    echo "<p style = 'color:green', >Registration successful..</p>";
    
    $stmt->close();
    $conn->close();
}
?>

