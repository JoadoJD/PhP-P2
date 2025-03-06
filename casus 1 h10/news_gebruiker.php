<?php
// Inclusief de verbindingscode
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- Meta tags, title, etc. -->
</head>
<body>
    <h1>gebruiker Pagina</h1>
    
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
            echo "<li><strong>" . $item['title'] . "</strong>: " . $item['content'] . "</li>";
        }
        ?>
    </ul>
    
    <br>
    <a href="index.php">Terug naar Index</a>
</body>
</html>




