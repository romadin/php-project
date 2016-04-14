<?php 
include 'navbar.php';
include_once 'auto.php';
include_once 'Carlijst.php';

?>

<form method="POST">
    Merk:<br>
<select name="Merk">
  <option value="">Alle merken</option>
  <option value="BMW">BMW</option>
  <option value="Audio">Audio</option>
</select><br><br>
    Minimale prijs:<br> <input type="number" name="leeftijd" ><br><br>
    Maximale prijs:<br> <input type="number" name="leeftijd" ><br><br>
    <input type="submit" name="verzend" value="Submit">
</form>

<?php 

$newAuto = new Lijst();
$newAuto->voegAutoToe (new auto("Audi", "auto", 12000,"afbeeldingAuto/audi1.jpg"));
$newAuto->voegAutoToe (new auto("Audi", "auto", 12000,"afbeeldingAuto/audi1.jpg"));
$newAuto->voegAutoToe (new auto("Audi", "auto", 12000,"afbeeldingAuto/audi1.jpg"));




?>







<?php 
include 'footer.php';
?>