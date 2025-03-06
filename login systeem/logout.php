<?php
session_start();

// Controleer of de gebruiker is ingelogd
if (isset($_SESSION['user_id'])) {
    // Als de gebruiker is ingelogd, vernietig de sessie om uit te loggen
    session_destroy();
}

// Doorsturen naar de inlogpagina na uitloggen
header("Location: login.php");
exit();
?>
