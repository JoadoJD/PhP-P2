<?php
include '../config/db_connect.php';

$land = $_GET['land'];
$maand = $_GET['maand'];

$sql = "SELECT * FROM bezoekers WHERE land = ? AND MONTH(datum_tijd) = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $land, $maand);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Land: " . $row["land"] . " - IP-adres: " . $row["ip_adres"] . " - Provider: " . $row["provider"] . " - Browser: " . $row["browser"] . " - Datum/Tijd: " . $row["datum_tijd"] . " - Referer: " . $row["referer"] . "<br>";
    }
} else {
    echo "Geen resultaten gevonden";
}
$conn->close();
?>

