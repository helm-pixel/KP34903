<?php
$host = "localhost"; // XAMPP default
$username = "root"; // Default user
$password = ""; // No password by default
$dbname = "booking_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
