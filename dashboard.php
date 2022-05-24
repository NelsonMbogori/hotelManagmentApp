<?php
// // include('configs/app.php');

// include('codes/authentication.php');
// include_once('controlers/authenticatedaccess.php  ');

// // // $authenticated = new authenticatedaccess;
//  $auth->loggedin();
// // // $authenticated->adminaccess();

// include('codes/authentication.php');
include_once('./controlers/logincontroller.php');

$authenticated2 = new logincontroller;
$authenticated2->isadm();

$conn = new mysqli('localhost','root','','nelson');

$query = "SELECT * FROM registration_2" ;
$data = mysqli_query($conn,$query);
$total_bookings = mysqli_num_rows($data);

$query1 = "SELECT * FROM users" ;
$data1 = mysqli_query($conn,$query1);
$total_employees = mysqli_num_rows($data1);


$query2 = "SELECT * FROM inventory" ;
$data2 = mysqli_query($conn,$query2);
$total_inv = mysqli_num_rows($data2);


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
    <link href="./styles/stle.css" rel="stylesheet">    
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
            <a href="index.php"  class="active"><span class="material-icons">dashboard</span>
                    <h2>dashboard</h2>
                </a><br><br>
                
                </a><br><br>
                <a href="viewbookings.php" ><span class="material-icons">collections</span>
                    <h2>bookings</h2>
                </a><br><br>
                <a href="viewinventory.php" ><span class="material-icons">inventory</span>
                    <h2>inventory</h2>
                </a><br><br>
                
                <a href="login.php"><span class="material-icons">login</span>
                    <h2>login</h2>
                </a>   
                <a href="charts.php"><span class="material-icons">show_chart</span>
                    <h2>analytics</h2>
                </a>
                <a href="users.php"><span class="material-icons">person</span>
                    <h2>users</h2>
                </a>
                
                <a href="registration.php"><span class="material-icons">group</span>
                    <h2>add users</h2>
                </a>
                

                

                <span class="material-icons">login</span>
                    <form action="login.php" method="POST">
                        <button type="submit" name="logout_btn">logout</button> 
                    </form>
                </a>               
            </div>
        </aside>
        <main>
            
            <div class="top_center">
                <div class="date">
                
                    <?php include('message.php'); ?>
                </div>   
                <div class="the3">
                    <div class="tot_bookings">
                        <h2> total bookings:</h2>
                        <br><br><br>
                        <?php echo "<h2>".$total_bookings."</h2>"?>
                    </div>  
                    <div class="tot_exp">
                    <h2> total employees:</h2>
                    <br><br><br>
                        <?php echo "<h2>".$total_employees."</h2>"?>
                    
                    </div> 
                    <div class="tot_wage">
                    <h2> total inventory items:</h2>
                    <br><br><br>
                        <?php echo "<h2>".$total_inv."</h2>"?>
                        
                </div> 
                    
                    
                </div>
                
            </div>
          
        <div class="recent_orders">
            <h2> recent bookings</h2>
            <?php

$conn = mysqli_connect('localhost','root','','nelson');

$query = "SELECT * FROM registration_2";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);




if($total != 0){
    ?>
    <table class="content_table">
    <thead >
    <tr>
        <th>id</th>
        <th>firstname</th>
        <th>middlename</th>
        <th>surname</th>
        <th>location</th>
        <th>email</th>
        <th>checkin_date</th>
        
    </tr>
    </thead>
    <tbody>   
     <?php
      while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$result['user_id']."</td>
                <td>".$result['firstname']."</td>
                <td>".$result['middlename']."</td>
                <td>".$result['surname']."</td>
                <td>".$result['checkout_date']."</td>
                <td>".$result['email']."</td>
                <td>".$result['checkin_date']."</td>
                
            </tr> 
             ";
             
      }
}
else{
    echo "<tr>
    <td>No</td>
    </tr>";
}
?>
</tbody>
</table>
            <?php include('message.php'); ?>
        </main>
        <?php include('message.php'); ?>

</body>
</html>