<?php
// Basisbewerkingen
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero.");
    }
    return $a / $b;
}

// Geavanceerde bewerkingen
function power($a, $b) {
    return pow($a, $b);
}

function modulo($a, $b) {
    return $a % $b;
}

function sqrt_custom($a) {
    if ($a < 0) {
        throw new Exception("Square root of negative number.");
    }
    return sqrt($a);
}

function round_custom($value, $precision) {
    return round($value, $precision);
}


// Opslaan in database
function save_to_database($db, $expression, $result) {
    $stmt = $db->prepare('INSERT INTO calculations (expression, result) VALUES (:expression, :result)');
    $stmt->bindValue(':expression', $expression, SQLITE3_TEXT);
    $stmt->bindValue(':result', $result, SQLITE3_FLOAT);
    $stmt->execute();
}

// Expressie evalueren
function evaluate_expression($expression) {
    // Gebruik eval met voorzichtigheid, dit kan veiligheidsrisico's opleveren
    $result = eval("return $expression;");
    return $result;
}

$precision = 2;

function set_precision($new_precision) {
    global $precision;
    $precision = $new_precision;
}

// Hoofdlus voor invoer en uitvoer
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST["expression"];
    $precision = isset($_POST["precision"]) ? intval($_POST["precision"]) : 2;

    $db = setup_database();

    try {
        $result = evaluate_expression($expression);
        $result = round_custom($result, $precision);
        save_to_database($db, $expression, $result);
        echo "Resultaat: " . $result;
    } catch (Exception $e) {
        echo "Fout: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Uitgebreide Rekenmachine</title>
</head>
<body>
    <h1>Uitgebreide Rekenmachine</h1>
    <form method="post">
        <label for="expression">Berekening:</label>
        <input type="text" id="expression" name="expression" required>
        <br><br>
        <label for="precision">Afrondingsprecisie:</label>
        <input type="number" id="precision" name="precision" value="2">
        <br><br>
        <input type="submit" value="Bereken">
    </form>

</body>
</html>
