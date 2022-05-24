<?php
// include('configs/app.php');
include('codes/authentication.php');
include_once('controlers/authenticatedaccess.php  ');

$authenticated = new authenticatedaccess;



$room_id = $_GET['room_id'];
$id = $_GET['user_id'];
$conn = mysqli_connect('localhost','root','','nelson');

$query = "SELECT * FROM rooms WHERE room_id = '$room_id' ";
$data = mysqli_query($conn,$query);
var_dump($id);
var_dump($room_id);

$data = mysqli_query($conn,$query);
// $total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if(isset($_POST["update"])){


$type = $_POST['type'];
$status = $_POST['status'];
$user_id = $_POST['user_id'];
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];

 $query = "UPDATE rooms set  type= '$type', status='$status',user_id='$user_id',checkin_date='$checkin_date' WHERE room_id = $room_id";

 $data = mysqli_query($conn,$query);
 if($data)
 {
    redirect('Data updated successfully','viewbookings.php');
    //  echo
    //   "
    //   <script>
    //     alert('Data updated successfully');
    //     document.location.href = 'viewbookings.php';
    //   </script>
    //   ";
      
 }
 else{
     echo "Update  failed";
 }
   
   }
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="./styles/style2.css" rel="stylesheet">    
    <link rel="stylesheet" href="styles/style_form.css">
    <script defer src="form.js"></script>
    <title>Document</title>
</head>
<body class="body">
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src = "./images/logo.png">
                    <h1>name</h1>
                    
                </div>
            </div>
            <div class="close_btn">

            </div>
            <div class="side_bar">
            <a href="dashboard.php" ><span class="material-icons">dashboard</span>
                    <h2>dashboard</h2>
                </a><br><br>
                <a href="viewbookings.php"   class="active" ><span class="material-icons">app_registration</span>
                    <h2>bookings</h2>
                </a><br><br>
                <a href="viewinventory.php"><span class="material-icons">location_on</span>
                    <h2>inventory</h2>
                </a><br><br>
                
                <a href="login.php"><span class="material-icons">login</span>
                    <h2>login</h2>
                </a>   
                
                <a href="index.php"><span class="material-icons">book</span>
                    <h2>home</h2>
                </a>

                

                <span class="material-icons">login</span>
                    <form action="login.php" method="POST">
                        <button type="submit" name="logout_btn">logout</button> 
                    </form>
                </a>               
            </div>
        </aside>
        <main class="main">
        <center>
        <?php echo "$id" ?>
            <div class="form_card">
            <form action="" method="post">
            
                <input type="text" name="user_id"class="form_input" placeholder="user_id" autofill="off" value="<?php echo $id ?>">
                
                
                <input type="text" name="type"class="form_input"placeholder="type" autofill="off" value="<?php echo $result['type'];?>">
                
                
                <input type="text" name="status"class="form_input"placeholder="status" autofill="off" value="<?php echo $result['status'];?>">
                
                <input class="select" name="checkin_date" id="checkin_date" type="date" value="<?php echo $result['checkin_date'];?>">
                <input class="select" name="checkout_date" id="checkout_date" type="date" value="<?php echo $result['checkout_date'];?>">


                
                
                
                <br><br>
                <button type="update"  name="update" class="button">update</button>
            </form>
            </div>
        </div>
    </center>

        </main>
    </div>
</body>
</html>
?>
