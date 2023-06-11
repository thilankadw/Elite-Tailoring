<?php session_start(); ?>

<!-- Database Connection -->
<?php include "../inc/connection.php";


$user_id = $_SESSION['user_id'];
$product_id = $_GET['product_id'];

$sql = "SELECT * FROM wishlist WHERE product__id =='{$product_id}'";
$result1 = mysqli_query($conn, $sql);

if ($result1) {
    header("location: ../store/store.php?user_id={$user['user_id']}");
} else {
    $query = "INSERT INTO wishlist(product__id,user_id) VALUES('{$product_id}','{$user_id}')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "success";
        header("location: ../wishlist/wishlist.php?user_id={$_SESSION['user_id']}");
    } else {
        echo mysqli_error($conn);
        header("location: ../store/store.php?user_id={$user['user_id']}");
    }
}



?>