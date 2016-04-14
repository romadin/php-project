<!DOCTYPE html>
<style><?php include 'Style.css'; ?></style>
<?php 
include 'navbar.php';
include_once 'auto.php';
include_once 'Carlijst.php';
?>
<body>
<div class="container-fluid">
      <div class="row">

<div class="col-sm-12">
<form method="POST">

<div id = "label"><label for="Merk">Merk:</label></div>
<select name="Merk">
  <option value="">Alle merken</option>
  <option value="BMW">BMW</option>
  <option value="Audi">Audi</option>
  <option value="Mercedes">Mercedes</option>
  <option value="Porsche">Porsche</option>
  </div>
</select><br><br>
<div class="col-sm-12"><label for="Minimaleprijs">Minimale prijs:</label> <input type="number" name="MinimalePrijs" ><br></div>
<div class="col-sm-12"><label for="Maximaleprijs">Maximale prijs:</label> <input type="number" name="MaximalePrijs" ><br><br>
    <input type="submit" name="verzend" value="Submit">
</form>
</div>

<?php 

$autoLijst = new Lijst();
$autoLijst->voegAutoToe (new auto("Audi", " R8", 198910,"afbeeldingAuto/audi1.jpg"));
$autoLijst->voegAutoToe (new auto("Audi", " A3", 27140,"afbeeldingAuto/audi2.jpg"));
$autoLijst->voegAutoToe (new auto("Audi", " A9", 115570,"afbeeldingAuto/audi3.jpg"));

$autoLijst->voegAutoToe (new auto("Mercedes", " SLS", 260200,"afbeeldingAuto/mercedes1.jpg"));
$autoLijst->voegAutoToe (new auto("Mercedes", " V Klasse", 56670,"afbeeldingAuto/mercedes2.jpg"));

$autoLijst->voegAutoToe (new auto("BMW", " 6 Serie", 92501,"afbeeldingAuto/bmw1.jpg"));
$autoLijst->voegAutoToe (new auto("BMW", " X6", 88100,"afbeeldingAuto/bmw2.jpg"));

$autoLijst->voegAutoToe (new auto("Porsche", " Macan", 77900,"afbeeldingAuto/porsche2.jpg"));
$autoLijst->voegAutoToe (new auto("Porsche", " Panemera", 155300,"afbeeldingAuto/porsche1.jpg"));

?>

<?php

if(isset($_POST['verzend'])){
    $merk = $_POST['Merk'];
    $minprijs = $_POST['MinimalePrijs'];
    $maxprijs = $_POST['MaximalePrijs'];
    
    if($minprijs == ""){
        $minprijs = 0;
    }
    if ($maxprijs == ""){
        $maxprijs = 2000000;
    }
}
else {
    foreach ($autoLijst->getautoLijst() as $auto){
            echo "<div class='col-sm-3' style= 'background-image: url( " . $auto->getImage() . ")'>" ."<div id ='text'>". $auto->getMerk() . $auto->getType() ."<br>". '&euro;'. $auto->getPrijs(). "</div></div>";
    }
}
    


foreach ($autoLijst->getautoLijst() as $auto){
        if($merk == $auto->getMerk() && $minprijs <= $auto->getPrijs() && $maxprijs >= $auto->getPrijs()){
            echo "<div class='col-sm-3' style= 'background-image: url( " . $auto->getImage() . ")'>" ."<div id ='text'>". $auto->getMerk() . $auto->getType() ."<br>".  $auto->getPrijs(). "</div></div>";
        }
        
        if($merk == "" && $minprijs <= $auto->getPrijs() && $maxprijs >= $auto->getPrijs()){
            echo "<div class='col-sm-3' style= 'background-image: url( " . $auto->getImage() . ")'>" ."<div id ='text'>". $auto->getMerk() . $auto->getType() ."<br>".  $auto->getPrijs(). "</div></div>";
        }
}
?>
    </div>
</div>







<?php 
include 'footer.php';
?>
</body>
</html>