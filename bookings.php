<?php
// include('configs/app.php');
include('codes/authentication.php');
//  include('includes/sidebar.php');
// $authenticated = new authenticatedaccess;
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
            <a href="dashboard.php"  ><span class="material-icons">dashboard</span>
                    <h2>dashboard</h2>
                </a><br><br>
                <a href="bookings.php" class="active"><span class="material-icons">app_registration</span>
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
                    <h2>bookings</h2>
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
            <form action="codes/bookingcode.php" method="post">
                
                <input type="text" name="firstname"class="form_input" placeholder="firstname" autofill="off">
                
                
                <input type="text" name="middlename"class="form_input"placeholder="middlename" autofill="off">
                
                
                <input type="text" name="surname"class="form_input"placeholder="surname" autofill="off">
                
                
                <input type="password" name="password"class="form_input"placeholder="password" autofill="off">
                
                <input type="email" name="email"class="form_input"placeholder="Email" autofill="off">
                
                <h5>checkout_date</h5><select class="select" name="checkout_date" id="checkout_date" autofill="off">
                    <option default selected>kisumu</option>
                    <option>muranga</option>
                </select>
                
                <h5>checkin_date</h5>
                <input class="select" name="checkin_date" id="checkin_date" type="date">

                <h5>checkout_date</h5>
                <input class="select" name="checkout_date" id="checkout_date" type="date">
                
                <br><br>
                <button type="submit" class="button">submit</button><button type="reset" class="button">clear</button>
            </form>
            </div>
        </div>
    </center>

        </main>
    </div>
</body>
</html>
