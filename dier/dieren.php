<?php
// Auteur: Joaquim

class Animal {
    public $naam;

    public function __construct($naam) {
        $this->naam = $naam;
        echo "Animal is Born<br>";
    }

    public function info() {
        echo "The animal is called " . $this->naam . "<br>";
    }

    public function swim(){
        echo "Animal swims<br>";
    }

    public function eat() {
        echo "Animal eats<br>";
    }

    public function sleep() {
        echo "Animal sleeps<br>";
    }
}

class Bird extends Animal {
    public function fly() {
        echo "The bird flies<br>";
    }
}

class Parrot extends Bird {
    public function eat() {
        echo "The parrot eats plants<br>";
    }
}

class Eagle extends Bird {
    public function eat() {
        echo "The eagle eats meat<br>";
    }
}

// Maak een dier
$dier = new Animal("Animal");

$dier->info();
$dier->eat();
$dier->sleep();

echo "<br>";

// Maak een vogel
$vogel = new Bird("bird");

$vogel->info();
$vogel->eat();
$vogel->sleep();
$vogel->fly();


echo "<br>";

// Maak een papegaai
$papegaai = new Parrot("Parrot");

$papegaai->info();
$papegaai->eat();
$papegaai->sleep();
$papegaai->fly();

echo "<br>";

// Maak een adelaar
$adelaar = new Eagle("Eagle");

$adelaar->info();
$adelaar->eat();
$adelaar->sleep();
$adelaar->fly();


echo "<br>";

// Maak een vis
$vis = new Animal("fish");

$vis->info();
$vis->eat();
$vis->sleep();
$vis->swim();

public static function getCount()
{
    return self::$count;
}

?>