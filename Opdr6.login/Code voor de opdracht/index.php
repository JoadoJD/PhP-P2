<?php
//gemaakt door: joaquim
require_once "user.php";
$user = new User();

if (isset($_GET["logout"])) {
    $user->logout();
}
?>

<!DOCTYPE html>
<html lang="nl">
<body>
    <h3>Welkom bij de Homepagina</h3>

    <?php if ($user->isLoggedIn()): ?>
        <p>Je bent nu ingelogd als: <?= $_SESSION["user"] ?></p>
        <a href="?logout=true">Uitloggen</a>
    <?php else: ?>
        <p>Je bent niet ingelogd.</p>
        <a href="login_form.php">Inloggen</a>
        <a href="register_form.php">Registreren</a>
    <?php endif; ?>
</body>
</html>