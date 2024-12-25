<?php
include 'db_connection.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM bookings WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Booking</title>
</head>
<body>
    <h1>Edit Booking</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $row['name'] ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $row['email'] ?>" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?= $row['phone'] ?>">
        <br>
        <label for="category">Category</label>
        <select name="category" id="category">
            <option value="standard">Standard</option>
            <option value="gold">Gold</option>
            <option value="platinum">Platinum</option>
        </select>
        <br>
        <label for="booking_date">Date:</label>
        <input type="date" name="booking_date" value="<?= $row['booking_date'] ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
