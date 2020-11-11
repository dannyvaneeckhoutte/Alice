<?php require 'db.php'; ?>

<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="Description"
    content="De Wereld van Alice: Lunchbar, restaurant, café en shop in het centrum van Merchtem." />
  <!-- Open Graph Markup -->
  <meta property="og:url" content="http://www.dewereldvanalice.be/index.php" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="De Wereld van Alice" />
  <meta property="og:description" content="Lunchbar, restaurant, café en shop in het centrum van Merchtem." />
  <meta property="og:image" content="img/logo.svg" />
  <!-- End open Graph Markup -->
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <!-- End favicon -->
  <link rel="manifest" href="site.webmanifest">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src="https://kit.fontawesome.com/7b2dc1503a.js" crossorigin="anonymous"></script>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/main.css" id="theme" />
  <!-- End stylesheets -->
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
      <h1>Eat. Drink. Do. Shop.</h1>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, molestiae ipsam velit dolor aut sequi cum
        delectus, totam dolores ducimus, rerum tempore amet magnam consequuntur veniam id nam harum labore.
      </p>
    </header>

    <div class="section-wrapper">

      <section class="s-sfeer swiper-container" id="sfeer">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <picture>
              <source type='image/webp' srcset="img/slide-1.webp" alt="Sfeerbeeld 1">
              <img src="img/slide-1.jpg" alt="Sfeerbeeld 1">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source type='image/webp' srcset="img/slide-2.webp" alt="Sfeerbeeld 2">
              <img src="img/slide-2.jpg" alt="Sfeerbeeld 2">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source type='image/webp' srcset="img/slide-3.webp" alt="Sfeerbeeld 3">
              <img src="img/slide-3.jpg" alt="Sfeerbeeld 3">
            </picture>
          </div>
        </div>
        <!-- Navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </section>

      <section class="s-events" id="events">
        <h2>Never a dull moment</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, temporibus laborum? Nesciunt sed magnam
          doloribus pariatur repudiandae aperiam exercitationem, velit dolorum accusamus. Nemo quisquam odit fugit
          ratione
          autem neque impedit.</p>
        <div class="card-wrapper events">
          <div class="card">
            <img src="img/cafe.jpg" alt="Cafe Alice" />
            <div class="card-txt">
              <h3>Café Alice</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quia
                facilis voluptates magni maxime vero nisi natus perspiciatis, et eum
                iure sapiente reprehenderit, ipsam neque quisquam quo eligendi, veniam
                eveniet!
              </p>
            </div>
          </div>
          <div class="card">
            <img src="img/wunder.jpg" alt="Wünderground" />
            <div class="card-txt">
              <h3>Wünderground</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quia
                facilis voluptates magni maxime vero nisi natus perspiciatis, et eum
                iure sapiente reprehenderit, ipsam neque quisquam quo eligendi, veniam
                eveniet!
              </p>
            </div>
          </div>
          <div class="card">
            <img src="img/kermis.jpg" alt="Foor @ Alice" />
            <div class="card-txt">
              <h3>Foor @ Alice</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quia
                facilis voluptates magni maxime vero nisi natus perspiciatis, et eum
                iure sapiente reprehenderit, ipsam neque quisquam quo eligendi, veniam
                eveniet!
              </p>
            </div>
          </div>
        </div>
        <button
          onclick="location.href='https://www.facebook.com/De-Wereld-van-Alice-761543060570041/events/?ref=page_internal', '_blank'"
          type="button" class="btn" rel="noopener noreferrer">
          Alle Events <i class="fas fa-angle-right fa-lg"></i>
        </button>
      </section>
      <section class="s-takeaway" id="takeaway">
        <h2>Takeaway</h2>
        <p>
          Hieronder vind je het takeaway menu voor deze week terug.
          Bestellen kan telefonisch, voor 14u op woensdag of zaterdag, op het nummer:
        </p>
        <a href="tel:+32478554804"><strong>0478 55 48 04</strong></a>
        <p>
          Kom je toch liever ter plaatse eten? Reserveren kan via hetzelfde nummer!
        </p>

        <table>
          <tr>
            <th>Lunch</th>
            <th></th>
          </tr>

          <?php     
            // selecteer alles in de database
            $sql = 'SELECT * FROM gerechten WHERE actief = 1 AND categorie= "lunch"';
            $statement = $connection->prepare($sql);
            $statement->execute();
            $gerechtenLunch = $statement->fetchAll(PDO::FETCH_OBJ);

          ?>
          <?php foreach($gerechtenLunch as $lunch): ?>
          <tr>
            <td><?= $lunch->gerecht;?></td>
            <td>€<?= $lunch->prijs; ?></td>

          </tr>
          <?php endforeach; ?>

        </table>

        <table>
          <tr>
            <th>Zoet</th>
            <th></th>
          </tr>

          <?php     
            // selecteer alles in de database
            $sql = 'SELECT * FROM gerechten WHERE actief = 1 AND categorie= "zoet"';
            $statement = $connection->prepare($sql);
            $statement->execute();
            $gerechtenZoet = $statement->fetchAll(PDO::FETCH_OBJ);
            
            foreach($gerechtenZoet as $zoet): 
          
          ?>
          <tr>
            <td><?= $zoet->gerecht; ?></td>
            <td>€<?= $zoet->prijs; ?></td>
          </tr>
          <?php endforeach; ?>

        </table>
      </section>
      <section class="s-shop" id="shop">
        <h2>Shop</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, temporibus laborum? Nesciunt sed magnam
          doloribus pariatur repudiandae aperiam exercitationem, velit dolorum accusamus. Nemo quisquam odit fugit
          ratione
          autem neque impedit.</p>
        <div class="card-wrapper shop">
          <div class="card">
            <img src="img/thee.jpg" alt="" />
            <div class="card-txt">
              <h3>Kusmi thee</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quia
                facilis voluptates magni maxime vero nisi natus perspiciatis, et eum
                iure sapiente reprehenderit, ipsam neque quisquam quo eligendi, veniam
                eveniet!
              </p>
            </div>
          </div>
          <div class="card">
            <img src="img/keramiek.jpg" alt="" />
            <div class="card-txt">
              <h3>HK Living</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quia
                facilis voluptates magni maxime vero nisi natus perspiciatis, et eum
                iure sapiente reprehenderit, ipsam neque quisquam quo eligendi, veniam
                eveniet!
              </p>
            </div>
          </div>
          <div class="card">
            <img src="img/gimber.jpg" alt="" />
            <div class="card-txt">
              <h3>Gimber</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quia
                facilis voluptates magni maxime vero nisi natus perspiciatis, et eum
                iure sapiente reprehenderit, ipsam neque quisquam quo eligendi, veniam
                eveniet!
              </p>
            </div>
          </div>
        </div>
        <button
          onclick="window.open('https://www.facebook.com/De-Wereld-van-Alice-761543060570041/app/1896617053929445', '_blank')"
          type="button" class="btn" rel="noopener noreferrer">
          Onze webshop <i class="fas fa-angle-right fa-lg"></i>
        </button>
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