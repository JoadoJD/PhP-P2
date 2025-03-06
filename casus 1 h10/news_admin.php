<?php
// Inclusief de verbindingscode
include 'connect.php';

// Als er een nieuwsbericht verwijderd moet worden
if (isset($_GET['delete_id']) && !empty($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM news WHERE id = :delete_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':delete_id', $delete_id, PDO::PARAM_INT);
    if ($stmt->execute()) {
        // Verwijderen succesvol, vernieuw de pagina om de veranderingen weer te geven
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error deleting record: " . $stmt->errorInfo()[2];
    }
}

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- Meta tags, title, etc. -->
</head>
<body>
    <h1>Admin Pagina</h1>
    
    <!-- Knop voor het toevoegen van een nieuwsbericht -->
    <a href="news_add.php"><button>Nieuwsbericht Toevoegen</button></a>
    
    <h2>Nieuwsberichten</h2>
    <ul>
        <?php
        // Functie om alle nieuwsberichten op te halen
        function getAllNews() {
            global $conn;
            
            $sql = "SELECT * FROM news";
            $stmt = $conn->query($sql);
            
            $news = array();
            if ($stmt->rowCount() > 0) {
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $news[] = $row;
                }
            }
            return $news;
        }
        
        // Alle nieuwsberichten ophalen
        $news = getAllNews();
        
        // Weergave van nieuwsberichten
        foreach ($news as $item) {
            echo "<li><strong>" . $item['title'] . "</strong>: " . $item['content'] . " <a href=\"news_edit.php?id=" . $item['id'] . "\">Bewerken</a> | <a href=\"?delete_id=" . $item['id'] . "\">Verwijderen</a></li>";
        }
        ?>
    </ul>
    
    <br>
    <a href="index.php">Terug naar Index</a>
</body>
</html>
