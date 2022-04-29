<?php

$name = $_POST['name'];
$quantity = $_POST['quantity'];
$priceperitem = $_POST['priceperitem'];
$supplier = $_POST['supplier'];
$description = $_POST['description'];



// Database connection
$conn = new mysqli('localhost','root','','nelson');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into inventory(name, quantity, priceperitem, supplier, description) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$name, $quantity, $priceperitem, $supplier, $description);
    $execval = $stmt->execute();
    echo $execval;
    header('location: ../viewinventory.php');;
    
    $stmt->close();
    $conn->close();
}

?>

