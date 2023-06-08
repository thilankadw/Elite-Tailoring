<?php session_start(); ?>

<!-- Database Connection -->
<?php include "../inc/connection.php"; ?>

<?php

if (isset($_GET['search'])) {
    $search_keyword = $_GET['search'];
    $query = "SELECT * FROM product WHERE product_name LIKE '%$search_keyword%'";
} else {
    $query = "SELECT * FROM product";
}

$results = mysqli_query($conn, $query);

$products = array();
while ($row = mysqli_fetch_assoc($results)) {
    $products[] = $row;
}

// Fetch colors
$select_colors = "SELECT * FROM colors";
$colors =  mysqli_query($conn, $select_colors);

$color_options = array();
while ($row = mysqli_fetch_assoc($colors)) {
    $color_options[] = $row;
}

// Fetch sizes
$select_sizes = "SELECT * FROM sizes";
$sizes =  mysqli_query($conn, $select_sizes);

$size_options = array();
while ($row = mysqli_fetch_assoc($sizes)) {
    $size_options[] = $row;
}
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

    <div class='store-container'>
        <div class='store-filter-section'>
            <p class='store-filter-title'>Filter Products</p>
            <form method='POST' action=''>
                <label for='color' id='select-color-title'>Select Color:</label>
                <div class='form-colors'>
                    <?php foreach ($color_options as $color) : ?>
                        <div class='filter-form-single-color'>
                            <input type='checkbox' name='colors[]' value='<?php echo $color["color_id"]; ?>'>
                            <label for=''><?php echo $color['color']; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <input type='submit' value='Filter Colors'>
            </form>

            <form method='POST' action=''>
                <label for='size' id='select-size-title'>Select Size:</label>
                <div class='form-sizes'>
                    <?php foreach ($size_options as $size) : ?>
                        <div class='filter-form-single-size'>
                            <input type='checkbox' name='sizes[]' value='<?php echo $size["size_id"]; ?>'>
                            <label for=''><?php echo $size['size']; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <input type='submit' value='Filter Sizes'>
            </form>
        </div>
        <div class='store-product-display'>
            <?php
            if (isset($_POST['colors']) && count($_POST['colors']) > 0) {
                $selectedColors = $_POST['colors'];
                $filteredProducts = array_filter($products, function ($product) use ($selectedColors) {
                    return in_array($product['product_color'], $selectedColors);
                });
                $products = $filteredProducts;
            }

            if (isset($_POST['sizes']) && count($_POST['sizes']) > 0) {
                $selectedSizes = $_POST['sizes'];
                $filteredProducts = array_filter($products, function ($product) use ($selectedSizes) {
                    return in_array($product['product_size'], $selectedSizes);
                });
                $products = $filteredProducts;
            }

            if (count($products) > 0) {
                foreach ($products as $product) {
                    echo "
                    <div class='store-product-card'>
                        <form action=''>
                            <a href='../productdetails/productdetails.php?product_id=" . $product['product_id'] . "'>
                                <div class='store-product-card-image'><img src='" . $product['product_img_path'] . "' alt='Product Image'></div>
                                <div class='store-product-card-name'>" . $product['product_name'] . "</div>
                            </a>
                            <div class='store-product-card-pricing'>
                                <div class='store-product-card-price'>$ " . $product['product_price'] . "</div>
                                <div class='store-product-card-cart'>
                                    <a href='../shoppingcart/shoppingcart.php?product_id=" . $product['product_id'] . "'><i class='fa-regular fa-heart'></i></a>
                                    <a href='../inc/submitwishlist.php?product_id=" . $product['product_id'] . "'><i class='fa-regular fa-heart'></i></a>
                                </div>
                            </div>
                        </form>
                    </div>";
                }
            } else {
                echo "<p>No products found.</p>";
            }
            ?>
        </div>
    </div>

    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>
</body>

</html>