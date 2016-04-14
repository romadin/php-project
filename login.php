<?php
include'navbar.php';

    if(!empty($_GET["voornaam"]) &&
    !empty($_GET["adres"]) &&
    !empty($_GET["email"]) &&
    !empty($_GET["wachtwoord"])){
        
    } else {
        echo "Voer alle velden in";
    }

echo $_GET["voornaam"]."<br>";
echo $_GET["adres"]."<br>";
echo $_GET["email"]."<br>";

include'footer.php';



?>