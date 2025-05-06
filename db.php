<?php
$host = "localhost";
$user = "root";
$password = ""; // use your MySQL password here
$dbname = "blood_donation";

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
