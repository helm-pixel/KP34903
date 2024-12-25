<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $booking_date = $_POST['booking_date'];
    $category = $_POST['category'];

    $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, booking_date, category) VALUES (?, ?, ?, ?, ?)");    
    $stmt->bind_param("sssss", $name, $email, $phone, $booking_date, $category);

    if ($stmt->execute()) {
        header("Location: test2.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
