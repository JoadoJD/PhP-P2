<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verbinding maken met de database
    $servername = "localhost";
    $username = "root";
    $dbname = "news_website";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Controleren op fouten
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Gegevens van het formulier ophalen
    $titel = $_POST['titel'];
    $bericht = $_POST['bericht'];
    $auteur = $_POST['auteur'];
    $categorie_id = $_POST['categorie_id'];

    // SQL-query om het nieuwsbericht toe te voegen
    $sql = "INSERT INTO news (title, content, author, category_id) VALUES ('$titel', '$bericht', '$auteur', $categorie_id)";

    if ($conn->query($sql) === TRUE) {
        echo "Nieuwsbericht toegevoegd!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
