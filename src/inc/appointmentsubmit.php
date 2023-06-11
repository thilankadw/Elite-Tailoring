<?php session_start(); ?>

<!-- Database Connection -->
<?php include "../inc/connection.php"; ?>

<?php

if (isset($_POST['appointment-submit'])) {

    if (empty($_POST['appointment-email']) || empty($_POST['appointment-contact-number']) || empty($_POST['appointment-date']) || empty($_POST['appointment-time'])) {
        // Step 3: Perform the redirection with alert message
        echo '<script>';
        echo 'alert("Please fill in all fields.");';
        echo 'window.location.href = "../appointments/appointments.php";';
        echo '</script>';
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $email = $_POST['appointment-email'];
    $contact_number = $_POST['appointment-contact-number'];
    $date = $_POST['appointment-date'];
    $time = $_POST['appointment-time'];
}

$query = "INSERT INTO appointments(user_id,email,contact_number,date,time)
                VALUES ('{$user_id}','{$email}','{$contact_number}','{$date}','{$time}')";

$result = mysqli_query($conn, $query);

if ($result) {

    echo "<script>alert('Success');</script>";

    header("location: ../useraccount/useraccount.php?user_id={$_SESSION['user_id']}");
} else {
    echo mysqli_error($conn);
    header("location: ../appointments/appointments.php?user_id={$_SESSION['user_id']}");
}

?>