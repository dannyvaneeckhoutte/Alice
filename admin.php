<?php
//Connect to DB
include_once("config.php");

$resultLunch = mysqli_query($mysqli, "SELECT * FROM gerechten WHERE categorie = 'Lunch' ORDER BY id DESC");
$resultZoet = mysqli_query($mysqli, "SELECT * FROM gerechten WHERE categorie = 'Zoet' ORDER BY id DESC");

?>

<?php include ("includes/header.php") ?>

<a href="add.html">Nieuw gerecht toevoegen</a>
<h3>Lunch</h3>
<table>

   <tr>
      <th>Categorie</th>
      <th>Gerecht</th>
      <th>Prijs</th>
      <th>Actief?</th>
      <th></th>
   </tr>
   <?php 
	
	while($resLunch = mysqli_fetch_array($resultLunch)) { 		
		echo "<tr>";
		echo "<td>".$resLunch['categorie']."</td>";
		echo "<td>".$resLunch['gerecht']."</td>";
      echo "<td>€".$resLunch['prijs']."</td>";	
      echo "<td>".$resLunch['actief']."</td>";	
		echo "<td><a href=\"edit.php?id=$resLunch[id]\">Aanpassen</a> | <a href=\"delete.php?id=$resLunch[id]\" onClick=\"return confirm('Zeker dat je dit gerecht wil verwijderen??')\">Verwijderen</a></td>";		
	}
	?>
</table>
<h3>Zoet</h3>

<table>

   <tr>
      <th>Categorie</th>
      <th>Gerecht</th>
      <th>Prijs</th>
      <th>Actief?</th>
      <th></th>
   </tr>
   <?php 
	
	while($resZoet = mysqli_fetch_array($resultZoet)) { 		
		echo "<tr>";
		echo "<td>".$resZoet['categorie']."</td>";
		echo "<td>".$resZoet['gerecht']."</td>";
      echo "<td>€".$resZoet['prijs']."</td>";	
      echo "<td>".$resZoet['actief']."</td>";	
		echo "<td><a href=\"edit.php?id=$resZoet[id]\">Aanpassen</a> | <a href=\"delete.php?id=$resZoet[id]\" onClick=\"return confirm('Zeker dat je dit gerecht wil verwijderen??')\">Verwijderen</a></td>";		
	}
	?>
</table>

<?php include ("includes/footer.php") ?>