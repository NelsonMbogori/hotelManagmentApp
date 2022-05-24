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
    <link href="./styles/stle.css" rel="stylesheet">  
    <link href="./styles/style_home.css" rel="stylesheet">    
  
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
            <a href="dashboard.php"><span class="material-icons">dashboard</span>
                    <h2>dashboard</h2>
                </a><br><br>
                <a href="bookings.php"><span class="material-icons">app_registration</span>
                    <h2>book room</h2>
                </a><br><br>
                <a href="location.php" ><span class="material-icons">location_on</span>
                    <h2>location</h2>
                </a><br><br>
                <a href="gallery.php"  class="active" ><span class="material-icons">collections</span>
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
        <section>
      <div class="row">
        <h1>Our Features</h1>
      </div>
      <div class="row">
        <!-- Column One -->
        <div class="column">
          <div class="card"">
            <a class="no_underline" href="login.php">
              <div class="icon">
                <i class="fa-solid fa-user"></i>
              </div>
              <h3>User Friendly</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
                asperiores natus ad molestiae aliquid explicabo. Iste eaque quo et
                commodi.
              </p>
            </a>
          </div>
        </div>
        <!-- Column Two -->
        <div class="column">
          <div class="card">
            <a class="no_underline" href="login.php">
            <div class="icon">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h3>Super Secure</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
              asperiores natus ad molestiae aliquid explicabo. Iste eaque quo et
              commodi.
            </p>
          </a>
          </div>
        </div>
        <!-- Column Three -->
        <div class="column">
          <div class="card">
            <a class="no_underline" href="login.php">

            <div class="icon">
              <i class="fa-solid fa-headset"></i>
            </div>
            <h3>Quick Support</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
              asperiores natus ad molestiae aliquid explicabo. Iste eaque quo et
              commodi.
            </p>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <p><h1>the map</h1></p>

      </div>
      <div class="row">
        <div class="map_div">
        </div>

      </div>
    </section>
        </main>
    </div>
</body>
</html>
