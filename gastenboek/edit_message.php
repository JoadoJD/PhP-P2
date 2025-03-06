<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['is_admin'] != 1) {
    header("Location: login.php"); // Redirect naar de inlogpagina als de gebruiker geen beheerder is
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message_id'])) {
    // Bewerkingslogica voor bericht
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bericht bewerken</title>
</head>
<body>
    <h2>Bericht bewerken</h2>
    <form method="post" action="edit_message_process.php">
        <textarea name="new_message" rows="4" cols="50" required></textarea><br>
        <input type="hidden" name="message_id" value="<?php echo $message_id; ?>">
        <input type="submit" value="Opslaan">
    </form>
</body>
</html>

