<?php
//auteur: joaquim
//functie: D het berekenen van oppervlakte en omtrek van een cirkel
function calculateCircle($radius) {
    $pi = 3.14;
    $circumference = 2 * $pi * $radius;
    $area = $pi * pow($radius, 2);

    return array('omtrek' => $circumference, 'oppervlakte' => $area);
}

// Voorbeeldgebruik van de functie
$straal = 5;
$resultaten = calculateCircle($straal);

echo "Straal: " . $straal . "<br>";
echo "Omtrek: " . $resultaten['omtrek'] . "<br>";
echo "Oppervlakte: " . $resultaten['oppervlakte'];
?>