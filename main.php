<form action="invoerveld" method="POST">
Leeftijd <input type="number" name="leeftijd" ><br><br>
<input type="submit" name="verzend" value="Bereken">
</form>

<?php

 
if (isset($_POST['verzend'] )) {
    $leeftijd = $_POST['leeftijd'];
if (!empty($leeftijd)){
    if($leeftijd < 3){
        echo "Uw kaartje is gratis";
    }
    else if($leeftijd > 65 || $leeftijd <= 12){
        echo"5 euro";
    }
    else{
        echo"10 euro";
    }
}
else{
    echo "voer waarde in";
}
} 
?>
<a href="/kestboom">Kerstboom</a>