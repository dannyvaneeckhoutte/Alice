<?php require 'db.php'; ?>

<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="Description"
    content="De Wereld van Alice: Lunchbar, restaurant, café en shop in het centrum van Merchtem." />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src="https://kit.fontawesome.com/7b2dc1503a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/main.css" id="theme" />
  <link rel="stylesheet" href="css/kaart.css">
  <title>De Wereld van Alice - Kaart</title>
</head>

<body>

  <div class="main-wrapper">
    <div class="nav-container">
      <div class="menu">
        <span>
          <!-- Hamburger Icon -->
        </span>
      </div>
      <nav class="navbar-menu">
        <ul class="menu-listing">
          <li><a class="menu-link" href="index.php">Home</a></li>
          <li><a class="menu-link" href="index.php#sfeer">Sfeer</a></li>
          <li><a class="menu-link" href="index.php#events">Events</a></li>
          <li><a class="menu-link" href="index.php#takeaway">Takeaway</a></li>
          <li><a class="menu-link" href="index.php#shop">Shop</a></li>
          <li><a class="menu-link" href="kaart.php">Kaart</a></li>
          <li><a class="menu-link" href="#contact">Contact</a></li>
        </ul>
      </nav>

      <!-- Theme switcher -->
      <a href="#" class="style-switch">
        <i class="fas fa-lightbulb fa-lg"></i>
      </a>
    </div>


    <div class="kaart-wrapper">
      <header>
        <div class="kaart-keuze">
          <a href="#s-eat" class="keuze-eat">Eat</a>
          <a href="#s-drink" class="keuze-drink">Drink</a>
        </div>

        <img src="img/logo.svg" alt="logo Alice" class="logo">

        <h1>Eat & Drink.</h1>

        <p>
          Buiten onze vaste kaart, die je hieronder kan terugvinden, zijn er ook onze wekelijks wisselende suggesties.
          Voor een overzicht van onze takeaway gerechten <a href="index.php#takeaway">kan je hier terecht.</a>
        </p>

      </header>

      <section id="s-eat">
        <img class="kaart-ontbijt" src="img/kaart-breakfast.jpg" alt="Ontbijt" />
        <table>
          <tr>
            <th>Ontbijt</th>
            <th></th>
          </tr>
          <?php     
                // "... AND WHERE actief = 0" om op vaste kaart weer te geven
                // Eventueel 2 opties: "beshikbaar op vaste kaart / takeaway"
                $sql = 'SELECT * FROM gerechten WHERE categorie = "Ontbijt"';
                $statement = $connection->prepare($sql);
                $statement->execute();
                $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);

              ?>
          <?php foreach($gerechten as $gerecht): ?>
          <tr>
            <td><?= $gerecht->gerecht; ?></td>
            <td><?= $gerecht->prijs; ?></td>
          </tr>
          <?php endforeach; ?>

        </table>
        <img class="kaart-lunch" src="img/kaart-lunch.jpg" alt="Lunch" />
        <table>
          <tr>
            <th>Lunch</th>
            <th></th>
          </tr>
          <?php     
                $sql = 'SELECT * FROM gerechten WHERE categorie = "Lunch"';
                $statement = $connection->prepare($sql);
                $statement->execute();
                $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);

              ?>
          <?php foreach($gerechten as $gerecht): ?>
          <tr>
            <td><?= $gerecht->gerecht; ?></td>
            <td><?= $gerecht->prijs; ?></td>
          </tr>
          <?php endforeach; ?>

        </table>
        <img class="kaart-kids" src="img/kaart-kids.jpg" alt="Kids" />
        <table>
          <tr>
            <th>Kids</th>
            <th></th>
          </tr>
          <?php     
                $sql = 'SELECT * FROM gerechten WHERE categorie = "Kids"';
                $statement = $connection->prepare($sql);
                $statement->execute();
                $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);

              ?>
          <?php foreach($gerechten as $gerecht): ?>
          <tr>
            <td><?= $gerecht->gerecht; ?></td>
            <td><?= $gerecht->prijs; ?></td>
          </tr>
          <?php endforeach; ?>

        </table>
        <img class="kaart-zoet" src="img/kaart-zoet.jpg" alt="Zoet" />
        <table>
          <tr>
            <th>Zoet</th>
            <th></th>
          </tr>
          <?php     
                $sql = 'SELECT * FROM gerechten WHERE categorie = "Zoet"';
                $statement = $connection->prepare($sql);
                $statement->execute();
                $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);

              ?>
          <?php foreach($gerechten as $gerecht): ?>
          <tr>
            <td><?= $gerecht->gerecht; ?></td>
            <td><?= $gerecht->prijs; ?></td>
          </tr>
          <?php endforeach; ?>

        </table>
      </section>
      <section id="s-drink">
        <img class="kaart-warm" src="img/kaart-koffie.jpg" alt="Warme Dranken" />
        <table>
          <tr>
            <th>Warm</th>
            <th></th>
          </tr>
          <?php     
                $sql = 'SELECT * FROM gerechten WHERE categorie = "warm"';
                $statement = $connection->prepare($sql);
                $statement->execute();
                $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);

              ?>
          <?php foreach($gerechten as $gerecht): ?>
          <tr>
            <td><?= $gerecht->gerecht; ?></td>
            <td><?= $gerecht->prijs; ?></td>
          </tr>
          <?php endforeach; ?>

        </table>
        <img class="kaart-fris" src="img/kaart-fris.jpg" alt="Frisdrank" />
        <table>
          <tr>
            <th>Fris</th>
            <th></th>
          </tr>
          <?php     
                $sql = 'SELECT * FROM gerechten WHERE categorie = "fris"';
                $statement = $connection->prepare($sql);
                $statement->execute();
                $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);

              ?>
          <?php foreach($gerechten as $gerecht): ?>
          <tr>
            <td><?= $gerecht->gerecht; ?></td>
            <td><?= $gerecht->prijs; ?></td>
          </tr>
          <?php endforeach; ?>

        </table>
        <img class="kaart-bier" src="img/kaart-bier.jpg" alt="Bier" />
        <table>
          <tr>
            <th>Bier</th>
            <th></th>
          </tr>
          <?php     
                $sql = 'SELECT * FROM gerechten WHERE categorie = "bier"';
                $statement = $connection->prepare($sql);
                $statement->execute();
                $gerechten = $statement->fetchAll(PDO::FETCH_OBJ);

              ?>
          <?php foreach($gerechten as $gerecht): ?>
          <tr>
            <td><?= $gerecht->gerecht; ?></td>
            <td><?= $gerecht->prijs; ?></td>
          </tr>
          <?php endforeach; ?>

        </table>
      </section>

    </div>

  </div>
  <footer id="contact">
    <div class="map-container">
      <iframe class="googleMap" title="google map"
        src="https://www.google.com/maps/embed/v1/view?zoom=20&center=50.9589%2C4.2326&key=AIzaSyB5irXEvoO4G6WLKzzESP3DOSQ9mxODRT0"
        allowfullscreen></iframe>
    </div>

    <div class="info">
      <div class="adres flex-col">
        <address>
          Kerstraat 1
          <br>1785 Merchtem
          <br><a href="mailto:info@dewereldvanalice.be">info@dewereldvanalice.be</a>
          <br><a href="tel:+32478554804"> Tel: 0478 55 48 04 </a>
        </address>
      </div>
      <hr>
      <div class="openingsuren flex-col">
        <p>
          woensdag van <time datetime="09:00">9:00</time> tot <time datetime="17:00">17:00</time>
          <br>donderdag van <time datetime="12:00">12:00</time> tot <time datetime="23:00">23:00</time>
          <br>vrijdag van <time datetime="09:00">9:00</time> tot <time datetime="17:00">17:00</time>
          <br>zaterdag van <time datetime="09:00">9:00</time> tot <time datetime="17:00">17:00</time>
        </p>
      </div>
    </div>
    <div class="social">
      <a href="https://www.facebook.com/761543060570041" rel="noopener" target="_blank"><i
          class="fab fa-facebook-square fa-2x"></i></a>
      <a href="https://www.instagram.com/wereldvanalice/" rel="noopener" target="_blank"><i
          class="fab fa-instagram-square fa-2x"></i></a>
    </div>
    <p class="admin">
      <a href="admin.php" target="_blank" rel="noopener">
        Admin</a>
    </p>
    <p class="copyright">
      code & design &copy; &nbsp;<a href="https://github.com/dannyvaneeckhoutte" target="_blank" rel="noopener">
        Danny Van Eeckhoutte</a>
    </p>
  </footer>

  <!-- Menu functions / Dark mode toggle -->
  <script src="js/scripts.js"></script>

  <!-- image slider -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/swiper.js"></script>

</body>

</html>