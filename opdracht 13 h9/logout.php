<?php
session_start(); // start of hervat de sessie
session_unset(); // verwijder alle sessievariabelen
session_destroy(); // vernietig de sessie

header("location: login.php");
exit();
?>