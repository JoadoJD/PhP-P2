<?php
//Naam: joaquim

namespace Products;

require_once 'product.php';

class Game extends Product {
    private string $genre;
    private array $requirements = [];

    public function setGenre(string $genre) {
        $this->genre = $genre;
    }

    public function addRequirements(string $requirement) {
        $this->requirements[] = $requirement;
    }

    public function printInfo(): string {
        return "Genre: $this->genre, Requirements: " . implode(', ', $this->requirements);
    }
}
?>
