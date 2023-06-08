<?php session_start(); ?>

<!--Database Connection -->
<?php include "../inc/connection.php"; ?>

<?php

if (empty($_POST['type'])) {
    echo '<script>';
    echo 'alert("Please Select Order Type.");';
    echo 'window.location.href = "../index/index.php";';
    echo '</script>';
    exit;
}

$product_id = $_SESSION['selected_product'];
$ordertype = $_POST['type'];
$quantity = $_POST['quantity'];

$query = "INSERT INTO shopping_cart(product_id,order_type,quantity) VALUES('{$product_id}', '{$ordertype}', '{$quantity}')";

$result = mysqli_query($conn, $query);

if ($result) {
    header("location: ../shoppingcart/shoppingcart.php");
}




?>