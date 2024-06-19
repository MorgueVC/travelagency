<?php
$host = 'localhost';
$db   = 'travelweb';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db";

$conn = new PDO($dsn, $user, $pass);
?>