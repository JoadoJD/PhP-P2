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

// Objecten op het scherm weergeven
echo "Frisdrank 1:\n";
var_dump($frisdrank1);

echo "\nFrisdrank 2:\n";
var_dump($frisdrank2);

echo "\nFrisdrank 3:\n";
var_dump($frisdrank3);
?>