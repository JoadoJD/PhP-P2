<?php
// Databaseverbinding
$dsn = 'mysql:host=localhost;dbname=gastenboek';
$username = 'root';
$password = ''; // Voeg je eigen wachtwoord toe indien nodig

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Gegevens uit formulier
    $naam = htmlspecialchars($_POST['naam']);
    $bericht = htmlspecialchars($_POST['bericht']);

    // Scheldwoordenfilter
    $scheldwoorden = ['slechtwoord1', 'slechtwoord2']; // Voeg meer woorden toe indien nodig
    $vervanging = '***';
    $bericht = str_ireplace($scheldwoorden, $vervanging, $bericht);

    // BBCode-achtige tags omzetten naar HTML
    $bericht = preg_replace('/\[b\](.*?)\[\/b\]/', '<strong>$1</strong>', $bericht);
    $bericht = preg_replace('/\[u\](.*?)\[\/u\]/', '<u>$1</u>', $bericht);
    $bericht = preg_replace('/\[color=(.*?)\](.*?)\[\/color\]/', '<span style="color:$1;">$2</span>', $bericht);
    $bericht = preg_replace('/\[size=(.*?)\](.*?)\[\/size\]/', '<span style="font-size:$1px;">$2</span>', $bericht);

    // Smileys omzetten
    $bericht = str_replace(':)', '<img src="smile.png" alt=":)" />', $bericht);
    $bericht = str_replace(':(', '<img src="sad.png" alt=":(" />', $bericht);

    // Positieve of negatieve reacties beoordelen
    $positieve_woorden = ['goed', 'geweldig', 'fantastisch', 'leuk', 'blij'];
    $negatieve_woorden = ['slecht', 'vreselijk', 'afschuwelijk', 'stom', 'verdrietig'];

    $positief = false;
    $negatief = false;

    foreach ($positieve_woorden as $woord) {
        if (stripos($bericht, $woord) !== false) {
            $positief = true;
            break;
        }
    }

    foreach ($negatieve_woorden as $woord) {
        if (stripos($bericht, $woord) !== false) {
            $negatief = true;
            break;
        }
    }

    if ($positief) {
        $bericht .= ' <img src="smile.png" alt=":)" />';
    } elseif ($negatief) {
        $bericht .= ' <img src="sad.png" alt=":(" />';
    }

    // Reactie opslaan in de database
    $stmt = $db->prepare("INSERT INTO reacties (naam, bericht) VALUES (:naam, :bericht)");
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':bericht', $bericht);
    $stmt->execute();

    echo "Reactie succesvol geplaatst!<br><a href='weergave_reacties.php'>Bekijk reacties</a>";
} catch (PDOException $e) {
    echo "Fout bij het verbinden met de database: " . $e->getMessage();
}
?>

