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
?>
