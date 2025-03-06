<?php
class Product {
    public function __construct(
        private string $name,
        private float $price,
        private string $currency
    ) {
        $this->setName($name);
        $this->setPrice($price);
        $this->setCurrency($currency);
    }

    private function setName(string $name): void {
        $this->name = $name;
    }

    private function setPrice(float $price): void {
        $this->price = $price;
    }

    private function setCurrency(string $currency): void {
        $this->currency = $currency;
    }
}
?>
