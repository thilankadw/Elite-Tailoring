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


    <div class="shoppingcart-container">

        <div class="view-aded-products">
            <div class="shoppingcart-title-line">
                <h6>Your Shopping Bag</h6>
                <p>1 items</p>
            </div>
            <div class="shopingcart-product-details-section">
                <div class="shoppingcart-product-image">
                    <img src="../assets/shoppingcart/cart-image.jpg" alt="">
                </div>
                <div class="shoppingcart-product-details">
                    <p>Ruched Pocket Cotton Poplin Elastic Waist Skirt</p>
                    <div class="shoppingcart-product-details-attributes">
                        <p class="attribute-name">Color :</p>
                        <p>Black</p>
                    </div>
                    <div class="shoppingcart-product-details-attributes">
                        <p class="attribute-name">Size :</p>
                        <p>Standard Size : XL-16</p>
                    </div>
                    <div class="shoppingcart-product-details-attributes">
                        <p class="attribute-name">Style :</p>
                        <p>As Shown</p>
                    </div>
                </div>
                <div class="shoppingcart-product-details-price">
                    <p class="attribute-name">Price</p>
                    <p>$43.95</p>
                </div>
                <div class="shoppingcart-product-details-quantity">
                    <p class="attribute-name">Quantity</p>
                    <p>1</p>
                </div>
            </div>
        </div>

        <div class="view-total-amount">

            <div class="shoppingcart-subtotal shoppingcart-pricing">
                <p class="shoppingcart-pricing-attribute-name">Sub Total :</p>
                <p>$43.95</p>
            </div>

            <div class="shoppingcart-shippingfee shoppingcart-pricing">
                <p class="shoppingcart-pricing-attribute-name">Shipping Fee :</p>
                <p>$12.67</p>
            </div>

            <div class="shoppingcart-total shoppingcart-pricing">
                <p class="shoppingcart-pricing-attribute-name">Total :</p>
                <p>$56.62</p>
            </div>

            <button type="submit"><a href="#">Proceed to Checkout</a></button>

        </div>

    </div>


    
    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>

      
  </body>
</html>