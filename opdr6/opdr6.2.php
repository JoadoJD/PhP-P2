
<?php

//auteur: joaquim
//functie: cookie voor totaal aantal paginabezoeken

// Controleer of de cookie is ingesteld zo niet zet een 0 neer
if (!isset($_COOKIE['total_page_views'])) {
    setcookie('total_page_views', 0, time() + 3600); // Cookie geldig voor 1 uur
}

// Verhoog het totaal aantal paginabezoeken bij elke aanroep van het script
$totalPageViews = $_COOKIE['total_page_views'] + 1;
setcookie('total_page_views', $totalPageViews, time() + 3600);

// Toon het totaal aantal paginabezoeken
echo "Totaal aantal paginabezoeken: " . $totalPageViews;
?>