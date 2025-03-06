<?php
// Auteur: Joaquim van der horst
// Functie: selecteer data

// connect database
include "connect.php";

// maak een query
$sql = "SELECT * FROM fietsen";
// prepare
$stmt = $conn->prepare ($sql);
// uitvoeren
$stmt ->execute();
// ophalen alle data
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result);

// print de data rij voor rij
echo "<br>";
echo "<table border=1px>";

    echo "<tr>";
    echo "<th>merk</th>";
    echo "<th>type</th>";
    echo "<th>prijs</th>";
    echo "<th>edit</th>";
    echo "<th>delete</th>";
    echo "</tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['merk'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['prijs'] . "</td>";
        echo "<td><a href='edit.php?id= " . $row['id'] . "'>" . "Wijzig</a></td>";
        echo "<td><a href='delete.php?id= " . $row['id'] . "'>" . "delete</a></td>";
        echo "<td>" . $row['id'] . "</td>";
        echo "</tr>";
    } 
echo "</table>";

?>