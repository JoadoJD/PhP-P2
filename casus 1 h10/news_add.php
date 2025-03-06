<?php
include 'connect.php';

// Als het formulier is verzonden, voeg dan een nieuw nieuwsbericht toe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    
    // Voeg het nieuwsbericht toe aan de database
    $sql = "INSERT INTO news (title, content) VALUES (:title, :content)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    
    if ($stmt->execute()) {
        // Bericht weergeven als het nieuwsbericht succesvol is toegevoegd
        echo "<p>Nieuwsbericht succesvol toegevoegd!</p>";
        // Ververs de pagina om het nieuwe nieuwsbericht weer te geven
        header("Refresh:2"); // Ververs de pagina na 2 seconden
        exit();
    } else {
        $errorInfo = $stmt->errorInfo();
        echo "Error: " . $errorInfo[2];
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- Meta tags, title, etc. -->
</head>
<body>
    <h1>Nieuw Nieuwsbericht Toevoegen</h1>
    
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="content">Inhoud:</label><br>
        <textarea id="content" name="content" rows="5" cols="40" required></textarea><br><br>
        <input type="submit" value="Toevoegen">
    </form>
    
    <br>
    <a href="index.php">Terug naar Index</a>
</body>
</html>
