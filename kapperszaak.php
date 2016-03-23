<table border ="1" style = "width:60%"><tr> 
<?php
include 'navbar.php';
    $agenda ["10:00"] = "klant 1";
    $agenda ["10:30"] = "";
    $agenda ["11:00"] = "klant 2";
    $agenda ["12.00"] = "";
    $agenda ["13.00"] = "klant 3";
    $agenda ["14.00"] = "";

    
foreach ($agenda as $label => $waarde){
    echo("<td>" . $label . "</td><td>" . $waarde . "</td></tr>");
    
    if (empty($waarde)){
        echo "<li> Deze tijden zijn nog beschikbaar " . $label."</li><br>";
    }
}    


?>
</table>