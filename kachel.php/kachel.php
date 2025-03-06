<?php
//auteur: joaquim
//functie zet kachel aan

// initialisatie van temperatuur
$temp = 10;

if ($temp < 0 && $temp >= -10) {
    echo "hoge stand";
} 

elseif($temp > 0 && $temp <= 18) { //test temp 0-18
echo "normale stand";
}

elseif($temp > 18) {
    echo "kachel uit";
}

else {
    echo "doe niks <br>";
}

?>