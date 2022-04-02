<?php
include('configs/app.php');
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
   <link href="./styles/style_login.css" rel="stylesheet">  
   <script src="https://kit.fontawesome.com/30c9273372.js" crossorigin="anonymous"></script>
   <script defer src="form.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="sidebardiv">
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
                <a href="bookings.php"><span class="material-icons">app_registration</span>
                    <h2>book room</h2>
                </a><br><br>
                <a href="location.php" ><span class="material-icons">location_on</span>
                    <h2>location</h2>
                </a><br><br>
                <a href="gallery.php" ><span class="material-icons">collections</span>
                    <h2>gallery</h2>
                </a><br><br>
                <a href="login.php"  class="active"><span class="material-icons">login</span>
                    <h2>login</h2>
                </a>   
                <a href="dasboard.html"><span class="material-icons">login</span>
                    <h2>log out</h2>
                </a>               
            </div>
        </aside>
    </div class="main">
    <center>
        <div class="ha">
            <div>
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
        </div>
    </center>
    </div>
</body>
</html>
<!-- <form class="form" id ="form">
                    <div class="form-control">
                        <label>username</label>
                        <input type="text" placeholder="username" id="username">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <small>error message</small>
                    </div>
                    <div class="form-control">
                        <label>email</label>
                        <input type="email" placeholder="email" id="email">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <small>error message</small>
                    </div>
                    <div class="form-control">
                        <label>password</label>
                        <input type="password" placeholder="password" id="password2">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <small>error message</small>
                    </div>
                    <div class="form-control">
                        <label>password2</label>
                        <input type="password" placeholder="password2" id="password">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                        <small>error message</small>
                    </div>
                    <button>submit</button>
                </form> -->