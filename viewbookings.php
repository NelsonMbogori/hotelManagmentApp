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
                <a href="viewbookings.php"  class="active"><span class="material-icons">app_registration</span>
                    <h2>view bookings</h2>
                </a><br><br>
                <a href="viewinventory.php" ><span class="material-icons">location_on</span>
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
















    <div class="message">
    <?php include('message.php'); ?>
    </div>

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
        <th>action</th>
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
                <td><a class='update'; href='updatebookings.php?user_id=$result[user_id]'>Update</a>
                <a class='delete'; href='deletebookings.php?user_id=$result[user_id]'>Delete</a></td>
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

</main>
</html>
</div>

