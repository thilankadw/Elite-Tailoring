<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">

    <!--Font_Awesome library importing-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Importing Navbar -->
    <?php include "../header/header.php" ?>

    <?php

    if (isset($_SESSION['user_first_name'])) {

        echo "

    <div class='appointment-container'>

        <div class='appointment-title'>
            <h1>Book Your Appointment</h1>
        </div>

        <div class='appointment-form-container'>
            <form action='../inc/appointmentsubmit.php' method='POST'>
                <div class='appointment-form-fields'>
                    <label for='appointment-email'>Email :</label>
                    <input type='email' name='appointment-email' id='appointment-email'>
                </div>
                <div class='appointment-form-fields'>
                    <label for='appointment-contact-number'>Contact Number :</label>
                    <input type='text' name='appointment-contact-number' id='appointment-contact-number'>
                </div>
                <div class='appointment-form-fields'>
                    <label for='appointment-date'>Select Date :</label>
                    <input type='date' name='appointment-date' id='appointment-date'>
                </div>
                <div class='appointment-form-fields'>
                    <label for='appointment-time'>Select Time :</label>
                    <input type='time' name='appointment-time' id='appointment-time'>
                </div>
                <div class='appointment-form-fields'>
                    <input type='submit' name='appointment-submit' id='appointment-submit' value='Book a Tailor'>
                </div>
            </form>
        </div>



    </div>";
    } else {
        echo

        "<div class='user-account-login-msg'>
                <p>Please Login First</p>
        </div>";
    }

    ?>



    <!--Javascript-->
    <script src="../script.js"></script>

    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>




</body>

</html>