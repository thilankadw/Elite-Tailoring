<!--Database Connection -->
<?php include "../connection/connection.php";


    $sql = "SELECT product_img_path FROM product"; 
    $result = mysqli_query($conn, $sql); 
    $image_path = mysqli_fetch_assoc($result)['product_img_path']; 


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
    <?php include "../navbar/navbar.php" ?>


    <div class="store-container">

        <div class="store-filter-section">

            <p class="store-filter-title">Filter Products</h1>

            <form method="POST" action="">
                <label for="color" id="select-color-title">Select Color:</label>
                
                <div class="form-colors">
                    <div class="filter-form-single-color">
                        <input type="radio" name="color">
                        <label for="">Red</label>
                    </div>
                </div>
                
                <input type="submit" value="Filter Colors">
            </form>

            <form method="POST" action="">
                <label for="color" id="select-color-title">Select Size:</label>

                <div class="form-sizes">
                    <div class="filter-form-single-size">
                        <input type="radio" name="color">
                        <label for="">M</label>
                    </div>
                    
                </div>

                <input type="submit" value="Filter Sizes">
            </form>

        </div>

        <div class="store-product-display">

            <div class="store-product-card">
                <div class="store-product-card-image"><img src="<?php echo $image_path ?>" alt=""></div>
                <div class="store-product-card-name">Ruched Pocket Cotton Poplin Elastic Waist Skirt</div>
                <div class="store-product-card-pricing">
                    <div class="store-product-card-price">$ 43.95</div>
                    <div class="store-product-card-cart">
                        <a href="../shoppingcart/shoppingcart.php"><i class="fa-regular fa-heart"></i></a>
                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                    </div>
                </div>
            </div>

            


        </div>

    </div>



    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>
  
  </body>
</html>