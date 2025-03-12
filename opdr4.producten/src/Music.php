<?php
//Naam: joaquim

namespace Products;

require_once 'product.php';

class Music extends Product {
    private string $artist;
    private array $numbers = [];

    public function setArtist(string $artist) {
        $this->artist = $artist;
    }

    public function addNumber(string $number) {
        $this->numbers[] = $number;
    }

    public function printInfo(): string {
        return "Artist: $this->artist, Songs: " . implode(', ', $this->numbers);
    }
}
?>
