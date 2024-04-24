<?php
$host = 'mysql_db';
$db   = 'travelweb';
$user = 'root';
$pass = 'rootpassword';

$dsn = "mysql:host=$host;dbname=$db;";

$conn = new PDO($dsn, $user, $pass);
?>