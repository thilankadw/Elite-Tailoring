<?php session_start(); ?>
<?php require_once('../inc/connection.php'); ?>

<?php

if (isset($_POST['btn-login'])) {

    $email = $_POST['email-login'];
    $password = $_POST['password-login'];

    $query = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}'";

    $result = mysqli_query($conn, $query);

    if ($result) {

        if (mysqli_num_rows($result) == 1) {

            $user = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_first_name'] = $user['first_name'];
            $_SESSION['user_last_name'] = $user['last_name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['gender'] = $user['gender'];
            $_SESSION['address_line1'] = $user['address_line_1'];
            $_SESSION['address_line2'] = $user['address_line_2'];
            $_SESSION['address_line3'] = $user['address_line_3'];
            $_SESSION['contact_number'] = $user['contact_number'];

            header("location: ../index/index.php?user_id={$user['user_id']}");
        } else {

            header("location: ../index/index.php?user_id={$user['user_id']}");
        }
    }
}

?>