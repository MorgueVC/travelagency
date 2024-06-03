<?php
   $connection = new PDO('mysql:dbname=travelweb;host=travel_db', 'root', 'rootpassword');

if(isset($_GET['ProductCode'])) {
    $ProductCode = $_GET['ProductCode'];
    $query = "DELETE FROM travels WHERE ProductCode = :ProductCode";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':ProductCode', $ProductCode);
    $result = $stmt->execute();

    if(!$result) {
        die ("Query Failed" . $stmt->errorInfo());
    } else {
        header("Location: travels.php");
        exit;
    }
}
?>