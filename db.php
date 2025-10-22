<?php
$servername = "localhost";
$username = "dbuser";  // XAMPP default
$password = "1234";      // XAMPP default
$dbname = "trendwala_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
