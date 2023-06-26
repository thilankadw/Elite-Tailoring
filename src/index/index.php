<?php session_start(); ?>

<!--Database Connection -->
<?php include "../inc/connection.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">

  <!--Font_Awesome library importing-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <!-- Importing Navbar -->
  <?php include "../header/header.php" ?>

  <div class="slideshow-container">

    <div class="mySlides fade">

      <img src="../assets/index/banner25.png" style="width:100%">

    </div>

    <div class="mySlides fade">

      <img src="../assets/index/index-page-banner1.jpg" style="width:100%">

    </div>
    <div class="mySlides fade">

      <img src="../assets/index/index-page-banner2.jpg" style="width:100%">

    </div>
    <div class="mySlides fade">

      <img src="../assets/index/index-page-banner3.jpg" style="width:100%">

    </div>
    

  </div>


  <div>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>


  <div class="home-navigations">
    <div class="home-navigation-card">
      <div class="home-navigation-card-img">
        <img src="../assets/index/index-navigation-img-2.jpg" alt="">
      </div>
      <div class="home-navigation-card-img-link">
        <a href="../store/store.php" id="visit-store-home">Visit Store</a>
      </div>
      <div class="home-navigation-card-text"></div>
    </div>

    <div class="home-navigation-card">
      <div class="home-navigation-card-img">
        <img src="../assets/index/index-navigation-img-1.jpg" alt="">
      </div>
      <div class="home-navigation-card-img-link">
        <a href="../appointments/appointments.php">Appointments</a>
      </div>
      <div class="home-navigation-card-text"></div>
    </div>

    <div class="home-navigation-card">
      <div class="home-navigation-card-img">
        <img src="../assets/index/index-navigation-img-3.jpg" alt="">
      </div>
      <div class="home-navigation-card-img-link">
        <a href="../measurements/measurements.php">Add Your Measurements</a>
      </div>
      <div class="home-navigation-card-text"></div>
    </div>
  </div>

  </div><br><br>
  <div class="Slideshow-container">
    <div class="MYSlides Fade">

      <img src="../assets/index/banner3.jpg" style="width:100%">

    </div>
    <div class="MYSlides Fade">

      <img src="../assets/index/banner4.jpg" style="width:100%">

    </div>

  </div>

  <div>
    <span class="circle"></span>
    <span class="circle"></span>
    <span class="circle"></span>
    <span class="circle"></span>
  </div>


  



  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>


  <!-- Importing Footer -->
  <?php include "../footer/footer.php" ?>

</body>

</html>