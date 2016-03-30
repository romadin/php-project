<?php 
include 'navbar.php';
?>

<form method="POST">
<h3>Celsius naar Fahrenheit</h3>
<input type="number" name="celsius" ><br><br>
<input type="submit" name="verzend" value="Bereken">
</form>

<?php 
function celsiusNaarFahrenheit($waarde) {
    $fahrenheit = ($waarde *1.8) + 32;
    return $fahrenheit;
}

if (isset($_POST['verzend'] )) {
    $celsius = $_POST['celsius'];
    if (!empty($celsius)){
        echo celsiusNaarFahrenheit($celsius);
    }
    else{
        echo "Voer waarde in";
    }   
  }
?>


<br>

<form method="POST">
<h3>Is het deelbaar door 3</h3>
<input type="number" name="delen" ><br><br>
<input type="submit" name="verzend1" value="Bereken">
</form>

<?php 
if (isset($_POST['verzend1'] )) {
    $number = $_POST['delen'];
    if (!empty($number)){
        delenDoorDrie($_POST['delen']);
    }
    else{
        echo "voer waarde in";
    }   
  }




function delenDoorDrie($number) {
    $waarde = $number;
    if($waarde % 3 == 0) {
        $isdeelbaar = true;
    } else {
        $isdeelbaar = false;
    }
    if($isdeelbaar == 0){
        echo $waarde.' is niet deelbaar door 3';
        } else {
        echo $waarde.' is wel deelbaar door 3';
		}
    
}
echo "<br>";
?>

<form method="POST">
<h3>Tekst omdraaien</h3>
<input type="string" name="omdraaien" ><br><br>
<input type="submit" name="verzend2" value="Draai om">
</form>

<?php
    function draaiOm($waarde) {
         echo strrev($waarde);
    }   
    
    if (isset($_POST['verzend2'] )) {
    $invoer = $_POST['omdraaien'];
    if (!empty($invoer)){
      echo draaiOm($invoer);
    }
    else{
        echo "voer waarde in";
    }   
  }

echo "<br><br>";


