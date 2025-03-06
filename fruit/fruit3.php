<?php
class Fruit {
    public $name;
    public $price;
    public $category;
    public $currency;

    public function __construct($name, $price, $currency = '€') {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function setCategory($category) {
        $this->category = strtoupper($category);
    }
}

// Maak objecten aan en stel de eigenschappen in via de constructor
$apple = new Fruit('apple', 1.2, '$');
$apple->setCategory('fruit');

// $banana = new Fruit('banana', 0.8, '€');
// $banana->setCategory('fruit');

echo "Name: " . $apple->name . ", Price: " . $apple->price . $apple->currency . ", Category: " . $apple->category . "\n";
// echo "Name: " . $banana->name . ", Price: " . $banana->price . $banana->currency . ", Category: " . $banana->category . "\n";
?>


