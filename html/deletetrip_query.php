<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

require_once 'conn.php';

$connection = new PDO('mysql:dbname=travelweb;host=travel_db', 'root', 'rootpassword');


$username = $_SESSION['username'];

$query = "DELETE FROM bookings WHERE username = :username";
$stmt = $connection->prepare($query);
$stmt->bindParam(':username', $username);
$result = $stmt->execute();

if (!$result) {
    die("Query Failed: " . $stmt->errorInfo());
} else {
    header("Location: accountmanagement.php");
    echo "Trip(s) successfully cancelled.";
    exit;
}
?>