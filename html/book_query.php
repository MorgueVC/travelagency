<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

require_once 'conn.php';

$username = $_SESSION['username'];

// Check if ProductCode is set in the POST request
if (isset($_POST['ProductCode'])) {
    $ProductCode = intval($_POST['ProductCode']);
} else {
    die('ProductCode is required');
}

try {
    // Insert booking into the database
    $sql = "INSERT INTO bookings (username, ProductCode) VALUES (:username, :ProductCode)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':ProductCode', $ProductCode);
    $stmt->execute();

    // Retrieve travel details for the booked products
    $stmt = $conn->prepare("SELECT travels.ProductCode, travels.itemName, travels.Prijs FROM travels INNER JOIN bookings ON travels.ProductCode = bookings.ProductCode WHERE bookings.username = ?");
    $stmt->execute([$username]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the travel details
    foreach ($results as $row) {
        echo "ProductCode: " . htmlspecialchars($row['ProductCode']) . "<br>";
        echo "ItemName: " . htmlspecialchars($row['itemName']) . "<br>";
        echo "Prijs: " . htmlspecialchars($row['Prijs']) . "<br><br>";
    }

    // Redirect to bookings page
    header("Location: bookings.php");
    exit();
} catch (Exception $e) {
    // Handle any errors
    echo "Error: " . $e->getMessage();
    exit();
}
?>