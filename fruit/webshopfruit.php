<?php
// Functie: hoofdprogramma webshop fruit
// Auteur: Joaquim

// Initialisatie
include_once "Fruit2.php";

// Main

// Maak een object banaan op basis van de classdefinitie Fruit
$banaan = new Fruit("Banaan", 2.2);


$banaan->naam = "Banaan";
$banaan->setprijs(2.20);
var_dump($banaan);
echo "<br>";


// Maak een object banaan op basis van de classdefinitie Fruit
$appel = new Fruit(Elstar);

var_dump($appel);

?>