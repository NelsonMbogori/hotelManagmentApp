<?php
// include('configs/app.php');
include('configs/authentication.php');


//  include('includes/sidebar.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form signup">
   
        <span class="title">Registration</span>    
            <?php include('message.php'); ?>
        <form action="" method="POST">
            <div class="input-field">
                <input type="text"  name="fname"  placeholder="Enter your name" required>
                <i class="uil uil-user"></i>
            </div>
            <div class="input-field">
                <input type="text" name="email" placeholder="Enter your email" required>
                <i class="uil uil-envelope icon"></i>
            </div>
            <div class="input-field">
                <input type="password" class="password" name="password"  placeholder="Create a password" required>
                <i class="uil uil-lock icon"></i>
            </div>
            <div class="input-field">
                <input type="password" class="password" name="cofirm_password"  placeholder="Confirm a password" required>
                <i class="uil uil-lock icon"></i>
                <i class="uil uil-eye-slash showHidePw"></i>
            </div>
            <button type="submit" name="register_btn" class="buttons">submit</button>
            <?php include('message.php'); ?>
        </form>

        <div class="login-signup">
            <span class="text">Not a member?
                <a href="#" class="text login-link">Signup now</a>
            </span>
        </div>
        
    </div>
</body>
</html>
