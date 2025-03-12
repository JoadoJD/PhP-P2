<?php
//Naam: joaquim

namespace Products;

class Product {
    protected string $name;
    protected float $price;
    protected int $stock;
    protected float $discount;
    protected string $description;

    public function __construct(string $name, float $price, int $stock, float $discount, string $description) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->discount = $discount;
        $this->description = $description;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSalesPrice(): float {
        return $this->price - $this->discount;
    }

    public function printInfo(): string {
        return $this->description;
    }

    public function getCategory(): string {
        return get_class($this);
    }
}
?>
