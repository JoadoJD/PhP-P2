<?php
//gemaakt door: joaquim

require_once "user.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = new User();
    $user->username = $_POST["username"];

    if ($user->loginUser($_POST["password"])) {
        echo "<script>alert('Login succesvol!'); window.location = 'index.php';</script>";
        exit();
    }

    $errorMessage = "Ongeldige gebruikersnaam of wachtwoord.";
}
?>

<!DOCTYPE html>
<html lang="nl">
<body>
    <h3>Inloggen</h3>
    
    <?php if (!empty($errorMessage)): ?>
        <p style="color: red;"><?= htmlspecialchars($errorMessage) ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Gebruikersnaam:</label>
        <input type="text" name="username" required>
        <br>
        <label>Wachtwoord:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
    
    <a href="register_form.php">Registreer hier</a>
</body>
</html>