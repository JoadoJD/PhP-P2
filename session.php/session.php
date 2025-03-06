<?php
//auteur: joaquim
// functie: uitleg session

$teller = 0;
$teller++;
echo $teller++;

session_start();

//test is er al een sessie actief??
if (isset($_SESSION['teller']) == false ) {
    // nee, maak hem dan
    $_SESSION['teller'] = 0;
    $_SESSION['login'] = "piet";
} else {
    echo "sessie bestaat<br>";
    //teller met 1 ophogen
    $_SESSION['teller']++;
}

//print sessie variable
echo "inhoud sessie: " . $_SESSION['teller'];

?>