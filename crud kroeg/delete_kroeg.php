<?php
// auteur: Joaquim
// functie: verwijder een kroeg op basis van de kroegcode
include 'functions.php';

// Haal een kroeg uit de database
if(isset($_GET['kroegcode'])){

    // test of insert gelukt is
    if(deletekroeg($_GET['kroegcode']) == true){
        echo '<script>alert("kroegcode: ' . $_GET['kroeg code'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_kroeg.php'); </script>";
    } else {
        echo '<script>alert("kroeg is NIET verwijderd")</script>';
    }
}
?>
