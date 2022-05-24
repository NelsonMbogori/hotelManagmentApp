<?php
// include('configs/app.php');
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','nelson');

$query = "DELETE FROM users WHERE id = '$id' ";
$data = mysqli_query($conn,$query);


if($data){
    echo
    "
    <script>
      alert('Deleted successfully');
      document.location.href = 'users.php';
    </script>
    ";
     
}
else{
    echo "failed!";
}
?>