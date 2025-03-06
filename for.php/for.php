<?php
//auteur: joaquim
//functie: uitleg for loop

$som = 0
for ($teller=0; $teller <= 1000; $teller=$teller+10) {
    echo "teller $teller<br>";
}

    $som = $som + $teller;
    echo "som: $som<br>";

$a = 0;
while ($a <= 10) {
    echo "a: $a<br>";
}

if($a < 10) {
    $a++;
}
else {
    $a = $a +10;
}
?>
