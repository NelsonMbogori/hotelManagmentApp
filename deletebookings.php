<?php
// include('configs/app.php');
$id = $_GET['user_id'];
$conn = mysqli_connect('localhost','root','','nelson');

$query = "DELETE FROM registration_2 WHERE user_id = '$id' ";
$data = mysqli_query($conn,$query);


if($data){
    echo
    "
    <script>
      alert('Deleted successfully');
      document.location.href = 'viewbookings.php';
    </script>
    ";
     
}
else{
    echo "failed!";
}
?>