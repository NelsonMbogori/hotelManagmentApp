<?php
// include('configs/app.php');
include('codes/authentication.php');
//  include('includes/sidebar.php');
$auth->loggedin();



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
            <a href="dashboard.php"  class="active"><span class="material-icons">dashboard</span>
                    <h2>dashboard</h2>
                </a><br><br>
                <a href="bookings.php"><span class="material-icons">app_registration</span>
                    <h2>book room</h2>
                </a><br><br>
                <a href="location.php" ><span class="material-icons">location_on</span>
                    <h2>location</h2>
                </a><br><br>
                <a href="gallery.php" ><span class="material-icons">collections</span>
                    <h2>gallery</h2>
                </a><br><br>
                <a href="login.php"><span class="material-icons">login</span>
                    <h2>login</h2>
                </a>   
                <a href="charts.php"><span class="material-icons">show_chart</span>
                    <h2>analytics</h2>
                </a>
                <a href="login.php"><span class="material-icons">book</span>
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
        <div class="form_card_login">      
            <?php include('message.php'); ?>
                <form  method="POST" action ="">
                    <input type="hidden">
                    
                    <div class="form-control">
                        <label>email</label>
                        <input type="email" name="email" placeholder="email" id="email">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <small>error message</small>
                    </div>
                    <div class="form-control">
                        <label>password</label>
                        <input type="password" name="password" placeholder="password" id="password">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <small>error message</small>
                    </div>
                    
                    <button type="submit" class="" name="login_btn"> login</button>
                </form>      
        </div>
    </center>
        </main>
    </div>
</body>
</html>
















































