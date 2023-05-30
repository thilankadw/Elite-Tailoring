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
    
        <div class="dress-category-bar">
            <ul>
              <li><a href="menfashion.php" class="dress-category-bar-elements">Men</a></li>
              <li >|</li>
              <li><a href="womenfashion.php" class="dress-category-bar-elements">Women</a></li>
              <li>|</li>
              <li><a href="kidfashion,php" class="dress-category-bar-elements">Kid</a></li>
              <li>|</li>
              <li><a href="youngfashion.php" class="dress-category-bar-elements">Young</a></li>
            </ul>
        </div>
    
    <br><hr>
    <!--dress category Bar end-->

    
   <div id="banners-store">
      <div id="store-M">
        <p class="store-banner-txt">For Men,<br>New Arrivals</p>
        <a href="menfashion.php"> <button class="store-buttonMW">Purches NOW</button></a>
      </div>

      <div id="store-W">
        <p class="store-banner-txt">For Women,<br>New Arrivals</p>
        <a href="womenfashion.php"> <button class="store-buttonMW">Purches NOW</button></a>
      </div>

      <div id="store-K">
        <p class="store-banner-text-kid">For Kid,<br>New Arrivals</p>
        <a href="kidfashion.php"> <button class="store-buttonKid">Purches NOW</button></a>
      </div>

      <div id="store-Y">
         <p class="store-banner-text-young">For Youngers,<br>New Arrivals</p>
         <a href="youngfashion.php"> <button class="store-buttonYoung">Purches NOW</button></a>
      </div>
    </div> 

    



    
  </body>
</html>
