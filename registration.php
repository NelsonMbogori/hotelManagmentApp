<?php
// include('configs/app.php');
include('codes/authentication.php');
//  include('includes/sidebar.php');



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
            <a href="index.php" ><span class="material-icons">dashboard</span>
                    <h2>dashboard</h2>
                </a><br><br>
                
                </a><br><br>
                <a href="viewbookings.php" ><span class="material-icons">collections</span>
                    <h2>bookings</h2>
                </a><br><br>
                <a href="viewinventory.php" ><span class="material-icons">location_on</span>
                    <h2>inventory</h2>
                </a><br><br>
                
                <a href="login.php"><span class="material-icons">login</span>
                    <h2>login</h2>
                </a>   
                <a href="charts.php"><span class="material-icons">show_chart</span>
                    <h2>analytics</h2>
                </a>
                <a href="users.php"><span class="material-icons">show_chart</span>
                    <h2>users</h2>
                </a>
                <a href="registration.php" class="active"><span class="material-icons">show_chart</span>
                    <h2>add users</h2>
                </a>
                

                

                <span class="material-icons">login</span>
                    <form action="login.php" method="POST">
                        <button type="submit" name="logout_btn">logout</button> 
                    </form>
                </a>               
            </div>
        </aside>
        <main class="main">
    <div class="form signup">
        <span class="title"></span>    
            <?php include('message.php'); ?>
        <form action="" method="POST">
            <center>
            <h1>add an employee</h1>,
            <div class="form_card">
            
            <input type="text" class="form_input" name="fname"  placeholder="Enter  name" required>
            
        
        
            <input type="text" class="form_input" name="title"  placeholder="Enter  title" required>
            
        
        
            <input type="text" name="email" class="form_input" placeholder="Enter  email" required>
            
        
        
            <input type="password" class="form_input" name="password"  placeholder="Create a password" required>
        
        
            <input type="password" class="form_input" name="cofirm_password"  placeholder="Confirm a password" required> <br><br>
            
        
        <button type="submit" class="button" name="register_btn" class="buttons">submit</button>
        </div>
            </center>
            <?php include('message.php'); ?>
        </form>

        
        
    </div>
</body>
</html>
