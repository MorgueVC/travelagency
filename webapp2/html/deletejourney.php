<?php
$connection = new PDO('mysql:host=localhost;dbname=travelweb', 'root', '');

if(isset($_GET['ProductCode'])) {
    $ProductCode = $_GET['ProductCode'];
    $query = "DELETE FROM travels WHERE ProductCode = :ProductCode";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':ProductCode', $ProductCode);
    $result = $stmt->execute();

    if(!$result) {
        die ("Query Failed" . $stmt->errorInfo());
    } else {
        header("Location: admin.php");
        exit;
    }
}
?>