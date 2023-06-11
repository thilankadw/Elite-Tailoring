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


    <div class='measurements-page-container'>

        <div class='measurements-page-title'>
            <h1>Add Your Measurements</h1>
        </div>


        <?php

        if (isset($_SESSION['user_first_name'])) {

            if ($_SESSION['gender'] == "Male") {

                echo "

        <div id='measurements-form-male'>
            <form action='../inc/submit_boy_measurements.php' method='POST'>

            <div class='measurements-form-element'>
                <label for='height'>Height</label>
                <input type='text' name='height' id='height'>
            </div>
            <div class='measurements-form-element'>
                <label for='chest'>Chest</label>
                <input type='text' name='chest' id='chest'>
            </div>
            <div class='measurements-form-element'>
                <label for='waist'>Waist</label>
                <input type='text' name='waist' id='waist'>
            </div>
            <div class='measurements-form-element'>
                <label for='hips'>Hips</label>
                <input type='text' name='hips' id='hips'>
            </div>
            <div class='measurements-form-element'>
                <label for='shoulder-width'>Shoulder Width</label>
                <input type='text' name='shoulder-width' id='soulder-width'>
            </div>
            <div class='measurements-form-element'>
                <label for='sleeve-length'>Sleeve Length</label>
                <input type='text' name='sleeve-length' id='sleeve-length'>
            </div>
            <div class='measurements-form-element'>
                <label for='shirt-lenght'>Shirt Length</label>
                <input type='text' name='shirt-lenght' id='shirt-lenght'>
            </div>
            <div class='measurements-form-element'>
                <label for='neck-circumference'>Neck Circumference</label>
                <input type='text' name='neck-circumference' id='neck-circumference'>
            </div>
            <div class='measurements-form-element'>
                <label for='back-width'>Back Width</label>
                <input type='text' name='back-width' id='back-width'>
            </div>
            <div class='measurements-form-element'>
                <label for='inseam'>Inseam</label>
                <input type='text' name='inseam' id='inseam'>
            </div>
            <div class='measurements-form-element'>
                <label for='outseam'>Outseam</label>
                <input type='text' name='outseam' id='outseam'>
            </div>
            <div class='measurements-form-element'>
                <input type='submit' name='submit-male-form' id='submit-male-form' value='Submit'>
            </div>
        </form>
            </div>";
            }

            if ($_SESSION['gender'] == "Female") {

                echo "
 

        <div id='measurements-form-female'>
            <form action='../inc/submit_girl_measurements.php' method='POST'>

            <div class='measurements-form-element'>
                <label for='height'>Height</label>
                <input type='text' name='height' id='height'>
            </div>
            <div class='measurements-form-element'>
                <label for='bust'>Bust</label>
                <input type='text' name='bust' id='bust'>
            </div>
            <div class='measurements-form-element'>
                <label for='under-bust'>Underbust</label>
                <input type='text' name='under-bust' id='under-bust'>
            </div>
            <div class='measurements-form-element'>
                <label for='waist'>Waist</label>
                <input type='text' name='waist' id='waist'>
            </div>
            <div class='measurements-form-element'>
                <label for='hips'>Hips</label>
                <input type='text' name='hips' id='hips'>
            </div>
            <div class='measurements-form-element'>
                <label for='waist-to-hip'>Waist to hip</label>
                <input type='text' name='waist-to-hip' id='waist-to-hip'>
            </div>
            <div class='measurements-form-element'>
                <label for='waist-to-floor'>Waist to floor</label>
                <input type='text' name='waist-to-floor' id='waist-to-floor'>
            </div>
            <div class='measurements-form-element'>
                <label for='shoulder-width'>Shoulder Width</label>
                <input type='text' name='shoulder-width' id='shoulder-width'>
            </div>
            <div class='measurements-form-element'>
                <label for='armhole'>Armhole</label>
                <input type='text' name='armhole' id='armhole'>
            </div>
            <div class='measurements-form-element'>
                <label for='sleeve-length'>Sleeve length</label>
                <input type='text' name='sleeve-length' id='sleeve-length'>
            </div>
            <div class='measurements-form-element'>
                <label for='neck-circumference'>Neck Circumference</label>
                <input type='text' name='neck-circumference' id='neck-circumference'>
            </div>
            <div class='measurements-form-element'>
                <label for='back-width'>Back Width</label>
                <input type='text' name='back-width' id='back-width'>
            </div>
            <div class='measurements-form-element'>
                <label for='dress-length'>Dress Length</label>
                <input type='text' name='dress-length' id='dress-length'>
            </div>
            <div class='measurements-form-element'>
                <input type='submit' name='submit-girl-form' id='submit-girl-form' value='Submit'>
            </div>
            </form>
        </div>";
            }
        } else {
            echo

            "<div class='user-account-login-msg'>
                        <p>Please Login First</p>
                </div>";
        }



        ?>

    </div>




    <!-- Importing Footer -->
    <?php include "../footer/footer.php" ?>


</body>

</html>