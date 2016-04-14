<!DOCTYPE html>
<style><?php include 'Style.css'; ?></style>
<html>
<?php 
include'navbar.php';
?>
<body>
<div id ="forum">
    <form action = "login.php" method = "get">
        Naam: <input type="text" name="voornaam" ><br>
        Adres: <input type="text" name="adres"><br>
        Email: <input type="text" name="email"><br>
        Wachtwoord: <input type="password" name="wachtwoord"<br><br>
        <input type="submit" name="verzend" value="Verzend">
    </from>    
</div>

<?php 



if(isset($_GET["voornaam"]) && strlen($_GET["voornaam"] >1)){
   
}
//  if(isset($_GET["wachtwoord"])){
//     $modified = str_repeat( "*", strlen( "secretpass" ) );
//     echo $modified; 
//  }

//  $output_password = str_repeat ('*', strlen ($input_password));

// $modified = str_repeat( "*", strlen( "secretpass" ) );

// echo $modified; 

?>







<?php 
include'footer.php';
?>
</body>
</html>