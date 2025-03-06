<?php
declare(strict_types=1);

class Music {
    private string $name;
    private string $genre;
    private int $duration;

    public function __construct(string $name, string $genre, int $duration) {
        $this->name = $name;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function getDuration(): int {
        return $this->duration;
    }
}

$music1 = new Music("Bohemian Rhapsody", "Rock", 6);
echo $music1->getName() . " - " . $music1->getGenre() . " - " . $music1->getDuration() . " min";
?>
