<?php
declare(strict_types=1);

class Music {
    public string $name;
    public string $genre;
    public int $duration;

    public function __construct(string $name, string $genre, int $duration) {
        $this->name = $name;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function getName() {
        return $this->name;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getDuration() {
        return $this->duration;
    }
}

$music1 = new Music("Bohemian Rhapsody", "Rock", 6);
echo $music1->getName() . " - " . $music1->getGenre() . " - " . $music1->getDuration() . " min";

// Haal de datatypes weg uit de public function
class MusicNoType {
    public string $name;
    public string $genre;
    public int $duration;

    public function __construct($name, $genre, $duration) {
        $this->name = $name;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function getName() {
        return $this->name;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getDuration() {
        return $this->duration;
    }
}

$music2 = new MusicNoType("Stairway to Heaven", "Rock", 8);
echo $music2->getName() . " - " . $music2->getGenre() . " - " . $music2->getDuration() . " min";

// Zet de datatypes terug aan de public function
class MusicWithTypeAgain {
    public string $name;
    public string $genre;
    public int $duration;

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

$music3 = new MusicWithTypeAgain("Hotel California", "Rock", 7);
echo $music3->getName() . " - " . $music3->getGenre() . " - " . $music3->getDuration() . " min";
?>
