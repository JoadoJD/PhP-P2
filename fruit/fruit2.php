<?php
//Funtie: hoofdprogmma webshop fruit
//Naam: Joaquim

//Initialisatie
//include_once "functions.php";

// Toegevoegen class definitie Fruit
include_once "Fruit.php";


// Main

// aanmaken object op basis can de classbeschrijving Fruit
$banaan = new Fruit();
$banaan->Name = "Banaan";
$banaan->setPrice(2.0);

// Print de naam
echo "De naam is: " . $banaan->Name . "<br>";

// Print de prijs
echo "De prijs is:" . $banaan->getPrice() . "<br>";
var_dump($banaan);
echo "<br>";

// aanmaken tweede object op basis can de classbeschrijving Fruit
$appel = new Fruit();
$this->naam = $name;
$this->price = $prijs;
}

public function setPrijs($prijs) {
    $this->prijs = $prijs;
}

public function printFruit(){

}
?>
