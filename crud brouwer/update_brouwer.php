<?php
    // functie: update brouwcode
    // auteur: Wigmans

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updatebrouwcode($_POST) == true){
            echo "<script>alert('brouwcode is gewijzigd')</script>";
        } else {
            echo '<script>alert("brouwcode is NIET gewijzigd")</script>';
        }
    }

    // Test of brouwcode is meegegeven in de URL
    if(isset($_GET['brouwcode'])){  
        // Haal alle info van de betreffende brouwcode $_GET['brouwcode']
        $brouwcode = $_GET['brouwcode'];
        $row = getbrouwcode($brouwcode);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig brouwcode</title>
</head>
<body>
  <h2>Wijzig brouwcode</h2>
  <form method="post">
    
    <input type="hidden" brouwcode="merk" name="brouwcode" required value="<?php echo $row['brouwcode']; ?>"><br>
    <label for="merk">Merk:</label>
    <input type="text" brouwcode="merk" name="merk" required value="<?php echo $row['merk']; ?>"><br>

    <label for="type">Type:</label>
    <input type="text" brouwcode="type" name="type" required value="<?php echo $row['type']; ?>"><br>

    <label for="prijs">Prijs:</label>
    <input type="number" brouwcode="prijs" name="prijs" required value="<?php echo $row['prijs']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='crud_brouwcodeen.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen brouwcode opgegeven<br>";
    }
?>