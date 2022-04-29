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
            <a href="index.php"><span class="material-icons">dashboard</span>
                    <h2>dashboard</h2>
                </a><br><br>
                
                </a><br><br>
                <a href="viewinventory.php" ><span class="material-icons">location_on</span>
                    <h2>inventory</h2>
                </a><br><br>
                <a href="viewbookings.php" ><span class="material-icons">collections</span>
                    <h2>bookings</h2>
                </a><br><br>
                <a href="login.php"><span class="material-icons">login</span>
                    <h2>login</h2>
                </a>   
                <a href="charts.php"><span class="material-icons">show_chart</span>
                    <h2>analytics</h2>
                </a>
                <a href="users.php"   class="active"><span class="material-icons">show_chart</span>
                    <h2>users</h2>
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

$query = "SELECT * FROM users";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);




if($total != 0){
    ?>
    <table class="content_table">
    <thead >
    <tr>
        <th>id</th>
        <th>firstname</th>
        <th>email</th>
        <th>verify_status</th>
        <th>added_at</th>
        <th>role</th>
        <th>action</th>
        
    </tr>
    </thead>
    <tbody>   
     <?php
      while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['fname']."</td>
                <td>".$result['email']."</td>
                <td>".$result['verify_status']."</td>
                <td>".$result['added_at']."</td>
                <td>".$result['roles']."</td>
                <td><a class='update'; href='updatebookings.php?id=$result[id]'>Update</a>
                <a class='delete'; href='deletebookings.php?id=$result[id]'>Delete</a></td>
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