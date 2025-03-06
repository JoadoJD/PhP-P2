<?php
include "connectpdo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $isAdmin = 0; // Standaard is gebruiker geen beheerder

    $sql = "INSERT INTO users (username, email, password, is_admin) VALUES ('$username', '$email', '$password', '$isAdmin')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect naar de hoofdpagina na registratie
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie</title>
</head>
<body>
    <h2>Registratie</h2>
    <form method="post" action="register_process.php">
        <label for="username">Gebruikersnaam:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Wachtwoord:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Registreren">
    </form>
</body>
</html>

