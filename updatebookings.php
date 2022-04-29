<?php
// include('configs/app.php');
include('codes/authentication.php');
include_once('controlers/authenticatedaccess.php  ');

$authenticated = new authenticatedaccess;


$id = $_GET['user_id'];
$conn = mysqli_connect('localhost','root','','nelson');

$query = "SELECT * FROM registration_2 WHERE user_id = '$id' ";
$data = mysqli_query($conn,$query);


$data = mysqli_query($conn,$query);
// $total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if(isset($_POST["update"])){

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$surname = $_POST['surname'];
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];

 $query = "UPDATE registration_2 set firstname = '$firstname', middlename= '$middlename', surname='$surname',checkin_date='$checkin_date',checkout_date='$checkout_date' WHERE user_id = $id";

 $data = mysqli_query($conn,$query);
 if($data)
 {
    redirect('Data updated successfully','viewbookings.php');
     echo
      "
      <script>
        alert('Data updated successfully');
        document.location.href = 'viewbookings.php';
      </script>
      ";
      
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
            <div class="form_card">
            <form action="" method="post">
                
                <input type="text" name="firstname"class="form_input" placeholder="firstname" autofill="off" value="<?php echo $result['firstname'];?>">
                
                
                <input type="text" name="middlename"class="form_input"placeholder="middlename" autofill="off" value="<?php echo $result['middlename'];?>">
                
                
                <input type="text" name="surname"class="form_input"placeholder="surname" autofill="off" value="<?php echo $result['surname'];?>">
                
                <input class="select" name="checkin_date" id="checkin_date" type="date"  value="<?php echo $result['checkin_date'];?>">
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
