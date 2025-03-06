<?php
class Product {
    public string $name;
    public float $price;
    public string $currency;

    public function __construct(
        string $name,
        float $price,
        string $currency
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->currency = $currency;
    }

    public function getProduct(): string {
        return "Het product " . $this->name . " kost " . $this->currency . " " . $this->price . "<br>";
    }
}

$product1 = new Product(name: "Techno Beats", price: 2.00, currency: "€");
echo $product1->getProduct();

$product2 = new Product(name: "Classic Tunes", price: 3.50, currency: "€");
echo $product2->getProduct();

$product3 = new Product(name: "Jazz Vibes", price: 4.75, currency: "€");
echo $product3->getProduct();
?>
