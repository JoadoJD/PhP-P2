<?php
// Inclusief de verbindingscode
include 'connect.php';

// Controleer of het nieuwsbericht ID is opgeslagen in de sessie
session_start();
if(isset($_SESSION['news_id']) && !empty($_SESSION['news_id'])) {
    // Haal het nieuwsbericht op uit de database
    $id = $_SESSION['news_id'];
    $sql = "SELECT * FROM news WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $news = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if(!$news) {
        // Als het nieuwsbericht niet gevonden is, geef een foutmelding weer
        echo "Nieuwsbericht niet gevonden.";
        exit();
    }
} else {
    // Als geen ID is opgeslagen in de sessie, doorsturen naar de indexpagina of een foutmelding weergeven
    echo "Geen nieuwsbericht ID opgeslagen in de sessie.";
    exit();
}

// Als het formulier is verzonden, update het nieuwsbericht in de database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    
    $sql = "UPDATE news SET title = :title, content = :content WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    if ($stmt->execute()) {
        // Redirect naar de indexpagina na succesvolle update
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->errorInfo()[2];
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwsbericht Bewerken</title>
</head>
<body>
    <h1>Nieuwsbericht Bewerken</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="title">Titel:</label><br>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($news['title']); ?>"><br><br>
        <label for="content">Inhoud:</label><br>
        <textarea id="content" name="content"><?php echo htmlspecialchars($news['content']); ?></textarea><br><br>
        <input type="submit" value="Opslaan">
        <a href="index.php">Annuleren</a>
    </form>
</body>
</html>

