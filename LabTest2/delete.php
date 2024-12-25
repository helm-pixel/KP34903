<?php
include 'db_connection.php';

$id = $_GET['id'];
$conn->query("DELETE FROM bookings WHERE id=$id");

header("Location: test2.php");
?>
