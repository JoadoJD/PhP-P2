<?php
// SERVER-instellingen voorbeelden PDO connectie//

// de database heet database (staat in Phpmyadmin)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gastenboek";

// connecting maken met de PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>