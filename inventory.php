<?php
// include('configs/app.php');
include('./codes/authentication.php');
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
    <link rel="stylesheet" href="./styles/style_form.css">
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
            <a href="dashboard.php" ><span class="material-icons">dashboard</span>
                    <h2> dashboard</h2>
                </a><br><br>
                <a href="viewbookings.php"><span class="material-icons">app_registration</span>
                    <h2>bookings</h2>
                </a><br><br>
                <a href="viewinventory.php"  ><span class="material-icons">inventory</span>
                    <h2>inventory</h2>
                </a><br><br>
                <a href="inventory.php" class="active" ><span class="material-icons">inventory 2</span>
                    <h2>inventory 2</h2>
                </a><br><br>
                
                <a href="login.php"><span class="material-icons">login</span>
                    <h2>login</h2>
                </a>   
                
                <a href="index.php" ><span class="material-icons">book</span>
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
            <div class="form_card">
            <form action="codes/inventorycode.php" method="post">
                
                <input type="text" name="name"class="form_input" placeholder="name" autofill="off">
                
                
                <input type="text" name="quantity"class="form_input"placeholder="quantity" autofill="off">
                
                
                <input type="text" name="priceperitem"class="form_input"placeholder=" unit price" autofill="off">
                
                
                <input type="text" name="supplier"class="form_input"placeholder="supplier" autofill="off">
                <br><h1>description</h1><br>
                <textarea class="form_input_description" placeholder="description" autofill="off"name = "description" rows = "10"  cols = "50">
            
                 </textarea class="form_input" placeholder="description" autofill="off"><br>     
                 
                 

               
                
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
