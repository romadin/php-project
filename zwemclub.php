<table border="1" style="width:60%">
<?php
include 'navbar.php';
    $alle["De spartelkuikens"] = 25;
	$alle["De waterbuffels"] = 32;
	$alle["Plonsmderin"] = 11;
    $alle["Bommetje"] = 23;

foreach ($alle as $label => $waarde) {
   echo "<tr><td>Club ". $label ."</td><td> heeft ". $waarde ." zwemmers</td><td>";
        for ($i=1;$waarde/5 >= $i; $i++){
            echo "<img src=https://www.woerden.nl/sites/default/files/styles/icon-onderwerp/public/Iconen/Grey/zwemmen_0_0.png?itok=y8CCCnDt>";
        }
  echo "</td></tr>";
}

?>
</table>