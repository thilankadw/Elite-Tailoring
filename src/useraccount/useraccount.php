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

        echo

        "<div class='user-welcome'>
                <p class='user-welcome-msg'>Welcome " . $_SESSION['user_first_name'] . "</p>

                <div class='logout-btn-section'>
                    <form action='../inc/signout.php' name='logout-btn' method='POST'>
                        <input type='submit' value='Log Out'>
                    </form>
                </div>

            </div>

            <div class='useraccount-container'>

                <div class='user-details-container'>

                    <div class='user-details-names'>
                        <div class='user-details-first-name'>
                            <p class='user-detail-first-name-title'>First Name : </p>
                            <p class='user-detail-first-name-value'>" . $_SESSION['user_first_name'] . "</p>
                        </div>

                        <div class='user-details-last-name'>
                            <p class='user-detail-last-name-title'>Last Name : </p>
                            <p class='user-detail-last-name-value'>" . $_SESSION['user_last_name'] . "</p>
                        </div>
                    </div>

                    <div class='user-details-email'>
                        <form action='../modifyuser/editemail.php?user_id=" . $_SESSION['user_id'] . "' name='email-change' method='POST'>
                            <label class='user-detail-email-form-label'>Email : </label>
                            <input type='email' name='email-change' id='email-change' value='" . $_SESSION['email'] . "' readonly>
                            <input type='submit' value='Change Email'>
                        </form>
                    </div>

                    <div class='user-details-address'>
                        <form action='../modifyuser/editaddress.php?user_id=" . $_SESSION['user_id'] . "' name='address-change' method='POST'>
                            <label class='user-detail-address-form-label'>Address : </label>
                            <input type='text' name='address-line1-change' id='address-line1-change' value='" . $_SESSION['address_line1'] . "' readonly>
                            <input type='text' name='address-line2-change' id='address-line2-change' value='" . $_SESSION['address_line2'] . "' readonly>
                            <input type='text' name='address-line3-change' id='address-line3-change' value='" . $_SESSION['address_line3'] . "' readonly>
                            <input type='submit' value='Change Address'>
                        </form>
                    </div>

                    <div class='user-details-number'>
                        <form action='../modifyuser/editcontact.php?user_id=" . $_SESSION['user_id'] . "' name='contact-number-change' method='POST'>
                            <label class='user-detail-number-form-label'>Contact Number : </label>
                            <input type='text' name='contact-number-change' id='contact-number-change' value='" . $_SESSION['contact_number'] . "' readonly>
                            <input type='submit' value='Change Contact Number'>
                        </form>
                    </div>

                </div>

            </div>

            <div class='measurements-link'>

                <a href='../measurements/measurements.php'>Add Your Measurements</a>

            </div>
            
            ";
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