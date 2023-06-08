<?php session_start(); ?>

<?php require_once('../inc/connection.php'); ?>

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
                <h2 class='editemail-title'>Change Email</h2>
                <form action='../inc/changeemail.php' method='POST'>
                    <label for='' name='current-email-label' id='current-email-label'>Current Email</label>
                    <input type='email' name='current-email-input' id='' id='current-email-input' value=" . $_SESSION['email'] . " readonly>
                    <label for='' name='new-email-label' id='new-email-label'>New Email</label>
                    <input type='email' name='new-email-input' id='new-email-input'>
                    <input type='submit' value='Change Email' name='change-email'>
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