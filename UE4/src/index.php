<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITL12_UE4_Nouira</title>
</head>
<body>
    <h1>Kalorienrechner</h1>
    <form method="POST" action="">
        <label for="geschlecht">Geschlecht:</label>
        <select id="geschlecht" name="geschlecht">
            <option value="m">Männlich</option>
            <option value="w">Weiblich</option>
        </select><br>

        <label for="alter">Alter:</label>
        <input type="number" id="alter" name="alter" required><br>

        <label for="gewicht">Gewicht in kg:</label>
        <input type="number" id="gewicht" name="gewicht" required><br>

        <label for="groesse">Größe in cm:</label>
        <input type="number" id="groesse" name="groesse" required><br>

        <label for="sitzend">Sitzend (Stunden):</label>
        <input type="number" id="sitzend" name="sitzend" required><br>

        <label for="buero">Büro (Stunden):</label>
        <input type="number" id="buero" name="buero" required><br>

        <label for="stehend">Stehend/gehend (Stunden):</label>
        <input type="number" id="stehend" name="stehend" required><br>

        <label for="anstrengend">Anstrengende Tätigkeit (Stunden):</label>
        <input type="number" id="anstrengend" name="anstrengend" required><br>

        <input type="submit" value="Berechnen">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Werte durch die POST-Anfrage erhalten
        $geschlecht = $_POST["geschlecht"];
        $alter = $_POST["alter"];
        $gewicht = $_POST["gewicht"];
        $groesse = $_POST["groesse"];
        $sitzend = $_POST["sitzend"];
        $buero = $_POST["buero"];
        $stehend = $_POST["stehend"];
        $anstrengend = $_POST["anstrengend"];

        // Schlafende Stunden berechnen (Da Schlaf nicht angegeben werden sollte)
        $schlafen = 24 - ($sitzend + $buero + $stehend + $anstrengend);

        // Für den Fall, dass der User diverse Stundenzahlen angibt, die über 24 Stunden in Summe ergeben
        if($schlafen < 0 ) {
            echo("Woher haben Sie denn mehr als 24 Stunden an einem Tag? Geben Sie die Stunden erneut ein und versuchen Sie es nochmal!");
            exit();
        }

        // Berechnung des Grundumsatzes laut Formel des Laborberichtes
        if ($geschlecht == "w") {
            $grundumsatz = 655.1 + (9.6 * $gewicht) + (1.8 * $groesse) - (4.7 * $alter);
        } else {
            $grundumsatz = 66.47 + (13.7 * $gewicht) + (5 * $groesse) - (6.8 * $alter);
        }

        // PAL-Faktoren laut Laborbericht (Durchschnitt)
        $pal_schlafen = 0.95;
        $pal_sitzend = 1.2;
        $pal_buero = 1.45;
        $pal_stehend = 1.85;
        $pal_anstrengend = 2.2;

        // Berechnung des durchschnittlichen PAL-Faktors
        $gesamtstunden = $schlafen + $sitzend + $buero + $stehend + $anstrengend;

        $pal_durchschnitt = ($schlafen * $pal_schlafen + $sitzend * $pal_sitzend + $buero * 
                            $pal_buero + $stehend * $pal_stehend + $anstrengend * $pal_anstrengend) / 24;

        // Berechnung des täglichen Kalorienbedarfs
        $kalorienbedarf = $grundumsatz * $pal_durchschnitt;

        echo("<h2>Ergebnis:</h2>");
        echo("Täglicher Kalorienbedarf: " . round($kalorienbedarf) . " kcal");
        echo("<br>");
        echo("Um abzunehmen, sollten Sie ca. " . round($kalorienbedarf - 400) . " kcal zu sich nehmen");
        echo("<br>");
        echo("Um zuzunehmen, sollten Sie ca. " . round($kalorienbedarf + 400) . " kcal zu sich nehmen");
        echo("<br>");
    }
    ?>
</body>
</html>