<?php
include('configs/app.php');
include('codes/authentication.php');
//  include('includes/sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style_form.css">
    <script defer src="form.js"></script>

    <title>Document</title>
</head>
<body>   
<div>
    <center>
    <div class="form_card">
    <form action="codes/bookingcode.php" method="post">
        
        <input type="text" name="firstname"class="form_input" placeholder="firstname">
        
        
        <input type="text" name="middlename"class="form_input"placeholder="middlename">
        
        
        <input type="text" name="surname"class="form_input"placeholder="surname">
        
        
        <input type="password" name="password"class="form_input"placeholder="password">
        
        <input type="email" name="email"class="form_input"placeholder="Email">
        
        <h5>location</h5><select class="select">
            <option default selected>kisumu</option>
            <option>muranga</option>
        </select>
        
        <h5>gender</h5><select class="select"> placeholder ="location">
            <option default selected>male</option>
            <option>female</option>
        </select>
        <br><br>
        <button type="submit" class="button">submit</button><button type="reset" class="button">clear</button>
    </form>
    </div>
</div>
    </center>
</body>
</html>



