<?php
require 'config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->bindParam(1, $username); // Bind the value of $username to the first placeholder
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: index.php"); // Redirect to the homepage
                exit();
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "All fields are required.";
    }
    // Gebruiker succesvol ingelogd, stel een sessievariabele in om dit bij te houden
$_SESSION['loggedin'] = true;
// Stel een melding in om weer te geven op de homepagina
$_SESSION['login_message'] = "Succesvol ingelogd.";

}
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
</head>
<body>
    <h2>Inloggen</h2>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <form method="post" action="login.php">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Wachtwoord:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Inloggen">
    </form>
    <a href="register.php">Registreren</a>
</body>
</html>
