<?php

//auteur: joaquim
// Functie: data fiets update in database

//test of er data gepost is

if ($_SERVER['REQUEST_METHOD'] == "POST") {
print_r($_POST);

//doe update in de database

// connect database
include "connect.php";

// maak een query
$sql = "
UPDATE fietsen SET
merk = :merk,
type = :type,
prijs = :prijs
WHERE id = :id";
// prepare
$stmt = $conn->prepare ($sql);
// uitvoeren
$status = $stmt->execute([
    ':merk'=>$_POST['merk'],
    ':type'=>$_POST['type'],
    ':prijs'=>$_POST['prijs'],
    ':id'=>$_POST['id'],
]);

if ($stmt->rowCount() == 1) {
    header("location:home2.php");
    exit();
} else {
    echo "update is fout gegaan<br>";
}

}

?>