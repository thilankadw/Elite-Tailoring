<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elite Tailoring Store</title>
    <link rel="stylesheet" href="../elite_style.css" />
    <script src="../script.js"></script>
  
  </head>
  <body>
    <div>
      <!--Navigation Bar Start-->
        
      <?php include 'navbar.php';?>
        
      <!--Navigation Bar End-->
    </div>
   
    <!--dress category Bar Start-->
    
        <div class="dress-category-bars">
            <ul>
              <li><a href="menfashion.php" class="dress-category-bars-elements">Men</a></li>
              <li >|</li>
              <li><a href="womenfashion.php" class="dress-category-bars-elements">Women</a></li>
              <li>|</li>
              <li><a href="kidfashion.php" class="dress-category-bars-elements">Kid</a></li>
              <li>|</li>
              <li><a href="#" class="dress-category-bars-elements">Young</a></li>
            </ul>
        </div>
    
    <br><hr>
    <!--dress category Bar end-->

    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../Elite-Tailoring/assets/Store/storeY.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../Elite-Tailoring/assets/Store/storeK.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../Elite-Tailoring/assets/Store/storeM.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


    <?php
        include 'footer.php';
    ?>

    

    

    
  </body>
</html>
