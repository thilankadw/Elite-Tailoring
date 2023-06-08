<?php session_start(); ?>

<?php require_once('../inc/connection.php'); ?>

<?php

if (isset($_POST['change-email'])) {

    $user_id = $_SESSION['user_id'];
    $newemail = ($_POST['new-email-input']);
    $query = "UPDATE user SET email = '{$newemail}' WHERE user_id = '{$user_id}'";

    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully";

        $fetch_email_query = "SELECT email FROM user WHERE user_id = '{$user_id}'";

        $fetched_email = mysqli_query($conn, $fetch_email_query);

        $updated_email = mysqli_fetch_assoc($fetched_email);

        $_SESSION['email'] = $updated_email['email'];

        header("location: ../useraccount/useraccount.php?user_id={$user['user_id']}");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
        header("location: ../useraccount/useraccount.php?user_id={$user['user_id']}");
    }
}

?>