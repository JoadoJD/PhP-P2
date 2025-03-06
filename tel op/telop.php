<?php
//auteur: Joaquim van der horst
//functie: voorbeeld operatoren

$getal = 2000;
//optellen 1000 + 2000
$uitkomst = 1000 + $getal;
echo "Uitkomst = $uitkomst";

//uitkomst verhogen met 10%
//formule: 3000 * 0,1
echo "<br>";
$uitkomst = $uitkomst *1.1;
$uitkomst2 = $uitkomst *1.1;

echo $uitkomst;


//trek er 1000 vanaf
echo "<br>";
$uitkomst2 = $uitkomst -1000;

echo $uitkomst2;

//print het resultaat
echo "<br> Eindresultaat $uitkomst";

?>