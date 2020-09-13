<?php
//Connect to DB
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM gerechten ORDER BY categorie ASC"); // using mysqli_query instead
?>

<?php include ("includes/header.php") ?>

<a href="add.html">Nieuw gerecht toevoegen</a><br /><br />

<table>

   <tr>
      <th>Categorie</th>
      <th>Gerecht</th>
      <th>Prijs</th>
      <th>Actief?</th>
      <th></th>
   </tr>
   <?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['categorie']."</td>";
		echo "<td>".$res['gerecht']."</td>";
      echo "<td>".$res['prijs']."</td>";	
      echo "<td>".$res['actief']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Aanpassen</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Zeker dat je dit gerecht wil verwijderen??')\">Verwijderen</a></td>";		
	}
	?>
</table>

<?php include ("includes/footer.php") ?>