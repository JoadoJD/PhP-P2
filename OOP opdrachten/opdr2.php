<?php

class Product {
    public $naam;
    public $prijs;
    public $beschrijving;

    public function __construct($naam, $prijs, $beschrijving) {
        $this->naam = $naam;
        $this->prijs = $prijs;
        $this->beschrijving = $beschrijving;
    }
}

// Frisdranken maken
$frisdrank1 = new Product("Cola", 1.50, "Een verfrissende cola.");
$frisdrank2 = new Product("Sprite", 1.25, "Een citroen-limoen frisdrank.");
$frisdrank3 = new Product("Fanta", 1.30, "Een fruitige sinaasappeldrank.");
$frisdrank4 = new Product("Pepsi", 1.40, "Een nep cola.");

// Eigenschappen van objecten weergeven
echo "Eigenschappen van Frisdrank 1:<br>";
echo "Naam: " . $frisdrank1->naam . "<br>";
echo "Prijs: " . $frisdrank1->prijs . "<br>";
echo "Beschrijving: " . $frisdrank1->beschrijving . "<br><br>";

echo "Eigenschappen van Frisdrank 2:<br>";
echo "Naam: " . $frisdrank2->naam . "<br>";
echo "Prijs: " . $frisdrank2->prijs . "<br>";
echo "Beschrijving: " . $frisdrank2->beschrijving . "<br><br>";

echo "Eigenschappen van Frisdrank 3:<br>";
echo "Naam: " . $frisdrank3->naam . "<br>";
echo "Prijs: " . $frisdrank3->prijs . "<br>";
echo "Beschrijving: " . $frisdrank3->beschrijving . "<br><br>";

echo "Eigenschappen van Frisdrank 4:<br>";
echo "Naam: " . $frisdrank4->naam . "<br>";
echo "Prijs: " . $frisdrank4->prijs . "<br>";
echo "Beschrijving: " . $frisdrank4->beschrijving . "<br><br>";

// Een eigenschap van een object wijzigen
$frisdrank1->prijs = 1.75;
echo "Gewijzigde prijs van Frisdrank 1: " . $frisdrank1->prijs . "<br>";
?>
