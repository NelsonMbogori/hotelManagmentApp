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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Features Section</title>
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
    <link rel="stylesheet" href="../styles/style_home.css" />
    <link rel="stylesheet" href="./styles/style_form.css">

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
          <li><a  class="no_underline" href="../index.php">Home</a></li>
          <li><a class="no_underline" href="#">About</a></li>
          <li><a class="no_underline" href="#">Contact</a></li>
          <li><a class="no_underline" href="../gallery.php">gallery</a></li>

          <li><a class="no_underline" href="../login.php">login</a></li>

        </ul>
      </nav>
    </section>
        <center>
        <div >
          <h2>Thank you for booking <?php echo $product; ?></h2>
          
          <p>Your transaction ID is <?php echo $tid; ?></p>
          <p><a href="../index.php" >Go Back</a></p>
        </div>
         </center>
        </main>
    </div>
</body>
</html>




















