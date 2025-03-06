<?php
// Verbinding maken met de database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news_website";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Stel PDO in op foutmodus uitzondering
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbinding met de database succesvol.";
} catch(PDOException $e) {
    echo "Verbinding met de database mislukt: " . $e->getMessage();
}
?>
