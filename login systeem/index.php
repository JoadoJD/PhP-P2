<?php
session_start();

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION['user_id'])) {
    // Als de gebruiker niet is ingelogd, doorsturen naar de inlogpagina
    header("Location: login.php");
    exit();
}

// De gebruiker is ingelogd, haal de gebruikersnaam op
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepagina</title>
</head>
<body>
    <h2>Welkom, <?php echo $username; ?>!</h2>
    <a href="logout.php">Uitloggen</a>
</body>
</html>