<?php
// include('configs/app.php');
include('codes/authentication.php');
include_once('controlers/authenticatedaccess.php  ');

$authenticated = new authenticatedaccess;


$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','nelson');

$query = "SELECT * FROM users WHERE id = '$id' ";
$data = mysqli_query($conn,$query);


$data = mysqli_query($conn,$query);
// $total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if(isset($_POST["update"])){

$fname = $_POST['fname'];
$email = $_POST['email'];
$verify_status = $_POST['verify_status'];
$roles = $_POST['roles'];
$title = $_POST['title'];

 $query = "UPDATE users set fname = '$fname', email= '$email', verify_status='$verify_status',roles='$roles',title = '$title' WHERE id = $id";

 $data = mysqli_query($conn,$query);
 if($data)
 {
    // redirect('Data updated successfully','viewbookings.php');
     echo
      "
      <script>
        alert('Data updated successfully');
        document.location.href = 'users.php';
      </script>
      ";
      
 }
 else{
     echo "Update  failed";
 }
   
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
            <a href="dashboard.php" ><span class="material-icons">dashboard</span>
                    <h2>dashboard</h2>
                </a><br><br>
                <a href="viewbookings.php"   class="active" ><span class="material-icons">app_registration</span>
                    <h2>bookings</h2>
                </a><br><br>
                <a href="viewinventory.php"><span class="material-icons">location_on</span>
                    <h2>inventory</h2>
                </a><br><br>
                
                <a href="login.php"><span class="material-icons">login</span>
                    <h2>login</h2>
                </a>   
                
                <a href="index.php"><span class="material-icons">book</span>
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
            <form action="" method="post">
                
                <input type="text" name="fname"class="form_input" placeholder="fname" autofill="off" value="<?php echo $result['fname'];?>">
                
                
                <input type="text" name="email"class="form_input"placeholder="email" autofill="off" value="<?php echo $result['email'];?>">
                
                <input type="text" name="title"class="form_input"placeholder="title" autofill="off" value="<?php echo $result['title'];?>">
                
                <input type="text" name="verify_status"class="form_input"placeholder="verify_status" autofill="off" value="<?php echo $result['verify_status'];?>">
                
                <input class="form_input" name="roles" id="roles" type="text"  value="<?php echo $result['roles'];?>">

                
                
                
                <br><br>
                <button type="update"  name="update" class="button">update</button>
            </form>
            </div>
        </div>
    </center>

        </main>
    </div>
</body>
</html>
?>
