<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (!empty($username) && !empty($password) && !empty($email)) {
        // Check if the username already exists
        $stmt_check = $conn->prepare("SELECT username FROM users WHERE username = :username");
        $stmt_check->bindParam(':username', $username);
        $stmt_check->execute();
        $existing_user = $stmt_check->fetch();

        if ($existing_user) {
            $error = "De gebruikersnaam is al in gebruik. Kies een andere.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        
            $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->bindParam(':email', $email);
        
            if ($stmt->execute()) {
                header("Location: login.php");
                exit();
            } else {
                $error = "Er is een fout opgetreden. Probeer het opnieuw.";
            }
        }
    } else {
        $error = "Alle velden zijn verplicht.";
    }
}


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
</head>
<body>
    <h2>Registreren</h2>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="post" action="register.php">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Wachtwoord:</label>
        <input type="password" id="password" name="password" required><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>
        <input type="submit" value="Registreren">
    </form>
    <a href="login.php">Inloggen</a>
</body>
</html>


