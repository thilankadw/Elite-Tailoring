<?php session_start(); ?>
<?php require_once('../inc/connection.php'); ?>
<?php require_once('../inc/functions.php'); ?>

<?php

if (isset($_POST['register-btn'])) {
    /*
    if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['address-line1']) || empty($_POST['contact-number']) || empty($_POST['password'])) {

        echo '<script>';
        echo 'alert("Please fill in all fields.");';
        echo 'window.location.href = "../index/index.php";';
        echo '</script>';
        exit;
    }*/


    $firstname = ($_POST['firstname']);
    $lastname = ($_POST['lastname']);
    $email = ($_POST['email']);
    $gender = ($_POST['gender']);
    $addressline1 = ($_POST['address-line1']);
    $addressline2 = ($_POST['address-line2']);
    $addressline3 = ($_POST['address-line3']);
    $contactnumber = ($_POST['contact-number']);
    $password = $_POST['password'];

    $check_user_query = "SELECT * FROM user WHERE email = '{$email}' OR contact_number = '{$contactnumber}'";

    $check_result = mysqli_query($conn, $check_user_query);

    if ($check_result) {

        if (mysqli_num_rows($check_result) == 1) {
            header("location: ../index/index.php");
        } else {
            $query = "INSERT INTO user(first_name,last_name,email,gender,address_line_1,address_line_2,address_line_3,contact_number,password)
                VALUES ('{$firstname}','{$lastname}','{$email}','{$gender}','{$addressline1}','{$addressline2}','{$addressline3}','{$contactnumber}','{$password}')";

            $result = mysqli_query($conn, $query);

            if ($result) {

                $query2 = "SELECT * FROM user WHERE email = '{$email}'";
                $results = mysqli_query($conn, $check_user_query);
                $fetched_results = mysqli_fetch_assoc($results);


                $_SESSION['user_id'] = $fetched_results['user_id'];
                $_SESSION['user_first_name'] = $firstname;
                $_SESSION['user_last_name'] = $lastname;
                $_SESSION['email'] = $email;
                $_SESSION['gender'] = $gender;
                $_SESSION['address_line1'] = $addressline1;
                $_SESSION['address_line2'] = $addressline2;
                $_SESSION['address_line3'] = $addressline3;
                $_SESSION['contact_number'] = $contactnumber;

                header("location: ../index/index.php?user_id={$_SESSION['user_id']}");
            } else {
                echo mysqli_error($conn);
                header("location: ../index/index.php");
            }
        }
    } else {
    }
}

?>