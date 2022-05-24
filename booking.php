<?php
include('configs/app.php');


if (isset($_GET['type'])){
$type = $_GET['type'];
}
else{
  echo "not set";
}
if ($type == 'single')
{
  $start = 101;
}
if ($type == 'double')
{
  $start = 201;
}
if ($type == 'tripple')
{
  $start = 301;
}

$conn = mysqli_connect('localhost','root','','nelson');
$count = 0;
for($x=0;$x<10;$x++){
  $sql = "SELECT * FROM rooms where room_id = $start AND status = 'vacant'  " ;
  $result = mysqli_query($conn, $sql);
  $resultCheck =mysqli_num_rows($result); 


if ($resultCheck == 1)
{
  $count = $count + 1;
}
  $start = $start + 1;
}

if ($count = 0)
{
  
  echo
  "
  <script>
    alert('no rooms of this type are available at the moment');
    document.location.href = 'index.php';
  </script>
  ";}










?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>booking</title>
    <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./styles/style_home.css" />
    <link rel="stylesheet" href="styles/style_form.css">

</head>
  <body>
    <section>
      
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">la casa </label>
        
        <ul>
          <li><a  class="no_underline" href="index.php">Home</a></li>
          <li><a class="no_underline" href="#">About</a></li>
          <li><a class="no_underline" href="#">Contact</a></li>
          <li><a class="no_underline" href="gallery.php">gallery</a></li>

          <li><a class="no_underline" href="login.php">login</a></li>

        </ul>
      </nav>
    </section>
    <section>
        <center>
    <div class="form_card">
            <form action="codes/bookingcode.php" method="post">
                
                <input type="text" name="firstname"class="form_input" placeholder="firstname" required  >
                
                
                <input type="text" name="middlename"class="form_input"placeholder="middlename" required>
                
                
                <input type="text" name="surname"class="form_input"placeholder="surname" required>
                
                
                <!-- <input type="password" name="password"class="form_input"placeholder="password" required> -->
                
                <input type="email" name="email"class="form_input"placeholder="Email" required>
                <h3>type</h3>
                <input type="text" name="room_type" class="form_input" required  value = "<?php echo $type ?>">
                    
                </input>
                
                <h3>checkin_date</h3>
                <input class="select" name="checkin_date" id="checkin_date" type="date" required>

                <h3>checkout_date</h3>
                <input class="select" name="checkout_date" id="checkout_date" type="date" required>
                
                <br><br>
                <button type="submit" class="button">submit</button><button type="reset" class="button">clear</button>
            </form>
            </div>
        </div>
    </center>

    </section>
  </body>
 
</html>