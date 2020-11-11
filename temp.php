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
  <link rel="manifest" href="/site.webmanifest">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src="https://kit.fontawesome.com/7b2dc1503a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/main.css" id="theme" />
  <title>De Wereld van Alice - home</title>
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
          <li><a class="menu-link" href="#sfeer">Sfeer</a></li>
          <li><a class="menu-link" href="#events">Events</a></li>
          <li><a class="menu-link" href="#takeaway">Takeaway</a></li>
          <li><a class="menu-link" href="#shop">Shop</a></li>
          <li><a class="menu-link" href="kaart.php">Kaart</a></li>
          <li><a class="menu-link" href="#contact">Contact</a></li>
        </ul>
      </nav>

      <!-- Theme switcher -->
      <a href="#" class="style-switch">
        <i class="fas fa-lightbulb fa-lg"></i>
      </a>
    </div>
    <header>
      <img src="img/logo.svg" alt="logo Alice" class="logo">
      <h1>Eat & Drink.</h1>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, molestiae ipsam velit dolor aut sequi cum
        delectus, totam dolores ducimus, rerum tempore amet magnam consequuntur veniam id nam harum labore.
      </p>
    </header>

    <div class="kaart-wrapper">
      <div class="kaart-eat">
        <div class="kaart-keuze">
          <a href="#kaart-eat"><i class="fas fa-hamburger fa-2x"></i></a>
          <a href="#kaart-drink"></a><i class="fas fa-glass-martini-alt fa-2x"></i>
        </div>

        <!-- food menu -->
        <div class="kaart-eat" id="kaart-eat">
          <img class="kaart-heading" src="img/kaart-breakfast.jpg" alt="ontbijt" />
          <table>
            <tr>
              <th>Ontbijt</th>
              <th></th>
            </tr>
            <?php     
                // selecteer alles in de database
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
          <div class="kaart-heading kaart-heading-eat">
            <img src="img/kaart-lunch.jpg" alt="lunch" />
          </div>
          <table>
            <tr>
              <th>Lunch</th>
              <th></th>
            </tr>
            <?php     
                // selecteer alles in de database
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

          <div class="kaart-heading kaart-heading-eat">
            <img src="img/kaart-kids.jpg" alt="kids" />
          </div>
          <table>
            <tr>
              <th>Kids</th>
              <th></th>
            </tr>
            <?php     
                // selecteer alles in de database
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

          <div class="kaart-heading kaart-heading-eat">
            <img src="img/kaart-zoet.jpg" alt="zoet" />
          </div>
          <table>
            <tr>
              <th>Zoet</th>
              <th></th>
            </tr>
            <?php     
                // selecteer alles in de database
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
          <div class="kaart-heading kaart-heading-eat">
            <img src="img/kaart-suggesties.jpg" alt="suggesties" />
            <h3 class="title title-eat">Suggesties</h3>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Explicabo nobis iste, deserunt modi corrupti impedit labore
            aspernatur quam voluptates dolores voluptate molestias? Deserunt
            facere accusantium obcaecati explicabo quidem! Quas, ex?
          </p>

        </div>
      </div>

      <!-- drinks menu -->
      <div class="kaart-drink">
        <div class="kaart-heading kaart-heading-drink">
          <img src="img/kaart-breakfast.jpg" alt="ontbijt" />
          <h3 class="title title-drink">Drinks</h3>
        </div>


      </div>
    </div>

  </div>
  <footer id="contact">
    <div class="map-container">
      <iframe class="googleMap" title="google map" frameborder="0" style="border: 0"
        src="https://www.google.com/maps/embed/v1/view?zoom=20&center=50.9589%2C4.2326&key=AIzaSyB5irXEvoO4G6WLKzzESP3DOSQ9mxODRT0"
        allowfullscreen></iframe>
    </div>

    <div class="info">
      <div class="adres flex-col">
        <address>
          <br>Kerstraat 1
          <br>1785 Merchtem
          <br><a href="mailto:info@dewereldvanalice.be">info@dewereldvanalice.be</a>
          <br><a href="tel:+32478554804"> Tel: 0478 55 48 04 </a>
        </address>
      </div>
      <div class="openingsuren flex-col">
        <p>
          <br>woensdag van <time datetime="09:00">9:00</time> tot <time datetime="17:00">17:00</time>
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