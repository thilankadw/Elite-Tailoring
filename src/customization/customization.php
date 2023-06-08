<?php session_start(); ?>
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


    <div class="customization-guide-container">

        <div class="customization-guide-title">
            <h1>How Customization Works</h1>
        </div>

        <div class="customization-guide-contetnt">
            <div class="customization-guide-images left">
                <img src="../assets/customization/customizationguideimg-1.jpg" alt="" id="customizationguideimg-1">
            </div>
            <div class="customization-guide-content-text right">
                <h3>1. Pick your favourite style.</h3>
                <p>Choose one (or more) of our dresses, tops, jumpers and pants.</p>
                <a href="../store/store.php">SHOP NOW</a>
            </div>
        </div>

        <div class="customization-guide-contetnt">
            <div class="customization-guide-content-text left">
                <h3>2. Select your size and<br>add your measurements.</h3>
                <p>Fill your measurements table. This ensures we give you a great fit.</p>
                <a href="../measurements/measurements.php">ADD MEASUREMENTS</a>
            </div>
            <div class="customization-guide-images right">
                <img src="../assets/customization/customizationguideimg-2.jpg" alt="" id="customizationguideimg-1">
            </div>
        </div>

        <div class="customization-guide-contetnt">
            <div class="customization-guide-images left">
                <img src="../assets/customization/customizationguideimg-3.jpg" alt="" id="customizationguideimg-1">
            </div>
            <div class="customization-guide-content-text right">
                <h3>3. Customize your design.</h3>
                <p>You can customize your design as your choice.</p>
                <a href="../store/store.php">CUSTOMIZE DESIGNS</a>
            </div>
        </div>

        <div class="customization-guide-contetnt">
            <div class="customization-guide-content-text left">
                <h3>4. If you have any issues of<br>our designs contact us.</h3>
                <p>Contact our customer care section for all your issues.</p>
                <a href="../aboutus/aboutus.php">CONTACT US</a>
            </div>
            <div class="customization-guide-images right">
                <img src="../assets/customization/customizationguideimg-4.jpg" alt="" id="customizationguideimg-1">
            </div>
        </div>

        <div class="customization-guide-footer-image">
            <img src="../assets/customization/customizationguideimg-5.jpg" alt="">
        </div>

    </div>


    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>


</body>

</html>