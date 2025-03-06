<?php
// Auteur: Joaquim van der horst
// functie: uitleg datum functie

// initialisatie
$datum = date('l d F Y');

// main
echo "De datum is: $datum";

echo "<br>";
$jaar = date("y");
echo "vandaag is het de $jaar" , "e  dag van de maand";
echo "<br>";

echo date('l'). " is de ". date('w'). "e dag van de week.";
echo "<br>";
 
echo "De maand ". date('F'). " heeft in totaal ". date('t'). " dagen.";
echo "<br>";
 
//echo "Het jaar ". date(''). date(''). " is geen schrikkeljaar.";
//echo "Het jaar ". date('Y'). (date("L") == 1) ? "Leap Year" : "Not Leap Year";
//Dit is overgenomen van YOUTUBE.
function isLeapYear($year) {
    if(!is_numeric($year)) {
        echo "String is not allowed. Input should be a number.";
        return;
    }
    // check leap year
    if(($year%4 == 0 && $year%100!=0) || $year%400==0) {
        echo "Het jaar $year,  is een schikkeljaar";
    }else{
        echo "Het jaar $year,  is niet een schikkeljaar";
    }
}
 
$year = 2023;
isLeapYear($year);
?>
