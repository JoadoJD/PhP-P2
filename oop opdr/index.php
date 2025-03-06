<?php
declare(strict_types=1);
require_once 'ListenList.php';
require_once 'Music.php';

$kees = new ListenList();

$music1 = new Music("Imagine", "Pop", 3);
$music2 = new Music("Smells Like Teen Spirit", "Rock", 5);
$music3 = new Music("Lose Yourself", "Hip-Hop", 4);

$kees->addMusic($music1);
$kees->addMusic($music2);
$kees->addMusic($music3);

foreach ($kees->getMusic() as $music) {
    echo $music->getName() . " - " . $music->getGenre() . " - " . $music->getDuration() . " min<br>";
}

var_dump($kees->getMusic());
?>
