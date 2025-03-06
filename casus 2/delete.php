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

    // ID van het te verwijderen nieuwsbericht ophalen
    $id = $_POST['id'];

    // SQL-query om het nieuwsbericht te verwijderen
    $sql = "DELETE FROM news WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Nieuwsbericht verwijderd!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
