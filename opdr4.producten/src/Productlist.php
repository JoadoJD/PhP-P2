<?php
//Naam: joaquim

namespace Products;

require_once 'product.php';

class ProductList {
    private array $products = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getProducts(): array {
        return $this->products;
    }
}
?>
