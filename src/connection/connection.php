<?php
<<<<<<< HEAD
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "elite_tailoring";
=======
$servername = "localhost";
$username = "root";
$password = "";
$database = "elite_tailoring";
>>>>>>> e7631d0643d3e733d78cc21fd93081df0dab5250

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    //echo "Connected successfully";
