<?php require 'db.php'; ?>
<?php require 'includes/header.php'; ?>

<?php 
   session_start();
   if(isset($_SESSION['sessie_gebr_id']) && $_SESSION['sessie_gebr_id'] != "") {
      echo '<div class="logout-wrapper" style="position:relative; text-align:center; padding: 0.5em">';
      echo '<h4>Welkom, '.$_SESSION['sessie_gebruiker'].'</h4>';
      echo '<a style="color: white"href="logout.php">Logout</a>';
      echo '</div>';

      } else { 
      header('location:login.php');
      }
?>

<div class="container">
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
</div>
</div>
<?php require 'includes/footer.php'; ?>