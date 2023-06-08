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
    if (isset($_SESSION['user_id'])) {

        echo "

            <div class='editemail-container'>
                <h2 class='editemail-title'>Change Address</h2>
                <form action='../inc/changeaddress.php'method='POST'>
                    <label for='' name='current-address-line1-label' id='current-address-line1-label'>Current Address Line 1</label>
                    <input type='text' name='current-address-line1' id='current-address-line1' value=" . $_SESSION['address_line1'] . " readonly>
                    <label for='' name='current-address-line2-label' id='current-address-line2-label'>Current Address Line 2</label>
                    <input type='text' name='current-address-line2' id='current-address-line2' value=" . $_SESSION['address_line2'] . " readonly>
                    <label for='' name='current-address-line3-label' id='current-address-line3-label'>Current Address Line 3</label>
                    <input type='text' name='current-address-line3' id='current-address-line3' value=" . $_SESSION['address_line3'] . " readonly>
                    <label for='' name='new-address-line1-label' id='new-address-line1-label'>New Address Line 1</label>
                    <input type='text' name='new-address-line1' id='new-address-line1'>
                    <label for='' name='new-address-line2-label' id='new-address-line2-label'>New Address Line 2</label>
                    <input type='text' name='new-address-line2' id='new-address-line2'>
                    <label for='' name='new-address-line3-label' id='new-address-line3-label'>New Address Line 3</label>
                    <input type='text' name='new-address-line3' id='new-address-line3'>
                    <input type='submit' value='Change Address' name='change-address'>
                </form>
            </div>";
    }
    ?>

    <!--Javascript-->
    <script src="../script.js"></script>

    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>

</body>

</html>