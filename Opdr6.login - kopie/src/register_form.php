<?php
//gemaakt door: joaquim
require_once "../vendor/autoload.php";
use Login\classes\User;

//require_once "user.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = new User();
    $user->username = $_POST["username"];
    $user->email = $_POST["email"];
    $user->setPassword($_POST["password"]);

    if (empty($user->registerUser())) {
        echo "<script>alert('Registratie succesvol'); window.location = 'login_form.php';</script>";
        exit();
    }

    $errorMessage = "Fout: " . implode(", ", $user->registerUser());
}
?>

<!DOCTYPE html>
<html lang="nl">
<body>
    <h3>Registreren</h3>
    <?php if (!empty($errorMessage)): ?>
        <p style="color: red;"><?= htmlspecialchars($errorMessage) ?></p>
    <?php endif; ?>
    
    <form method="POST">
        <label>Gebruikersnaam:</label>
        <input type="text" name="username" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Wachtwoord:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Registreer</button>
    </form>
    <a href="index.php">Terug</a>
</body>
</html>