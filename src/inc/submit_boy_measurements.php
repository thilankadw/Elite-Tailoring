<?php session_start(); ?>
<?php require_once('../inc/connection.php'); ?>

<?php

$user_id = $_SESSION['user_id'];

if (isset($_POST['submit-male-form'])) {


    $height = $_POST['height'];
    $chest = $_POST['chest'];
    $waist = $_POST['waist'];
    $hips = $_POST['hips'];
    $shoulder_width = $_POST['shoulder-width'];
    $sleeve_length = $_POST['sleeve-length'];
    $shirt_lenght = $_POST['shirt-lenght'];
    $neck_circumference = $_POST['neck-circumference'];
    $back_width = $_POST['back-width'];
    $inseam = $_POST['inseam'];
    $outseam = $_POST['outseam'];

    $sql = "INSERT INTO boys_measurements(user_id,height,chest,waist,hips,shoulder_width,sleeve_length,shirt_length,neck,back_width,inseam,outseam)
            VALUES('{$user_id}','{$height}','{$chest}','{$waist}','{$hips}','{$shoulder_width}','{$sleeve_length}','{$shirt_lenght}','{$neck_circumference}','{$back_width}','{$inseam}','{$back_width}')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location: ../index/index.php?user_id={$user['user_id']}");
    }
}


?>
