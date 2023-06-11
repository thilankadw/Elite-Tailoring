<?php session_start(); ?>
<?php require_once('../inc/connection.php'); ?>

<?php

$user_id = $_SESSION['user_id'];

if (isset($_POST['submit-girl-form'])) {


    $height = $_POST['height'];
    $bust = $_POST['bust'];
    $under_bust = $_POST['under-bust'];
    $waist = $_POST['waist'];
    $hips = $_POST['hips'];
    $waist_to_hip = $_POST['waist-to-hip'];
    $waist_to_floor = $_POST['waist-to-floor'];
    $shoulder_width = $_POST['shoulder-width'];
    $armhole = $_POST['armhole'];
    $sleeve_length = $_POST['sleeve-length'];
    $neck_circumference = $_POST['neck-circumference'];
    $back_width = $_POST['back-width'];
    $dress_length = $_POST['dress-length'];

    $sql = "INSERT INTO girl_measurements(user_id,height,bust,underbust,waist,hips,waist_to_hips,waist_to_floor,shoulder_width,armhole,sleeve_length,neck,back_width,dress_length)
            VALUES('{$user_id}','{$height}','{$bust}','{$under_bust}','{$waist}','{$hips}','{$waist_to_hip}','{$waist_to_floor}','{$shoulder_width}','{$armhole}','{$sleeve_length}','{$neck_circumference}','{$back_width}','{$dress_length}')";
    $result = mysqli_query($conn, $sql);
}


?>
