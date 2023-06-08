<?php require_once('../inc/connection.php'); ?>
<?php

$appointment_id = $_GET['appointment_id'];

$sql = "DELETE FROM appointments WHERE appointment_id = $appointment_id";

if ($conn->query($sql) === TRUE) {
    echo "Appointment deleted successfully.";
    header("location: ../adminpanel/admindashboard.php");
} else {
    echo "Error deleting product: " . $conn->error;
}
