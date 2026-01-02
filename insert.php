<?php
include "config.php";

$first = $_POST['first_name'];
$last  = $_POST['last_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$dob = $_POST['dob'];

$sql = "INSERT INTO students (first_name, last_name, mobile, email, dob)
        VALUES ('$first', '$last', '$mobile', '$email', '$dob')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
