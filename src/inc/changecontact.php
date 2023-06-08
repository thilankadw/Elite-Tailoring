<?php session_start(); ?>

<?php require_once('../inc/connection.php'); ?>

<?php

if (isset($_POST['change-contact'])) {

    $user_id = $_SESSION['user_id'];
    $newcontact = ($_POST['new-number-input']);
    $query = "UPDATE user SET contact_number = '{$newcontact}' WHERE user_id = '{$user_id}'";

    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully";

        $fetch_contact_query = "SELECT contact_number FROM user WHERE user_id = '{$user_id}'";

        $fetched_contact = mysqli_query($conn, $fetch_contact_query);

        $updated_contact = mysqli_fetch_assoc($fetched_contact);

        $_SESSION['contact_number'] = $updated_contact['contact_number'];

        header("location: ../useraccount/useraccount.php?user_id={$user['user_id']}");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
        header("location: ../useraccount/useraccount.php?user_id={$user['user_id']}");
    }
}

?>