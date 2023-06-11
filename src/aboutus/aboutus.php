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

    <div class="aboutus-container">

        <div class="aboutus-title">
            <h1>Elite Tailoring</h1>
        </div>


        <div class="aboutus-content">
            <p id="welcome">Welcome to Elite Tailoring!<br></p>


            <p> Welcome to Elite Tailoring, where personalized tailoring meets unmatched craftsmanship. With years of experience and a skilled team, we create bespoke garments that reflect your style and personality.<br><br> Our meticulous attention to detail ensures each piece is a masterpiece. Alongside custom tailoring, our factory outlets offer ready-to-wear collections that combine style and affordability.<br><br> Our friendly staff provides exceptional customer service, and we prioritize sustainability and ethical practices.<br><br> Experience the pleasure of owning clothing that fits perfectly, enhances confidence, and lasts.Visit our showroom and discover the world of Elite Tailoring – where fashion dreams become a reality.

                <br><br>Welcome to the world of Elite Tailoring.
            </p>
        </div>

        <div class="aboutus-img">
            <img src="../assets/aboutus/Abboutus.jpg" alt="">
        </div>

    </div>


    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>


</body>

</html>