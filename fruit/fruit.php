<?php
class Fruit {
    public $name;
    public $price;
    public $category;

    public function setName($name) {
        $this->name = ucfirst($name);
    }

    public function setCategory($category) {
        $this->category = strtoupper($category);
    }
}

// Maak objecten aan en stel de eigenschappen in
$apple = new Fruit();
$apple->setName('apple');
$apple->price = 1.2;
$apple->setCategory('fruit');

$banana = new Fruit();
$banana->setName('banana');
$banana->price = 0.8;
$banana->setCategory('fruit');

echo "Name: " . $apple->name . ", Price: " . $apple->price . ", Category: " . $apple->category . "\n";
echo "Name: " . $banana->name . ", Price: " . $banana->price . ", Category: " . $banana->category . "\n";
?>
