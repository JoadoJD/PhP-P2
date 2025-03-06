<?php
$servername = "localhost";
$username = "root";
$password = ""; // If you have set a password, include it here
$dbname = "myshop";

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully"; // Just for testing

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
