<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwsberichten</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Nieuwsberichten</h1>
        <div id="news">
            <?php
            // Verbinding maken met de database
            $servername = "localhost";
            $username = "admin";
            $dbname = "news_website";

            $conn = new mysqli($servername, $username, $dbname);

            // Controleren op fouten
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query om nieuwsberichten op te halen
            $sql = "SELECT * FROM news";
            $result = $conn->query($sql);

            // Output van de nieuwsberichten
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='news-item'>";
                    echo "<h2>" . $row["title"] . "</h2>";
                    echo "<p>" . $row["content"] . "</p>";
                    echo "<p><strong>Auteur:</strong> " . $row["author"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "Geen nieuwsberichten gevonden";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
