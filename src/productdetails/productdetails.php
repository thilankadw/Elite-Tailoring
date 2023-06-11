<?php session_start(); ?>

<!--Database Connection -->
<?php include "../inc/connection.php"; ?>

<?php

$product_id = $_GET['product_id'];
$_SESSION['selected_product'] = $product_id;


$query = "SELECT * FROM product WHERE product_id = '{$product_id}'";
$row = mysqli_query($conn, $query);
$product_details = mysqli_fetch_assoc($row);

?>


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


    <div class="product-details-container">

        <div class="product-details-image">
            <img src="<?php echo $product_details['product_img_path'] ?>" alt="">
        </div>

        <div class="product-details-content">
            <div class="product-details-content-name">
                <h4><?php echo $product_details['product_name'] ?></h4>
            </div>
            <div class="product-details-content-price">
                <p class="product-details-content-price-price">$ <?php echo $product_details['product_price'] ?></p>
            </div>
            <div class="product-details-content-colors">
                <p class='product-details-content-colors-title'>Color : <span class='product-details-content-colors-name'>Blue</span></p>
            </div>

            <div id="product-details-content-sizes">
                <form action="../inc/submitshoppingcart.php?product_id = <?php echo $product_id; ?>" method="POST">
                    <input type="radio" name="type" value="custom">
                    <label for="">Custom Size</label>
                    <input type="radio" name="type" value="Standard">
                    <label for="" id="standard-label">Standard Size</label>

                    <input type="number" name="quantity" value="1">

                    <input type="submit" value="ADD TO CART" name="add_to_cart">


            </div>

            <div id="product-details-content-custom-sizes">
                <p>Don't you have added your measurements?</p>
                <a href="../measurements/measurements.php">ADD YOUR MEASUREMENTS</a>
            </div>

            <div class="product-details-content-addtocart">
                <!--<a id="product-details-content-addtocart-addtocart" href="../inc/submitshoppingcart.php?product_id=<?php $product_id ?>">ADD TO CART</a>
                <a href="../inc/submitorders.php?product_id = <?php echo $product_id; ?>" class="product-details-content-addtocart-checkout">Proceed to Checkout</a>-->
                <input type="submit" value="Proceed to Checkout" name="submit-order" class="product-details-content-addtocart-checkout">
            </div>
            </form>

        </div>

    </div>


    <!--Javascript-->
    <script src="../script.js"></script>

    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>



</body>

</html>