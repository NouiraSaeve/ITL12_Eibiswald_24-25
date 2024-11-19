<html>
 <head>
  <title>PHP UE2 Zusatz</title>
 </head>
 <body>
   <!-- Formular wird erstellt -->
   <form method="POST" action="zusatz.php">
    <label for="liter_1">Liter 1:</label>
    <input type="text" id="liter_1" name="liter_1">
    <br>
    <label for="liter_2">Liter 2:</label>
    <input type="text" id="liter_2" name="liter_2">
    <br>
    <label for="preis">Preis pro Liter:</label>
    <input type="text" id="preis" name="preis">
    <input type="submit" value="Berechnen">
   </form>

   <?php
      if($_SERVER["REQUEST_METHOD"] == "POST") {
         // Erstellen der Variablen -> Werte werden eingegeben
         $liter_1 = $_POST["liter_1"];
         $liter_2 = $_POST["liter_2"];
         $preis = $_POST["preis"];

         // Kosten werden berechnet
         $kosten = ($liter_1 + $liter_2) * $preis;

         // Ausgabe
         echo("Die Benzinkosten betragen für " . ($liter_1 + $liter_2) . " Liter " . $kosten . "€.");
      }
   ?>
 </body>
</html>



