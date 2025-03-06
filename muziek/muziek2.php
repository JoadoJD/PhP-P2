<?php
/**
 * Class Music
 * 
 * @property string $name
 * @property string $genre
 * @property int $listen
 */
class Music {
    public string $name;
    public string $genre;
    public int $listen;

    public function __construct(string $name, string $genre, int $listen) {
        $this->name = $name;
        $this->genre = $genre;
        $this->listen = $listen;
    }

    public function getName(): string {
        return $this->name;
    }
}
?>
