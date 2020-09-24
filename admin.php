<?php require 'db.php'; ?>
<?php require 'includes/header.php'; ?>

<?php 
   session_start();
   if(isset($_SESSION['sessie_gebr_id']) && $_SESSION['sessie_gebr_id'] != "") {
<<<<<<< HEAD
      echo '<div class="logout-wrapper" style="position:relative; text-align:center; padding: 0.5em">';
      echo '<h4>Welkom, '.$_SESSION['sessie_gebruiker'].'</h4>';
=======
      echo '<div class="logout-wrapper" style="position:relative; text-align:right; padding: 0.5em">';
      echo '<h4>Welcome '.$_SESSION['sessie_gebruiker'].'</h4>';
>>>>>>> 6427720319898bebc9a1472f55b4a58514f6f1aa
      echo '<a style="color: white"href="logout.php">Logout</a>';
      echo '</div>';

      } else { 
      header('location:login.php');
      }
?>

<div class="container">
<<<<<<< HEAD
  <div class="card mt-5">
    <div class="card-header">
      <h2>Alle gerechten</h2>
    </div>
    <div class="card-body">
      <h2>Ontbijt</h2>
      <table class="table table-responsive-sm">
        <tr>
          <th>ID</th>
          <th>Categorie</th>
          <th>Gerecht</th>
          <th>Prijs</th>
          <th>Actief?</th>
          <th class="mr-0"></th>
        </tr>
        <?php
        $sql = 'SELECT * FROM gerechten WHERE categorie="Ontbijt"';
        $statement = $connection->prepare($sql);
        $statement->execute();
        $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);
        
        foreach($gerechten as $gerecht): ?>

        <tr>
          <td><?= $gerecht->id; ?></td>
          <td><?= $gerecht->categorie; ?></td>
          <td><?= $gerecht->gerecht; ?></td>
          <td><?= $gerecht->prijs; ?></td>
          <td><?= $gerecht->actief; ?></td>
          <td>
            <a href="edit.php?id=<?= $gerecht->id ?>" class="btn btn-info text-xs-right">Edit</a>
            <a onclick="return confirm('Wil je dit gerecht echt verwijderen?')" href="delete.php?id=<?= $gerecht->id ?>"
              class='btn btn-danger'>Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="card-body">
      <h2>Lunch</h2>
      <table class="table table-responsive-sm">
        <tr>
          <th>ID</th>
          <th>Categorie</th>
          <th>Gerecht</th>
          <th>Prijs</th>
          <th>Actief?</th>
          <th></th>
        </tr>
        <?php
        $sql = 'SELECT * FROM gerechten WHERE categorie="Lunch"';
        $statement = $connection->prepare($sql);
        $statement->execute();
        $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);
        
        foreach($gerechten as $gerecht): ?>

        <tr>
          <td><?= $gerecht->id; ?></td>
          <td><?= $gerecht->categorie; ?></td>
          <td><?= $gerecht->gerecht; ?></td>
          <td><?= $gerecht->prijs; ?></td>
          <td><?= $gerecht->actief; ?></td>
          <td>
            <a href="edit.php?id=<?= $gerecht->id ?>" class="btn btn-info">Edit</a>
            <a onclick="return confirm('Wil je dit gerecht echt verwijderen?')" href="delete.php?id=<?= $gerecht->id ?>"
              class='btn btn-danger'>Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="card-body">
      <h2>Kids</h2>
      <table class="table table-responsive-sm">
        <tr>
          <th>ID</th>
          <th>Categorie</th>
          <th>Gerecht</th>
          <th>Prijs</th>
          <th>Actief?</th>
          <th></th>
        </tr>
        <?php
        $sql = 'SELECT * FROM gerechten WHERE categorie="Kids"';
        $statement = $connection->prepare($sql);
        $statement->execute();
        $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);
        
        foreach($gerechten as $gerecht): ?>

        <tr>
          <td><?= $gerecht->id; ?></td>
          <td><?= $gerecht->categorie; ?></td>
          <td><?= $gerecht->gerecht; ?></td>
          <td><?= $gerecht->prijs; ?></td>
          <td><?= $gerecht->actief; ?></td>
          <td>
            <a href="edit.php?id=<?= $gerecht->id ?>" class="btn btn-info">Edit</a>
            <a onclick="return confirm('Wil je dit gerecht echt verwijderen?')" href="delete.php?id=<?= $gerecht->id ?>"
              class='btn btn-danger'>Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="card-body">
      <h2>Zoet</h2>
      <table class="table table-responsive-sm">
        <tr>
          <th>ID</th>
          <th>Categorie</th>
          <th>Gerecht</th>
          <th>Prijs</th>
          <th>Actief?</th>
          <th></th>
        </tr>
        <?php
        $sql = 'SELECT * FROM gerechten WHERE categorie="Zoet"';
        $statement = $connection->prepare($sql);
        $statement->execute();
        $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);
        
        foreach($gerechten as $gerecht): ?>

        <tr>
          <td><?= $gerecht->id; ?></td>
          <td><?= $gerecht->categorie; ?></td>
          <td><?= $gerecht->gerecht; ?></td>
          <td><?= $gerecht->prijs; ?></td>
          <td><?= $gerecht->actief; ?></td>
          <td>
            <a href="edit.php?id=<?= $gerecht->id ?>" class="btn btn-info">Edit</a>
            <a onclick="return confirm('Wil je dit gerecht echt verwijderen?')" href="delete.php?id=<?= $gerecht->id ?>"
              class='btn btn-danger'>Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="card-body">
      <h2>Warm</h2>
      <table class="table table-responsive-sm">
        <tr>
          <th>ID</th>
          <th>Categorie</th>
          <th>Gerecht</th>
          <th>Prijs</th>
          <th>Actief?</th>
          <th></th>
        </tr>
        <?php
        $sql = 'SELECT * FROM gerechten WHERE categorie="warm"';
        $statement = $connection->prepare($sql);
        $statement->execute();
        $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);
        
        foreach($gerechten as $gerecht): ?>

        <tr>
          <td><?= $gerecht->id; ?></td>
          <td><?= $gerecht->categorie; ?></td>
          <td><?= $gerecht->gerecht; ?></td>
          <td><?= $gerecht->prijs; ?></td>
          <td><?= $gerecht->actief; ?></td>
          <td>
            <a href="edit.php?id=<?= $gerecht->id ?>" class="btn btn-info">Edit</a>
            <a onclick="return confirm('Wil je dit gerecht echt verwijderen?')" href="delete.php?id=<?= $gerecht->id ?>"
              class='btn btn-danger'>Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="card-body">
      <h2>Bier</h2>
      <table class="table table-responsive-sm">
        <tr>
          <th>ID</th>
          <th>Categorie</th>
          <th>Gerecht</th>
          <th>Prijs</th>
          <th>Actief?</th>
          <th></th>
        </tr>
        <?php
        $sql = 'SELECT * FROM gerechten WHERE categorie="bier"';
        $statement = $connection->prepare($sql);
        $statement->execute();
        $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);
        
        foreach($gerechten as $gerecht): ?>

        <tr>
          <td><?= $gerecht->id; ?></td>
          <td><?= $gerecht->categorie; ?></td>
          <td><?= $gerecht->gerecht; ?></td>
          <td><?= $gerecht->prijs; ?></td>
          <td><?= $gerecht->actief; ?></td>
          <td>
            <a href="edit.php?id=<?= $gerecht->id ?>" class="btn btn-info">Edit</a>
            <a onclick="return confirm('Wil je dit gerecht echt verwijderen?')" href="delete.php?id=<?= $gerecht->id ?>"
              class='btn btn-danger'>Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="card-body">
      <h2>Fris</h2>
      <table class="table table-responsive-sm">
        <tr>
          <th>ID</th>
          <th>Categorie</th>
          <th>Gerecht</th>
          <th>Prijs</th>
          <th>Actief?</th>
          <th></th>
        </tr>
        <?php
        $sql = 'SELECT * FROM gerechten WHERE categorie="fris"';
        $statement = $connection->prepare($sql);
        $statement->execute();
        $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);
        
        foreach($gerechten as $gerecht): ?>

        <tr>
          <td><?= $gerecht->id; ?></td>
          <td><?= $gerecht->categorie; ?></td>
          <td><?= $gerecht->gerecht; ?></td>
          <td><?= $gerecht->prijs; ?></td>
          <td><?= $gerecht->actief; ?></td>
          <td>
            <a href="edit.php?id=<?= $gerecht->id ?>" class="btn btn-info">Edit</a>
            <a onclick="return confirm('Wil je dit gerecht echt verwijderen?')" href="delete.php?id=<?= $gerecht->id ?>"
              class='btn btn-danger'>Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
=======
   <div class="card mt-5">
      <div class="card-header">
         <h2>Alle gerechten</h2>
      </div>
      <div class="card-body">
         <h2>Lunch</h2>
         <table class="table table-hover">
            <tr>
               <th>ID</th>
               <th>Categorie</th>
               <th>Gerecht</th>
               <th>Prijs</th>
               <th>Actief?</th>
               <th></th>
            </tr>
            <?php
        $sql = 'SELECT * FROM gerechten WHERE categorie="Lunch"';
        $statement = $connection->prepare($sql);
        $statement->execute();
        $gerechtenLunch = $statement->fetchAll(PDO::FETCH_OBJ);
        
        foreach($gerechtenLunch as $lunch): ?>

            <tr>
               <td><?= $lunch->id; ?></td>
               <td><?= $lunch->categorie; ?></td>
               <td><?= $lunch->gerecht; ?></td>
               <td><?= $lunch->prijs; ?></td>
               <td><?= $lunch->actief; ?></td>
               <td>
                  <a href="edit.php?id=<?= $lunch->id ?>" class="btn btn-info">Edit</a>
                  <a onclick="return confirm('Wil je dit gerecht echt verwijderen?')"
                     href="delete.php?id=<?= $lunch->id ?>" class='btn btn-danger'>Delete</a>
               </td>
            </tr>
            <?php endforeach; ?>
         </table>
      </div>
      <div class="card-body">
         <h2>Zoet</h2>
         <table class="table table-hover">
            <tr>
               <th>ID</th>
               <th>Categorie</th>
               <th>Gerecht</th>
               <th>Prijs</th>
               <th>Actief?</th>
               <th></th>
            </tr>
            <?php
        $sql = 'SELECT * FROM gerechten WHERE categorie="Zoet"';
        $statement = $connection->prepare($sql);
        $statement->execute();
        $gerechtenzoet = $statement->fetchAll(PDO::FETCH_OBJ);
        
        foreach($gerechtenzoet as $zoet): ?>

            <tr>
               <td><?= $zoet->id; ?></td>
               <td><?= $zoet->categorie; ?></td>
               <td><?= $zoet->gerecht; ?></td>
               <td><?= $zoet->prijs; ?></td>
               <td><?= $zoet->actief; ?></td>
               <td>
                  <a href="edit.php?id=<?= $zoet->id ?>" class="btn btn-info">Edit</a>
                  <a onclick="return confirm('Wil je dit gerecht echt verwijderen?')"
                     href="delete.php?id=<?= $zoet->id ?>" class='btn btn-danger'>Delete</a>
               </td>
            </tr>
            <?php endforeach; ?>
         </table>
      </div>
   </div>
>>>>>>> 6427720319898bebc9a1472f55b4a58514f6f1aa
</div>
</div>
<?php require 'includes/footer.php'; ?>