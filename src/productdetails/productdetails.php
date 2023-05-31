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
    <?php include "../navbar/navbar.php" ?>


    <div class="product-details-container">

        <div class="product-details-image">
            <img src="../assets/customization/customizationguideimg-2.jpg" alt="">
        </div>

        <div class="product-details-content">
            <div class="product-details-content-name">
                <h4>Ruched Pocket Cotton Poplin Elastic Waist Skirt</h4>
            </div>
            <div class="product-details-content-price">
                <p class="product-details-content-price-price">$ 43.95</p>
            </div>
            <div class="product-details-content-colors">
                <form action="">
                    <input type="radio" name="color">
                    <label for="">Red</label>

                    <input type="submit" value="Select Color">
                </form>
            </div>

            <div class="product-details-order-type">
                <button id="standard-size">Standard Size</button>
                <button id="custom-size">Custom Size</button>
            </div>

            <div class="product-details-content-sizes">
                <form action="">
                    <input type="radio" name="size">
                    <label for="">S</label>

                    <input type="submit" value="Select Size">
                </form>
            </div>

            <div class="product-details-custom-sizes">
                <p>Don't you have added your measurements?</p>
                <a href="#">ADD YOUR MEASUREMENTS</a>
            </div>

            <div class="product-details-content-addtocart">
                <button>ADD TO CART</button>
            </div>

        </div>

    </div>


    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>

    <!--Javascript-->
    <script src="../script.js"></script>
  
  </body>
</html>