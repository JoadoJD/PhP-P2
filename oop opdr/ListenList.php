<?php
declare(strict_types=1);

class ListenList {
    private array $music = [];

    public function addMusic(Music $music) {
        $this->music[] = $music;
    }

    public function getMusic(): array {
        return $this->music;
    }
}
?>
