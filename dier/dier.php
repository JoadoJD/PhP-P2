<?php
class Animal {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
        echo "Het dier is geboren<br>";
    }

    public function Info(): void {
        echo "De naam van het dier is: " . $this->name . "<br>";
    }

    public function Eat(): void {
        echo "Het beest eet<br>";
    }

    public function Sleep(): void {
        echo "Het beest slaapt<br>";
    }
}

// Maak een nieuw Animal object aan
$dier = new Animal("Jan");

// Roep de methodes aan
$dier->Info();
$dier->Eat();
$dier->Sleep();
?>


