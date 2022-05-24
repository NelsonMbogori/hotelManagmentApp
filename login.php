<?php
// include('configs/app.php');
include('codes/authentication.php');
//  include('includes/sidebar.php');
$auth->loggedin();



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
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
    <link rel="stylesheet" href="./styles/style_form.css" />

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
          <li><a class="no_underline" href="about.php">About</a></li>
          <li><a class="no_underline" href="contact.php">Contact</a></li>
          <li><a class="no_underline" href="gallery.php">gallery</a></li>

          <li><a class="no_underline" href="login.php">login</a></li>

        </ul>
      </nav>
    </section>
    <center>
        <div class="form_card_login" style=" height:25em; padding-top:3em">      
            <?php include('message.php'); ?>
                <form  method="POST" action ="">
                


                    <input type="hidden">
                    
                    <div class="form-control">
                        <label>email</label><br>
                        <input type="email" class="form_input"name="email" placeholder="email" id="email">
                        
                    </div>
                    <div class="form-control">
                        <label>password</label><br>
                        <input type="password" class="form_input"name="password" placeholder="password" id="password">
                        
                    </div>
                    
                    <button type="submit" class="button" name="login_btn"> login</button>
                </form>      
        </div>
    </center>
        </main>
    </div>
</body>
</html>
















































