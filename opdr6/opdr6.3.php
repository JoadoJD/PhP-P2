<?php
//auteur: joaquim
//functie: het Genereren van een willekeurige postcode

$randomPostcode = mt_rand(1000, 9999) . " " . mt_rand(10, 99);
echo "Willekeurige postcode: " . $randomPostcode;
?>