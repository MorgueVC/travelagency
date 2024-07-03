<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
require_once 'conn.php';

$connection = new PDO('mysql:dbname=travelweb;host=localhost', 'root', '');
$username = $_SESSION['username'];

$sql = "SELECT * FROM `member` WHERE `username` = :username";
$stmt = $connection->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->execute();
$member = $stmt->fetch(PDO::FETCH_ASSOC);

$firstname = $member['firstname'] ?? 'Not';
$lastname = $member['lastname'] ?? 'Found';

$stmt = $connection->prepare("SELECT travels.ProductCode, travels.itemName, travels.Prijs 
                              FROM travels 
                              INNER JOIN bookings ON travels.ProductCode = bookings.ProductCode 
                              WHERE bookings.username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();
$bookedTrips = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js'></script>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Management</title>
</head>
<body>
<div class="container">
    <div class="main-body">


        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
        </nav>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://i.pinimg.com/736x/dc/9c/61/dc9c614e3007080a5aff36aebb949474.jpg" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?php echo htmlspecialchars($firstname . ' ' . $lastname); ?></h4>
                                <p class="text-secondary mb-1"><?php echo htmlspecialchars($username); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo htmlspecialchars($firstname . ' ' . $lastname); ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Username</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo htmlspecialchars($username); ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Booked Trip(s)</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php
                                if (!empty($bookedTrips)) {
                                    foreach ($bookedTrips as $trip) {
                                        echo "ProductCode: " . htmlspecialchars($trip['ProductCode']) . "<br>";
                                        echo "ItemName: " . htmlspecialchars($trip['itemName']) . "<br>";
                                        echo "Prijs: " . htmlspecialchars($trip['Prijs']) . "<br><br>";
                                    }
                                } else {
                                    echo "No booked trips yet.";
                                }
                                ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-info" target="__blank" href="index.php">Return Home</a>
                                <a class="btn btn-info" target="__blank" href="deletetrip_query.php">Cancel Trips?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>