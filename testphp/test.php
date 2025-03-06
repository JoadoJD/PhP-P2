<?php
$temp = 30;

// Als temp > 20 Doe airco aan. zet op scherm "airco aan"
if ($temp >= 20) {
   echo "Airco aan";
   echo "Ramen dicht doen";
}
else if ($temp < 15) {
   echo "Kachel aan";
}
else {
   echo "temp is tussen 15 en 20";
}
?>