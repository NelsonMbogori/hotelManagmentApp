


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>gallery</title>
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
    <link rel="stylesheet" href="./styles/gallery.css" />
   

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
          <li><a class="no_underline" href="#">Contact</a></li>
          <li><a class="no_underline" href="login.php">login</a></li>
          <li><a class="no_underline" href="gallery.php">gallery</a></li>

          <li><a class="no_underline" href="feedback.php">feedback</a></li>


        </ul>
      </nav>
    </section>
  <center>

  <p> single bedrooms </p>
  <div class="carousel-wrapper">
    <span id="item-1"></span>
    <span id="item-2"></span>
    <span id="item-3"></span>
    <div class="carousel-item item-1">
      <a href="#item-3" class="arrow-prev arrow"></a>
      <a href="#item-2" class="arrow-next arrow"></a>
    </div>

    <div class="carousel-item item-2">
      <a href="#item-1" class="arrow-prev arrow"></a>
      <a href="#item-3" class="arrow-next arrow"></a>
    </div>

    <div class="carousel-item item-3">
      <a href="#item-2" class="arrow-prev arrow"></a>
      <a href="#item-1" class="arrow-next arrow"></a>
    </div>

  </div>
  <p> double bedrooms </p>
  <div class="carousel-wrapper">
    <span id="item-4"></span>
    <span id="item-5"></span>
    <span id="item-6"></span>
    <div class="carousel-item item-4">
      <a href="#item-6" class="arrow-prev arrow"></a>
      <a href="#item-5" class="arrow-next arrow"></a>
    </div>

    <div class="carousel-item item-5">
      <a href="#item-4" class="arrow-prev arrow"></a>
      <a href="#item-6" class="arrow-next arrow"></a>
    </div>

    <div class="carousel-item item-6">
      <a href="#item-5" class="arrow-prev arrow"></a>
      <a href="#item-4" class="arrow-next arrow"></a>
    </div>

  </div>
  <p> three bedrooms </p>
  <div class="carousel-wrapper">
    <span id="item-7"></span>
    <span id="item-8"></span>
    <span id="item-9"></span>
    <div class="carousel-item item-7">
      <a href="#item-9" class="arrow-prev arrow"></a>
      <a href="#item-8" class="arrow-next arrow"></a>
    </div>

    <div class="carousel-item item-8">
      <a href="#item-7" class="arrow-prev arrow"></a>
      <a href="#item-9" class="arrow-next arrow"></a>
    </div>

    <div class="carousel-item item-9">
      <a href="#item-8" class="arrow-prev arrow"></a>
      <a href="#item-7" class="arrow-next arrow"></a>
    </div>

  </div>
  </center>

</body>
</html>