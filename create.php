<?php
require 'db.php';
$message = '';
if (isset ($_POST['categorie'])  && isset($_POST['gerecht'])  && isset($_POST['prijs'])  && isset($_POST['actief']) ) {
  $categorie = $_POST['categorie'];
  $gerecht = $_POST['gerecht'];
  $prijs = $_POST['prijs'];
  $actief = $_POST['actief'];

  $sql = 'INSERT INTO gerechten(categorie, gerecht, prijs, actief) VALUES(:categorie, :gerecht, :prijs, :actief)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':categorie' => $categorie, ':gerecht' => $gerecht, ':prijs' => $prijs, ':actief' => $actief])) {
      $message = 'Gerecht succesvol toegevoegd!';
      // Misschien toch op pagina laten?
      header("Refresh:2; url=admin.php");
   }
}


 ?>
<?php require 'includes/header.php'; ?>
<?php 
   session_start();
   if(isset($_SESSION['sessie_gebr_id']) && $_SESSION['sessie_gebr_id'] != "") {
    echo '<div class="logout-wrapper" style="position:relative; text-align:center; padding: 0.5em">';
    echo '<h4>Welkom, '.$_SESSION['sessie_gebruiker'].'</h4>';
    echo '<a style="color: white"href="logout.php">Logout</a>';
    echo '</div>';
      echo '<div class="logout-wrapper" style="position:relative; text-align:right; padding: 0.5em">';
      echo '<h4>Welcome '.$_SESSION['sessie_gebruiker'].'</h4>';
      echo '<a style="color: white"href="logout.php">Logout</a>';
      echo '</div>';

      } else { 
         header("Refresh:1; url=login.php");
      }
?>
<div class="container">
   <div class="card mt-5">
      <div class="card-header">
         <h2>Gerecht toevoegen</h2>
      </div>
      <div class="card-body">

         <?php if(!empty($message)): ?>
         <div class="alert alert-success">
            <?= $message; ?>
         </div>
         <?php endif; ?>

         <form method="post">
            <div class="from-group">
               <label for="categorie">Categorie</label>
               <br>
               <select name="categorie" id="categorie" class="mb-3" required>
                  <option value="">-- selecteer</option>
                  <option value="ontbijt">eat-Ontbijt</option>
                  <option value="lunch">eat-Lunch</option>
                  <option value="kids">eat-Kids</option>
                  <option value="zoet">eat-Zoet</option>
                  <option value="warm">drink-Warm</option>
                  <option value="fris">drink-Fris</option>
                  <option value="bier">drink-Bier</option>
                  <option value="geestrijk">drink-Geestrijk</option>
                  <option value="bubbels">drink-Bubbels</option>
                  <option value="rood">drink-Rood</option>
                  <option value="wit">drink-Wit</option>
                  <option value="rose">drink-Rosé</option>
               </select>

            </div>
            <div class="form-group">
               <label for="gerecht">Gerecht</label>
               <input type="text" name="gerecht" id="name" class="form-control" required>
            </div>
            <div class="form-group">
               <label for="prijs">Prijs</label>
               <input type="number" name="prijs" id="prijs" class="form-control" min="0" max="99" step=".01" required>
            </div>
            <div class="form-group">
               <fieldset>
                  <legend>Beschikbaar als takeaway?</em></legend>
                  <input type="radio" name="actief" value="1" />
                  <label for="actief">Ja</label>
                  <input type="radio" name="actief" value="0" />
                  <label for="actief">Nee</label>
               </fieldset>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-info">Toevoegen</button>
            </div>
         </form>
      </div>
   </div>
   <div class="card mt-5">
      <div class="card-header">
         <h2>Gerecht toevoegen</h2>
      </div>
      <div class="card-body">

         <?php if(!empty($message)): ?>
         <div class="alert alert-success">
            <?= $message; ?>
         </div>
         <?php endif; ?>

         <form method="post">
            <div class="from-group">
               <label for="categorie">Categorie</label>
               <br>
               <select name="categorie" id="categorie" class="mb-3" required>
                  <option value="Lunch">Lunch</option>
                  <option value="Zoet">Zoet</option>
               </select>

            </div>
            <div class="form-group">
               <label for="gerecht">Gerecht</label>
               <input type="text" name="gerecht" id="name" class="form-control" required>
            </div>
            <div class="form-group">
               <label for="prijs">Prijs</label>
               <input type="number" name="prijs" id="prijs" class="form-control" min="0" max="99" required>
            </div>
            <div class="form-group">
               <fieldset>
                  <legend>Actief?</em></legend>
                  <input type="radio" name="actief" value="1" checked />
                  <label for="actief">Ja</label>
                  <input type="radio" name="actief" value="0" />
                  <label for="actief">Nee</label>
               </fieldset>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-info">Toevoegen</button>
            </div>
         </form>
      </div>
   </div>
</div>
<?php require 'includes/footer.php'; ?>