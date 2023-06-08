<?php session_start(); ?>

<?php

$ordertype = $_POST['type'];

$_SESSION['ordertype'] = $ordertype;

$product_id = $_SESSION['product_id'];






?>