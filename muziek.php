<?php
include 'navbar.php';
?>
<table border ="1" style = "width:60%"><tr> 
<?php 
$artiest = array
   (
   array("Micheal Jackson"," Bad",12),
   array("Drake"," Nothing was the same ",13),
   array("Meek Mill","Dreamchaser",14),
   );
  ?> 
<td><b>Artiest</b></td>
<td><b>Album</b></td>
<td><b>Nummers</b></td>
<tr>
<?php
  for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col < 3; $col++) {
        echo "<td>".$artiest[$row][$col]."</td>";
  }
  echo "</tr>";
}

?>
</table>