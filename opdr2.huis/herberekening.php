<?php

class Room {
    private float $length;
    private float $width;
    private float $height;

    public function __construct(float $length, float $width, float $height) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function getVolume(): float {
        return $this->length * $this->width * $this->height;
    }
}

class House {
    private array $rooms = [];
    private const PRICE_PER_M3 = 3000;

    public function addRoom(Room $room): void {
        $this->rooms[] = $room;
    }

    public function getRooms(): array {
        return $this->rooms;
    }

    public function getTotalVolume(): float {
        $totalVolume = 0;
        foreach ($this->rooms as $room) {
            $totalVolume += $room->getVolume();
        }
        return $totalVolume;
    }

    public function getPrice(): float {
        return $this->getTotalVolume() * self::PRICE_PER_M3;
    }

    public function displayDetails(): void {
        echo "Inhoud Kamers:" . PHP_EOL;
        foreach ($this->rooms as $room) {
            echo "- Lengte: " . $room->getLength() . "m Breedte: " . $room->getWidth() . "m Hoogte: " . $room->getHeight() . "m" . PHP_EOL;
        }
        echo "\nVolume Totaal = " . $this->getTotalVolume() . "m3" . PHP_EOL;
        echo "Prijs van het huis = €" . $this->getPrice() . PHP_EOL;
    }
}

// Maak huis en voeg kamers toe
$huis = new House();
$huis->addRoom(new Room(5.2, 5.1, 5.5));
$huis->addRoom(new Room(4.8, 4.6, 4.9));
$huis->addRoom(new Room(5.9, 2.5, 3.1));

// Toon details van het huis
$huis->displayDetails();

?>