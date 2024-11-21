<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UE3_Aufgabe_2</title>
    <script>
        console.log("File found");
    </script>
</head>
<body>
    <!-- 2. Übung:
-	Ausgabe der Logarithmischen Funktion:
-	Berechne den Log(n) für alle Zahlen von 1 bis 100
-	Gib jeweils Sterne in einer Zeile für jedes Ergebnis aus.
-->
    <h1>Logarithmische Funktion Zahlen 1-100</h1>

    <?php
        // Schleife von 1 bis 100
        for ($i = 1; $i <= 100; $i++) {

            // Berechnung des Logarithmus von n
            $logvalue = log($i);
            // Ausgabe der Menge der Sterne je nach dem welches Value $logvalue hat
            for($j = 0; $j < $logvalue; $j++) {
                echo("*");
            }
            // Zeilenumbruch um Sterne in neue Zeile zu bekommen
            echo("<br>");
        }
    ?>

    


    <br>
    <a href="index.php">Aufgabe 1</a>
</body>
</html>