<?php



$amount = $_GET['user'];
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
    <link rel="stylesheet" href="css/stripe.css">

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
<div class="" style="width:40em;">
<center>
<form action="./charge.php" method="post" id="payment-form">
      <div class="form-row">
       <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name"style="width:40em;"><br>

       <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name"style="width:40em;"><br>
       <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address"style="width:40em;"><br>
       <input type="text" name="amount" class="form-control mb-3 StripeElement StripeElement--empty" value="<?php echo $amount;?> "placeholder="amount"style="width:40em; " ><br>

        <div id="card-element" class="form-control"style="width:33.5em;">
          <!-- a Stripe Element will be inserted here. -->
        </div>
        <!-- Used to display form errors -->
        <div id="card-errors" role="alert"></div>
      </div>

      <button>Submit Payment</button>
    </form>
</center>
</div>
</center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
</body>
</html>