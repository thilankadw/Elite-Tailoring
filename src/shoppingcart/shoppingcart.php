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


    <div class="shoppingcart-title">
        <h3>SHOPPING CART</h3>
    </div>

    <?php

    if (isset($_SESSION['user_first_name'])) {


        $user_id = $_SESSION['user_id'];

        $query = "SELECT * FROM shopping_cart WHERE user_id = '{$user_id}'";
        $result = mysqli_query($conn, $query);

        echo " <div class='shoppingcart-container'>";

        if ($result->num_rows > 0) {
            echo "<div class='shoppingcart-title-line'>
            <h6>Your Shopping Bag</h6>
            <p>" . $result->num_rows . " items</p>
        </div>";
            while ($products = $result->fetch_assoc()) {

                $shoppingcart_product_id = $products['product_id'];

                $sql = "SELECT * FROM product WHERE product_id = '{$shoppingcart_product_id}'";
                $product_details = mysqli_query($conn, $sql);
                $cart_products = mysqli_fetch_assoc($product_details);

                echo "

                <div class='view-aded-products'>
                    
                    <div class='shopingcart-product-details-section'>
                        <div class='shoppingcart-product-image'>
                        <a href='../productdetails/productdetails.php?product_id=" . $cart_products['product_id'] . "'><img src='" . $cart_products['product_img_path'] . "' alt=''></a>
                        </div>
                        <div class='shoppingcart-product-details'>
                            <p>Ruched Pocket Cotton Poplin Elastic Waist Skirt</p>
                            <div class='shoppingcart-product-details-attributes'>
                                <p class='attribute-name'>Color :</p>
                                <p>";


                $query_for_color = "SELECT * FROM colors WHERE color_id = '{$cart_products['product_color']}'";
                $result2 = mysqli_query($conn, $query_for_color);
                $color = mysqli_fetch_assoc($result2);

                echo $color['color'];

                echo "</p>
                            </div>
                            <div class='shoppingcart-product-details-attributes'>
                                <p class='attribute-name'>Size :</p>
                                <p>" . $cart_products['product_size'] . "</p>
                            </div>
                            <div class='shoppingcart-product-details-attributes'>
                                <p class='attribute-name'>Style :</p>
                                <p>As Shown</p>
                            </div>
                        </div>
                        <div class='shoppingcart-product-details-price'>
                            <p class='attribute-name'>Price</p>
                            <p>$ " . $cart_products['product_price'] . "</p>
                        </div>
                        <div class='shoppingcart-product-details-price'>
                            <p class='attribute-name'>Order Type</p>
                            <p>" . $products['order_type'] . "</p>
                        </div>
                        <div class='shoppingcart-product-details-quantity'>
                            <p class='attribute-name'>Quantity</p>
                            <p>" . $products['quantity'] . "</p>
                        </div>
                    </div>
                </div>
            ";
            }
            /*  echo "
            <div class='view-total-amount'>";

            $subtotal = 0;

            while ($products = $result->fetch_assoc()) {
                $shoppingcart_product_id = $products['product_id'];
                $sql = "SELECT * FROM product WHERE product_id = '{$shoppingcart_product_id}'";
                $product_details = mysqli_query($conn, $sql);
                $cart_product = mysqli_fetch_assoc($product_details);
                $subtotal += $cart_product['product_price'];
            }

            echo "<div class='shoppingcart-subtotal shoppingcart-pricing'>
                        <p class='shoppingcart-pricing-attribute-name'>Sub Total : " . $subtotal . "</p>
                        <p>";



            echo "</p>
                    </div>

                    <div class='shoppingcart-shippingfee shoppingcart-pricing'>
                        <p class='shoppingcart-pricing-attribute-name'>Shipping Fee :</p>
                        <p>$12.67</p>
                    </div>";

            $total = $subtotal + 12.67;

            echo "<div class='shoppingcart-total shoppingcart-pricing'>
                        <p class='shoppingcart-pricing-attribute-name'>Total : </p>
                        <p>" . $total . "</p>
                    </div>

                    <button type='submit'><a href='../inc/submitorders.php'>Proceed to Checkout</a></button>

                </div>";*/
        } else {
            echo "
        <p>No Products for Shopping Cart</p>";
        }
        echo "
</div>";
    } else {
        echo "<div class='user-account-login-msg'>
            <p>Please Login First</p>
        </div>";
    }
    ?>





    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>


</body>

</html>