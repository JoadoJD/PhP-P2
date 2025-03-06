<?php

//auteur: docent
//functie: voorbeeld array

$cijfers[0] = 5;
$cijfers[1] = 7;
$cijfers = array(2,6);
$aantal = count($cijfers);
echo "Aantal cijfers: $aantal<br>";

for ($i=0; $i < $aantal; $i++) {
echo "$cijfers[1]<br>";
}
?>