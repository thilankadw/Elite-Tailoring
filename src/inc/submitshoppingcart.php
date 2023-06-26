<?php session_start(); ?>

<!--Database Connection -->
<?php include "../inc/connection.php"; ?>

<?php

if (isset($_SESSION['user_id'])) {

    $product_id = $_SESSION['selected_product'];

    if (empty($_POST['type'])) {
        echo '<script>';
        echo 'alert("Please Select Order Type.");';
        echo 'window.location.href = "../productdetails/productdetails.php?product_id=' . $product_id . '";';
        echo '</script>';
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $ordertype = $_POST['type'];
    $quantity = $_POST['quantity'];

    if (isset($_POST['add_to_cart'])) {
        $check_product_query = "SELECT * FROM shopping_cart WHERE product_id = '{$product_id}'";
        $check_result = mysqli_query($conn, $check_product_query);

        if ($check_result) {

            if (mysqli_num_rows($check_result) == 1) {
                header("location: ../store/store.php");
            } else {
                $query = "INSERT INTO shopping_cart(user_id,product_id,order_type,quantity) VALUES('{$user_id}','{$product_id}', '{$ordertype}', '{$quantity}')";

                $result = mysqli_query($conn, $query);

                if ($result) {
                    header("location: ../shoppingcart/shoppingcart.php");
                }
            }
        }
    }
    if (isset($_POST['submit-order'])) {
        $sql = "INSERT INTO orders(user_id,product_id,order_type,quantity)VALUES('{$user_id}','{$product_id}','{$ordertype}','{$quantity}')";
        $results = mysqli_query($conn, $sql);
        if ($results) {
            echo '<script>';
            echo 'alert("Order placed successfully!!!<br>You can do your payment when the order is delivered...");';
            echo 'window.location.href = "../index/index.php?user_id=' . $user_id . '"';
            echo '</script>';
            exit;
        }
    }
} else {
    echo '<script>';
    echo 'alert("Please Login First.");';
    echo 'window.location.href = "../index/index.php";';
    echo '</script>';
    exit;
}












?>