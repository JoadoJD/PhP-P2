<?php
// Verbinding maken met de database (vervang de placeholders met jouw gegevens)
$servername = "localhost";
$username = "gebruikersnaam";
$password = "wachtwoord";
$dbname = "jouw_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Controleren op fouten
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query om nieuwsberichten op te halen
$sql = "SELECT * FROM nieuwsberichten";
$result = $conn->query($sql);

// Output van de nieuwsberichten
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='news-item'>";
        echo "<h2>" . $row["titel"] . "</h2>";
        echo "<p>" . $row["bericht"] . "</p>";
        echo "</div>";
    }
} else {
    echo "Geen nieuwsberichten gevonden";
}

$conn->close();
?>
