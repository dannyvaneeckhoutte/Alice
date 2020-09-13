<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$categorie = mysqli_real_escape_string($mysqli, $_POST['categorie']);
	$gerecht = mysqli_real_escape_string($mysqli, $_POST['gerecht']);
  $prijs = mysqli_real_escape_string($mysqli, $_POST['prijs']);
  $actief = mysqli_real_escape_string($mysqli, $_POST['actief']);	
	
	
	// checking empty fields
	if(empty($categorie) || empty($gerecht) || is_null($prijs) || is_null($actief)) {	
			
		if(empty($categorie)) {
			echo "<font color='red'>Categorie veld is leeg.</font><br/>";
		}
		
		if(empty($gerecht)) {
			echo "<font color='red'>Gerecht veld is leeg.</font><br/>";
    }
    
    if(is_null($prijs)) {
			echo "<font color='red'>Prijs veld is leeg.</font><br/>";
		}
		
		if(is_null($actief)) {
			echo "<font color='red'>Actief veld is leeg.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE gerechten SET categorie='$categorie',gerecht='$gerecht',prijs='$prijs',actief='$actief' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is admin.php
		header("Location: admin.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM gerechten WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$categorie = $res['categorie'];
	$gerecht = $res['gerecht'];
  $prijs = $res['prijs'];
  $actief = $res['actief'];
}
?>
<?php include ("includes/header.php") ?>

<a href="admin.php">Terug naar overzicht</a>
<br /><br />

<form name="form1" method="post" action="edit.php">
   <table border="0">
      <tr>
         <td>Categorie</td>
         <td>
            <input type="text" name="categorie" value="<?php echo $categorie;?>">
            <!-- <select name="categorie" id="categorie">
							<option value="lunch">Lunch</option>
							<option value="zoet">Zoet</option>
						</select> -->
         </td>
      </tr>
      <tr>
         <td>Gerecht</td>
         <td><input type="text" name="gerecht" value="<?php echo $gerecht;?>"></td>
      </tr>
      <tr>
         <td>Prijs</td>
         <td><input type="text" name="prijs" value="<?php echo $prijs;?>"></td>
      </tr>
      <tr>
         <td>Actief</td>
         <td><input type="number" name="actief" value="<?php echo $actief;?>" min="0" max="1"></td>
      </tr>
      <tr>
         <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
         <td><input type="submit" name="update" value="Update"></td>
      </tr>
   </table>
</form>

<?php include ("includes/footer.php") ?>