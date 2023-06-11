<?php require_once('../inc/connection.php'); ?>

<?php

if (isset($_POST['add-product-btn'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $product_color = $_POST['product_color'];
    $product_size = $_POST['product_size'];

    move_uploaded_file($_FILES["imagfile"]["tmp_name"], "../assets/productimages/" . $_FILES["imagfile"]["name"]);
    $file = "../assets/productimages/" . $_FILES["imagfile"]["name"];

    $sql = "INSERT INTO product(product_name,product_img_path,product_price,product_quantity,product_color,product_size)
            VALUES ('{$product_name}','{$file}','{$product_price}','{$product_quantity}','{$product_color}','{$product_size}')";

    if (!mysqli_query($conn, $sql)) {
        die('Error');
    } else {
        header("location: ../adminpanel/admindashboard.php");
    }
}


?>