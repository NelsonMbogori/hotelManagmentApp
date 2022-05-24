<?php
      $single = 5000;
      $double = 6000;
      $tripple = 7000;

      
      
      ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
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
          <li><a  class="no_underline" href="#">Home</a></li>
          <li><a class="no_underline" href="about.php">About</a></li>
          <li><a class="no_underline" href="#">Contact</a></li>
          <li><a class="no_underline" href="gallery.php">gallery</a></li>

          <li><a class="no_underline" href="login.php">login</a></li>

        </ul>
      </nav>
    </section>
    <section>
    <?php include('message.php'); ?>

      <div class="row">
        <div class="about">
        "A Luxury residential complex which features a unique choice of two bedroom and three bedroom apartments or single bedroom( furnished apartments and unfurnished apartments) and penthouses in westlands area.         </div>
      </div>
      </section>

      
    <section>
      <div class="row">
        <h1>Our rooms</h1>
      </div>
      <div class="row">
        <!-- Column One -->
        <div class="column">
          <div class="card"">
            <a class="no_underline" href="booking.php?type=single">
              
              <h3>single bedroom</h3>
              <h4><?php echo $single ?> per night</h4>
              <p>
              the best we have to offer. a spacious single bedroom

              </p>
            </a>
          </div>
        </div>
        <!-- Column Two -->
        <div class="column">
          <div class="card">
            <a class="no_underline" href="booking.php?type=double">
            
            <h3>double bedroom </h3>
            <h4><?php echo $double ?> per night</h4>
            <p>
              
              a comfortable 2 bedroom with nice lighting and ambience
            </p>
          </a>
          </div>
        </div>
        <!-- Column Three -->
        <div class="column">
          <div class="card">
            <a class="no_underline" href="booking.php?type=tripple">

            
            <h3>three bedroom</h3>
            <h4><?php echo $tripple ?> per night</h4>
            <p>
              a spacious three bedroom
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8393911163134!2d36.80779011475389!3d-1.2692453990742412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173bc187d017%3A0xf70043f085de5966!2sChiromo%20Ln%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1648539842687!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
    </section>
  </body>
</html>
