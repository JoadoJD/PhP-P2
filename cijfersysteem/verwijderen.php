<?php
// Verbinding met de database
$conn = new mysqli("localhost", "gebruikersnaam", "wachtwoord", "cijfersysteem");

// Controleren op fouten in de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verwijderfunctionaliteit
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM cijfers WHERE id=$id";
    $result = $conn->query($sql);
}
?>
