<?php session_start(); ?>

<?php require_once('../inc/connection.php'); ?>

<?php

if (isset($_POST['change-address'])) {

    $user_id = $_SESSION['user_id'];
    $newaddressline1 = ($_POST['new-address-line1']);
    $newaddressline2 = ($_POST['new-address-line2']);
    $newaddressline3 = ($_POST['new-address-line3']);
    $query = "UPDATE user SET address_line_1 = '{$newaddressline1}', address_line_2 = '{$newaddressline2}', address_line_3 = '{$newaddressline3}'  WHERE user_id = '{$user_id}'";

    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully";

        $fetch_address_query = "SELECT * FROM user WHERE user_id = '{$user_id}'";

        $fetched_address = mysqli_query($conn, $fetch_address_query);

        $updated_address = mysqli_fetch_assoc($fetched_address);

        $_SESSION['address_line1'] = $updated_address['address_line_1'];
        $_SESSION['address_line2'] = $updated_address['address_line_2'];
        $_SESSION['address_line3'] = $updated_address['address_line_3'];

        header("location: ../useraccount/useraccount.php?user_id={$user['user_id']}");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
        header("location: ../useraccount/useraccount.php?user_id={$user['user_id']}");
    }
}

?>