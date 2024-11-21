<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITL12_UE3</title>
    <!-- Primzahlenberechnung:
    - Auf einer HTML Seite sind alle Primzahlen von 1 bis zur eingegeben Zahl auszugeben.
    - Tipp: Jede Zahl durch alle Zahlen von 2 bis n/2 dividieren
    -->
</head>
<body>
    <h1>Primzahlenberechnung</h1>
    <!-- Formular zur Eingabe der Zahl -->
    <form method="POST" action="index.php">
        <label for="zahl">Zahl:</label>
        <input type="text" id="zahl" name="zahl">
        <input type="submit" value="Berechnen">
    </form>


    <?php
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            // Eingegebene Zahl lesen
            $zahl = $_POST["zahl"];

            // Erstellen eines Arrays für die Primzahlen
            $primzahlen = array();

            // Schleife von 1 bis zur eingegebenen Zahl
            for($i = 1; $i <= $zahl; $i++) {
                // Variable zum Prüfen, ob i eine Primzahl ist (Wenn Eingabe = 1 -> 
                // Schleife wird durch j <= i/2 nicht ausgeführt)
                // -> 1 wird dem array hinzugefügt.
                $isPrimzahl = true;
                
                // Überprüfen, ob $i eine Primzahl ist
                for($j = 2; $j <= $i/2; $j++) {

                    // Wenn $i durch $j teilbar ist -> $i = keine Primzahl
                    if($i % $j == 0) {
                        // Variable zum Prüfen wird auf false gesetzt
                        $isPrimzahl = false;

                        // Schleife wird abgebrochen
                        break;
                    }
                }

                // Wenn $i eine Primzahl ist, füge sie zum Array hinzu
                if($isPrimzahl) {
                    // Zahl wird array hinzugefügt
                    array_push($primzahlen, $i);
                }
            }
            // Ausgabe 
            echo("Primzahlen von 1 bis " . $zahl . " : ");

            // Ausgabe der Liste
            for($i = 0; $i < count($primzahlen); $i++) {

                if($i == count($primzahlen)-1) {
                    echo($primzahlen[$i]);
                    break;
                } 
                
                echo($primzahlen[$i] . ", ");
            }
        }
    ?>
    <br>
    <a href="UE3_2.php">Aufgabe 2</a>   
    
</body>
</html>