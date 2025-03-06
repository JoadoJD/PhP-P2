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
    $id = $_POST['id'];
    $titel = $_POST['titel'];
    $bericht = $_POST['bericht'];
    $auteur = $_POST['auteur'];
    $categorie_id = $_POST['categorie_id'];

    // SQL-query om het nieuwsbericht te bewerken
    $sql = "UPDATE news SET title='$titel', content='$bericht', author='$auteur', category_id=$categorie_id WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Nieuwsbericht bijgewerkt!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
