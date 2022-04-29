<?php
  if(!empty($_GET['tid'] && !empty($_GET['product']))) {
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $GET['tid'];
    $product = $GET['product'];
  } else {
    header('Location: paymentform.php');
  }
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
    <link href="../styles/style2.css" rel="stylesheet">    
    <title>Document</title>
</head>
<body class="body">
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src = "../images/logo.png">
                    <h1>name</h1>
                    
                </div>
            </div>
            <div class="close_btn">

            </div>
            <div class="side_bar">
            <a href="../dashboard.php"><span class="material-icons">dashboard</span>
                    <h2>dashboard</h2>
                </a><br><br>
                <a href="../bookings.php"><span class="material-icons">app_registration</span>
                    <h2>book room</h2>
                </a><br><br>
                <a href="../location.php" ><span class="material-icons">location_on</span>
                    <h2>location</h2>
                </a><br><br>
                <a href="../gallery.php"  class="active" ><span class="material-icons">collections</span>
                    <h2>gallery</h2>
                </a><br><br>
                <a href="../login.php"><span class="material-icons">login</span>
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
        <div >
          <h2>Thank you for purchasing <?php echo $product; ?></h2>
          <hr>
          <p>Your transaction ID is <?php echo $tid; ?></p>
          <p>Check your email for more info</p>
          <p><a href="../index.php" >Go Back</a></p>
        </div>
         </center>
        </main>
    </div>
</body>
</html>




















<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thank You</title>
</head>
<body>
  <div >
    <h2>Thank you for purchasing <?php echo $product; ?></h2>
    <hr>
    <p>Your transaction ID is <?php echo $tid; ?></p>
    <p>Check your email for more info</p>
    <p><a href="paymentform.php" >Go Back</a></p>
  </div>
</body>
</html>