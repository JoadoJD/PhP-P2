<?php

//auteur: joaquim
//functie: zien hoevaak iemand op de pagina komt

session_start();

// Controleer of de sessievariabeel is ingesteld zo niet zet een 0 neer
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 0;
}

// Verhoog het aantal paginabezoeken bij elke aanroep van het script
$_SESSION['page_views']++;

// Toon het aantal paginabezoeken
echo "Aantal paginabezoeken: " . $_SESSION['page_views'];
?>