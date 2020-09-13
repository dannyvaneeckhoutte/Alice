<?php

include ("includes/header.php");

//include the database connection
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$categorie = mysqli_real_escape_string($mysqli, $_POST['categorie']);
	$gerecht = mysqli_real_escape_string($mysqli, $_POST['gerecht']);
   $prijs = mysqli_real_escape_string($mysqli, $_POST['prijs']);
   $actief = mysqli_real_escape_string($mysqli, $_POST['actief']);

		
	// checking empty fields
	if(empty($categorie) || empty($gerecht) || is_null($prijs) || is_null($actief) ) {
				
		if(empty($categorie)) {
			echo "<font color='red'>Categorie veld is leeg.</font><br/>";
		}
		
		if(empty($gerecht)) {
			echo "<font color='red'>Gerecht veld is leeg.</font><br/>";
		}
		
		if(is_null($prijs)) {
			echo "<font color='red'>prijs veld is leeg.</font><br/>";
    }
    
    if(is_null($actief)) {
			echo "<font color='red'>Actief veld is leeg.</font><br/>";
    }
    
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Keer terug</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO gerechten(categorie, gerecht, prijs, actief) VALUES('$categorie', '$gerecht', '$prijs', '$actief')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='admin.php'>Bekijk resultaat</a>";
	}
}

include ("includes/footer.php");

?>