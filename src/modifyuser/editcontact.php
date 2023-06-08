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
                <h2 class='editemail-title'>Change Contact Number</h2>
                <form action='../inc/changecontact.php' method='POST'>
                    <label for='' name='current-number-label' id='current-number-label'>Current Contact Number</label>
                    <input type='text' name='current-number-input' id='' id='current-number-input'value=" . $_SESSION['contact_number'] . " readonly>
                    <label for='' name='new-number-label' id='new-number-label'>New Contact Number</label>
                    <input type='text' name='new-number-input' id='new-number-input'>
                    <input type='submit' value='Change Contact Number' name='change-contact'>
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