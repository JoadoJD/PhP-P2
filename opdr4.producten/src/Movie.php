<?php
//Naam: joaquim

namespace Products;

require_once 'product.php';

class Movie extends Product {
    private string $quality;

    public function setQuality(string $quality) {
        $this->quality = $quality;
    }

    public function printInfo(): string {
        return "Quality: $this->quality";
    }
}
?>
