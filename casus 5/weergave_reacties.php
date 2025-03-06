<?php
// Databaseverbinding
$dsn = 'mysql:host=localhost;dbname=gastenboek';
$username = 'root';
$password = ''; // Voeg je eigen wachtwoord toe indien nodig

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Reacties ophalen
    $stmt = $db->query("SELECT naam, bericht, datum FROM reacties ORDER BY datum DESC");

    echo "<h1>Gastenboek</h1>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div>";
        echo "<p><strong>" . htmlspecialchars($row['naam']) . "</strong> op " . $row['datum'] . "</p>";
        echo "<p>" . $row['bericht'] . "</p>";
        echo "</div><hr>";
    }
} catch (PDOException $e) {
    echo "Fout bij het verbinden met de database: " . $e->getMessage();
}
?>

<a href="index.html">reactie toevoegen</a>