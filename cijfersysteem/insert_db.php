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
$sql = "INSERT INTO cijfers (leerling, cijfer, vak, docent)
      VALUES (:leerling, :cijfer, :vak, :docent);";

// prepare
$stmt = $conn->prepare ($sql);
// uitvoeren
$status = $stmt->execute([
    ':leerling'=>$_POST['leerling'],
    ':cijfer'=>$_POST['cijfer'],
    ':vak'=>$_POST['vak']
    ':docent'=>$_POST['docent']
]);

if ($stmt->rowCount() == 1) {
    header("location:home2.php");
    exit();
} else {
    echo "update is fout gegaan<br>";
}

}

?>