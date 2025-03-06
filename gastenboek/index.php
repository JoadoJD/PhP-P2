<h1>gastenboek</h1>
<form method="post" action="">
    Naam: <input type="text" name="naam" id="naam"></input><br><br>
    Bericht: <textarea name="bericht" id="bericht"></textarea><br><br>
    <input type="submit" name="knop" id="knop">
</form>

<?php
include "connectpdo.php";

try {
    if(isset($_POST['knop'])) {
        $naam = $_POST['naam'];
        $bericht = $_POST['bericht'];
        $datumtijd = date('Y-m-d H:i:s');

        // INSERT query uitvoeren
        $stmt = $conn->prepare("INSERT INTO berichten (naam, bericht, datumtijd) VALUES (:naam, :bericht, :datumtijd)");
        $stmt->bindParam(':naam', $naam);
        $stmt->bindParam(':bericht', $bericht);
        $stmt->bindParam(':datumtijd', $datumtijd);
        $stmt->execute();

        // Terugsturen naar de hoofdpagina
        header('Location: index.php');
    }

    // Berichten ophalen
    $sqlSelect = "SELECT * FROM berichten";
    $data = $conn->query($sqlSelect);

    foreach ($data as $row) {
        echo $row['id']." ";
        echo $row['aanmaakdatum']." ";
        echo $row['gebruikers-id']." ";
        echo $row['berichttekst']." ";
        echo "<a href='VerwijderBericht.php?id=".$row['id']."'>Verwijderen</a>";
        echo "<br>";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
