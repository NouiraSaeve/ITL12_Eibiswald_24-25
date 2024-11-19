<html>
 <head>
  <title>PHP UE2 Zusatz</title>
 </head>
 <body>
 <?php
    // Erstellen der Variablen -> Werte zuteilen
    $liter_1 = 40.5;
    $liter_2 = 1.7;

    // Variable für den Preis pro Liter
    $preis = 1.499;

    // Kosten berechnen
    $kosten = ($liter_1 + $liter_2) * $preis;

    // Ausgabe
    echo("Die Benzinkosten betragen für " . ($liter_1 + $liter_2) . " Liter " . $kosten . "€.");
 ?>
 </body>
</html>



