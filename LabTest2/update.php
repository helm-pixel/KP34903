<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $booking_date = $_POST['booking_date'];.
    $category=$_POST['category'];

    $stmt = $conn->prepare("UPDATE bookings SET name=?, email=?, phone=?, booking_date=?, category=? WHERE id=?");
    $stmt->bind_param("ssssi", $name, $email, $phone, $booking_date, $category, $id);

    if ($stmt->execute()) {
        header("Location: test2.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
