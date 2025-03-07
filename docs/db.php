<?php
$host = "localhost";
$user = "daksh"; // Your MySQL user
$pass = "yourpassword";  // Your MySQL password
$dbname = "oldarticles";  // Database name

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
