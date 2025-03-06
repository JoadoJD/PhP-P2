<?php

class Huis {
    private int $aantalVerdiepingen;
    private int $aantalKamers;
    private float $breedte;
    private float $hoogte;
    private float $diepte;
    private const PRIJS_PER_M3 = 15000;

    public function __construct(int $aantalVerdiepingen, int $aantalKamers, float $breedte, float $hoogte, float $diepte) {
        $this->setAantalVerdiepingen($aantalVerdiepingen);
        $this->setAantalKamers($aantalKamers);
        $this->setBreedte($breedte);
        $this->setHoogte($hoogte);
        $this->setDiepte($diepte);
    }

    public function getAantalVerdiepingen(): int {
        return $this->aantalVerdiepingen;
    }

    public function setAantalVerdiepingen(int $aantalVerdiepingen): void {
        $this->aantalVerdiepingen = $aantalVerdiepingen;
    }

    public function getAantalKamers(): int {
        return $this->aantalKamers;
    }

    public function setAantalKamers(int $aantalKamers): void {
        $this->aantalKamers = $aantalKamers;
    }

    public function getBreedte(): float {
        return $this->breedte;
    }

    public function setBreedte(float $breedte): void {
        $this->breedte = $breedte;
    }

    public function getHoogte(): float {
        return $this->hoogte;
    }

    public function setHoogte(float $hoogte): void {
        $this->hoogte = $hoogte;
    }

    public function getDiepte(): float {
        return $this->diepte;
    }

    public function setDiepte(float $diepte): void {
        $this->diepte = $diepte;
    }

    private function berekenVolume(): float {
        return $this->breedte * $this->hoogte * $this->diepte;
    }

    private function berekenPrijs(): float {
        return $this->berekenVolume() * self::PRIJS_PER_M3;
    }

    public function toonDetails(): void {
        $volume = $this->berekenVolume();
        $prijs = $this->berekenPrijs();
        echo "Dit huis heeft {$this->getAantalVerdiepingen()} verdiepingen, {$this->getAantalKamers()} kamers en heeft een volume van {$volume} m3." . PHP_EOL;
        echo "De prijs van het huis is €{$prijs}" . PHP_EOL;
        echo "------------------------------------" . PHP_EOL;
    }
}

// Maak drie huis-objecten met verschillende eigenschappen
$huis1 = new Huis(2, 5, 5.0, 4.0, 5.0); // Volume: 100 m3
$huis2 = new Huis(2, 6, 5.0, 5.0, 6.0); // Volume: 150 m3
$huis3 = new Huis(4, 11, 5.0, 3.0, 5.0); // Volume: 75 m3

// Toon details van de huizen
$huis1->toonDetails();
$huis2->toonDetails();
$huis3->toonDetails();

?>
