<?php session_start(); ?>

<!--Database Connection -->
<?php include "../inc/connection.php";


$query = "SELECT * FROM wishlist";
$wishlist = mysqli_query($conn, $query);
$wishlist_products = mysqli_fetch_assoc($wishlist)['product__id'];

$query2 = "SELECT * FROM product WHERE product_id = '{$wishlist_products}'";
$result = mysqli_query($conn, $query2);



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

    <div class="wishlist-title">
        <h3>WISHLIST</h3>
    </div>

    <?php

    if (isset($_SESSION['user_first_name'])) {

        echo "

    <div class='wishlist-container'>";

        if ($result->num_rows > 0) {
            while ($products = $result->fetch_assoc()) {

                echo "

                <div class='store-product-card'>
                    <div class='store-product-card-image'><img src='" . $products['product_img_path'] . "' alt='Product Image'></div>
                    <div class='store-product-card-name'>" . $products['product_name'] . "</div>
                    <div class='store-product-card-pricing'>
                        <div class='store-product-card-price'>$ " . $products['product_price'] . "</div>
                    </div>
                </div>
            
            ";
            }
        } else {
            echo "
            <p>No Products for wishlist</p>";
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