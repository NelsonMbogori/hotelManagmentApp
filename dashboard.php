<?php
include('configs/app.php');

include('codes/authentication.php');
include_once('controlers/authenticatedaccess.php  ');

$authenticated = new authenticatedaccess;
//  $authenticated->adminaccess();

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
            <a href="index.php"  class="active"><span class="material-icons">dashboard</span>
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
                    <h2>bookings</h2>
                </a>

                

                <span class="material-icons">login</span>
                    <form action="login.php" method="POST">
                        <button type="submit" name="logout_btn">logout</button> 
                    </form>
                </a>               
            </div>
        </aside>
        <main>
            
            <div class="top_center">
                <div class="date">
                
                    <input type="date">
                    <?php include('message.php'); ?>
                </div>   
                <div class="the3">
                    <div class="tot_bookings">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio eaque est, harum fuga cupiditate explicabo quod dolorum voluptatum, officia quis suscipit mollitia dolorem odit natus omnis ea, eligendi recusandae odio?
                    </div>  
                    <div class="tot_exp">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio eaque est, harum fuga cupiditate explicabo quod dolorum voluptatum, officia quis suscipit mollitia dolorem odit natus omnis ea, eligendi recusandae odio?
                    </div> 
                    <div class="tot_wage">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio eaque est, harum fuga cupiditate explicabo quod dolorum voluptatum, officia quis suscipit mollitia dolorem odit natus omnis ea, eligendi recusandae odio?
                    </div> 
                </div>
                
            </div>
          
        <div class="recent_orders">
            <h2>orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>nnnnnn</th>
                        <th>nnnnnn</th>
                        <th>nnnnnn</th>
                        <th>nnnnnn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                    </tr>
                    <tr>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                    </tr>
                    <tr>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                    </tr>
                    <tr>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                        <td>nnnnnnnnn</td>
                    </tr>
                </tbody>
            </table>
            
        </main>
        <?php include('message.php'); ?>

</body>
</html>