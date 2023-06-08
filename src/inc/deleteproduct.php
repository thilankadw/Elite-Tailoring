<?php require_once('../inc/connection.php'); ?>
<?php

$product_id = $_GET['product_id'];

$sql = "DELETE FROM product WHERE product_id = $product_id";

if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully.";
    header("location: ../adminpanel/admindashboard.php");
} else {
    echo "Error deleting product: " . $conn->error;
}
