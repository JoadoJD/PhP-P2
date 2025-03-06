<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "statistiekensysteem";

// Verbinding maken
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbinding controleren
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
?>
