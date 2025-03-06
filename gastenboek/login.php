<?php
include "connectpdo.php";


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Databaseverbinding en controle gebruikersgegevens
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
</head>
<body>
    <h2>Inloggen</h2>
    <form method="post" action="login_process.php">
        <label for="username">Gebruikersnaam:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Wachtwoord:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Inloggen">
    </form>
</body>
</html>

