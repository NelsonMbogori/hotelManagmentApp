<?php

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>feedback</title>
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
          <li><a  class="no_underline" href="./index.php">Home</a></li>
          <li><a class="no_underline" href="#">About</a></li>
          <li><a class="no_underline" href="contact.php">Contact</a></li>
          <li><a class="no_underline" href="gallery.php">gallery</a></li>
          <li><a class="no_underline" href="./login.php">login</a></li>

        </ul>
      </nav>
    </section>
        <center>
            <div class="ss" style ="width:40em;">

            <form action="https://formspree.io/f/xqknwopg" method="POST">
            <fieldset>
                <input type="text" class="form_input"name="name" placeholder="Enter your name" id="">
                <input type="email"class="form_input" name="_replyto" placeholder="Enter your email" id="">
                <textarea class="form_input_description" placeholder="type something" autofill="off"name = "description" rows = "10"  cols = "50"></textarea>
                <br><button class="button">Send</button>
                <!-- <input type="hidden" name="_confirmation" value="Thank you for contacting Us!"> -->
            </fieldset>
            </form>
            






            
            </div>
        </div>
    </center>
        </main>
</div>
</body>
</html>




