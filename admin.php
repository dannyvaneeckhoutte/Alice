<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM takeaway ORDER BY id DESC"); // using mysqli_query instead
?>

<?php include ("includes/header.php") ?>

<a href="add.html">Nieuw gerecht toevoegen</a><br /><br />

<table>

  <tr>
    <th>Categorie</th>
    <th>Gerecht</th>
    <th>Prijs</th>
    <th>Actief?</th>
    <th>Update</th>
  </tr>
  <?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['categorie']."</td>";
		echo "<td>".$res['gerecht']."</td>";
    echo "<td>".$res['prijs']."</td>";	
    echo "<td>".$res['actief']."</td>";	

		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
</table>

<?php include ("includes/footer.php") ?>