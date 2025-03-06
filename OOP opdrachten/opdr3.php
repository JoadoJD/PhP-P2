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

    public function formatPrice() {
        return number_format($this->prijs, 2);
    }
}

// Frisdranken maken
$frisdrank1 = new Product("Cola", 1.50, "Een verfrissende cola.");
$frisdrank2 = new Product("Sprite", 1.25, "Een bruisende citroen-limoen frisdrank.");
$frisdrank3 = new Product("Fanta", 1.30, "Een fruitige sinaasappeldrank.");

// Prijs formatteren en weergeven
echo "Prijs van Frisdrank 1: $" . $frisdrank1->formatPrice() . "<br>";
echo "Prijs van Frisdrank 2: $" . $frisdrank2->formatPrice() . "<br>";
echo "Prijs van Frisdrank 3: $" . $frisdrank3->formatPrice() . "<br>";
?>
