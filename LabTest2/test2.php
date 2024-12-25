<?php
include 'db_connection.php';

// Fetch existing records
$result = $conn->query("SELECT * FROM bookings");

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
</head>
<body>
    <h1>Hey Ticket</h1>
    <h2>Ticket Booking</h2>
    <form action="insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone">
        <br>
        <label for="category">Category</label>
        <select name="category" id="category">
            <option value="standard">Standard</option>
            <option value="gold">Gold</option>
            <option value="platinum">Platinum</option>
        </select>
        <br>
        <label for="booking_date">Date:</label>
        <input type="date" name="booking_date" required>
        <br>
        <button type="submit">Book</button>
    </form>

    <h2>Booking Records</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Booking Date</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['category'] ?></td>
            <td><?= $row['booking_date'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
