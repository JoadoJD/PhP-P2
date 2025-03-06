<?php
//Auteur: joaquim van der horst
//Functie: toevoegen van 1 fiets
//test of toevoeg knop is ingedrukt
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    echo "Er is gepost<br>";
    print_r($_POST);


//connect database
include "connect.php";

//maak een query
$sql = "INSERT INTO fietsen (merk, type, prijs)
      VALUES (:merk, :type, :prijs);";

    //prepare query
$query = $conn->prepare($sql);
//uitvoeren query
$status = $query->execute(
    [
        ':merk'=>$_POST['merk'],
        ':type'=>$_POST['type'],
        ':prijs'=>$_POST['prijs'],
    ]
    );

    //test of insert gelukt is
    if($status == true){
        echo "<script>alert(fiets is toegevoegd')</script>";
        echo "<script> location.replace('home2.php')</script>";
    } else {
            echo '<script>alert("fiets is niet toegevoegd")</script>';
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fietsen Formulier</title>
</head>
<body>
<h2>Voeg een fiets toe</h2>
<form action="insert_db.php" method="post">
<label for="merk">Merk:</label>
<input type="text" name="merk" required><br>
<label for="type">type:</label>
<input type="text" name="type" required><br>
<label for="prijs">Prijs:</label>
<input type="number" name="prijs" required><br>
 
        <input type="submit" value="Voeg Fiets Toe">

</form>
</body>
</html>