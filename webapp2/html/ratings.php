
<?php
session_start();
require_once 'conn.php';$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO('mysql:dbname=travelweb;host=localhost', 'root', '', $options);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
$error = '';
$successMessage = '';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
if (!isset($_POST['ProductCode']) && !isset($_GET['ProductCode'])) {
    die('ProductCode is required');
}
$productCode = isset($_POST['ProductCode']) ? intval($_POST['ProductCode']) : intval($_GET['ProductCode']);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["rating"])) {
    $username = $_SESSION['username'];
    $rating = intval($_POST["rating"]);
    $sql = "INSERT INTO ratings (rating, username, ProductCode) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$rating, $username, $productCode]);
    $successMessage = "Thank you for your rating!";
    // Start buffering output
    ob_start();
    header("Location: index.php");
    ob_end_flush();
    exit();
}
$pdo = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #232121;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
            max-width: 90%;
            text-align: center;
        }
        .container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #666;
        }
        .form-group input[type="number"],
        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error-message {
            color: #f00;
            font-size: 14px;
            margin-top: 10px;
        }
        .success-message {
            color: #0a0;
            font-size: 16px;
            margin-top: 10px;
        }
        .booked-text {
            color: green;
            font-weight: bold;
        }
    </style>
    <title>Your trip has been booked</title>
</head>
<body>
<div class="container">
    <h1 class="booked-text">Your trip is being booked</h1>
    <h2>Rate us in the meantime</h2>
    <?php if ($successMessage): ?>
        <p class="success-message"><?= htmlspecialchars($successMessage); ?></p>
    <?php elseif ($error): ?>
        <p class="error-message"><?= htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="hidden" name="ProductCode" value="<?= htmlspecialchars($productCode); ?>">
        <div class="form-group">
            <label for="rating">Rating (1-5):</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</body>
</html>
