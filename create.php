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
  }
}


 ?>
<?php require 'includes/header.php'; ?>
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