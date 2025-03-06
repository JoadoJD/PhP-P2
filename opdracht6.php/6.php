<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemiddelde Berekenen</title>
</head>
<body>
    <!-- HET formulier-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Voer cijfers in met spaties ertussen:
        <input type="text" name="cijfers">
        <input type="submit" value="Bereken Gemiddelde">
    </form>
</body>
</html>

<?php
function BepaalGemiddelde($cijfers) {
    // Controleer of de array niet leeg is
    if (empty($cijfers)) {
        return "De array is leeg. Voeg getallen toe om het gemiddelde te berekenen.";
    }

    // Initialisatie van de som en het aantal elementen
    $som = 0;
    $aantal = count($cijfers);

    // Loop door de array en tel de getallen op
    foreach ($cijfers as $cijfer) {
        $som += $cijfer;
    }

    // Bereken het gemiddelde
    $gemiddelde = $som / $aantal;

    return $gemiddelde;
}

// Voorbeeldgebruik
$cijfers = array(2, 3, 4);
$gemiddelde = BepaalGemiddelde($cijfers);
echo $gemiddelde;
?>
 
