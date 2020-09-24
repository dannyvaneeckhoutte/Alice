<<<<<<< HEAD
<?php require 'db.php'; ?>
=======
<?php 
// maak verbinding met database
require 'db.php';

?>
>>>>>>> 6427720319898bebc9a1472f55b4a58514f6f1aa

<!DOCTYPE html>
<html lang="nl">

<head>
<<<<<<< HEAD
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
            <td><?= $lunch->prijs; ?></td>
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
            <td><?= $zoet->prijs; ?></td>
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
=======
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <meta name="Description" content="De Wereld van Alice: coffeeshop, restaurant en bar in het centrum van Merchtem" />
   <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
   <link rel="manifest" href="/site.webmanifest">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet" />
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
   <script src="https://kit.fontawesome.com/7b2dc1503a.js" crossorigin="anonymous"></script>
   <!-- <link rel="stylesheet" href="css/swiper-bundle.css" /> -->
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <link rel="stylesheet" href="css/reset.css" />
   <link rel="stylesheet" href="css/style.css" id="theme" />
   <title>De Wereld van Alice - home</title>
</head>

<body>
   <div class="main-wrapper">
      <div class="nav-container">
         <!-- Hamburger Menu Icon -->
         <div class="menu">
            <span></span>
         </div>
         <nav class="navbar-menu">
            <ul class="menu-listing">
               <li><a class="menu-link" href="index.php">Home</a></li>
               <li><a class="menu-link" href="#sfeer">Sfeer</a></li>
               <li><a class="menu-link" href="#events">Do</a></li>
               <li><a class="menu-link" href="#takeaway">Takeaway</a></li>
               <li><a class="menu-link" href="menu.html">Menu</a></li>
               <li><a class="menu-link" href="#shop">Shop</a></li>
               <li><a class="menu-link" href="#contact">Contact</a></li>
            </ul>
         </nav>

         <!-- Theme switcher -->
         <a href="#" class="style-switch">
            <i class="fas fa-lightbulb fa-lg"></i>
         </a>
      </div>

      <header>
         <img src="img/logo-txt.svg" alt="Alice logo" class="main-logo" />
      </header>

      <div class="section-wrapper">
         <section id="home" class="section section-intro">
            <p>
               Alice heeft vele kamers. Ontbijten, lunchen en koffie drinken doe je in de living. In onze winkel
               verkopen we hebbedingen voor je interieur. Welkom bij Alice!
            </p>
         </section>
         <section id="sfeer" class="section section-sfeer swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
               <!-- Slides -->
               <div class="swiper-slide"><img src="img/slide-1.jpg" alt="" /></div>
               <div class="swiper-slide"><img src="img/slide-2.jpg" alt="" /></div>
               <div class="swiper-slide"><img src="img/slide-3.jpg" alt="" /></div>
               ...
            </div>
            <!-- If we need pagination -->
            <!-- <div class="swiper-pagination"></div> -->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
         </section>
         <section id="events" class="section section-events">
            <h1>Events</h1>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
               asperiores repellendus harum, eius sit debitis aliquam? Aspernatur
               ipsa ipsam facilis? Quo laboriosam autem tenetur consequatur quas
               nostrum, perferendis voluptatibus quae.
            </p>
            <div class="card-wrapper">
               <div class="card card-do">
                  <img src="img/cafe.jpg" alt="cafe event" />
                  <div class="card-txt">
                     <h4>Cafe Alice</h4>
                     <p>
                        In café Alice kan je terecht voor lekkere drankjes, goeie biertjes, heerlijke cocktails en véél
                        sfeer. Want donderdagavond is ook al een beetje weekend!
                        Have a drink with us!
                     </p>
                  </div>

               </div>
               <div class="card card-do">
                  <img src="img/wunder.jpg" alt="cafe event" />
                  <div class="card-txt">
                     <h4>Wünderground</h4>
                     <p>
                        Eén vrijdag per maand verandert Alice vanaf 18u in WÜNDERGROUND.
                        Op de menumuur: cocktails, mocktails & iets maagvullends waar je gegarandeerd je vingers bij
                        aflikt. Ergens tussen de achter- en voorgrond spelen dj's of een band muziek uit wünderground.
                     </p>
                  </div>
                  <a href="https://www.facebook.com/De-Wereld-van-Alice-761543060570041/events/?ref=page_internal"
                     class="btn-card">Bekijk al onze events</a>

               </div>
               <div class="card card-do">
                  <img src="img/kermis.jpg" alt="cafe event" />
                  <div class="card-txt">
                     <h4>Kermis @ Alice</h4>
                     <p>
                        Het is weer zo ver! 10 dagen feest!
                        Tijdens de kermis serveren wij jullie elke dag spaghetti, kaas- en garnaalkroketten, kibbeling
                        en fingerfood tot 22h.
                        Onze beroemde cocktailbar is elke dag open!
                     </p>

                  </div>

               </div>
            </div>
         </section>
         <section id="takeaway" class="section section-takeaway">
            <h1>Takeaway</h1>
            <p>
               Hieronder vind je het takeaway menu voor deze week terug. Bestellen kan telefonisch, voor 14u op woensdag
               of zaterdag, op het nummer:
            </p>
            <br />
            <a href="tel:+32478554804"><strong>0478 55 48 04</strong></a>

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
    $gerechtenLunch = $statement->fetchAll(PDO::FETCH_OBJ);

    ?>
               <?php foreach($gerechtenLunch as $lunch): ?>
               <tr>
                  <td><?= $lunch->gerecht; ?></td>
                  <td><?= $lunch->prijs; ?></td>
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
    $sql = 'SELECT * FROM gerechten WHERE categorie = "Zoet"';
    $statement = $connection->prepare($sql);
    $statement->execute();
    $gerechtenZoet = $statement->fetchAll(PDO::FETCH_OBJ);
    
    foreach($gerechtenZoet as $zoet): 
    
    ?>
               <tr>
                  <td><?= $zoet->gerecht; ?></td>
                  <td><?= $zoet->prijs; ?></td>
               </tr>
               <?php endforeach; ?>

            </table>
         </section>
         <section id="reserveer" class="section section-reserveer">
            <h1>Reserveer</h1>
            <p>Een tafel reserveren kan op het nummer:</p>
            <br />
            <a href="tel:+32478554804"><strong>0478 55 48 04</strong></a>
         </section>
         <section id="shop" class="section section-shop">
            <h1>Shop</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quo facilis optio ipsum natus
               exercitationem amet autem in officiis ea, pariatur at vel asperiores, blanditiis fuga, tempore rem?
               Commodi, unde?
            </p>
            <div class="card-wrapper">
               <div class="card card-shop">
                  <img src="img/thee.jpg" alt="cafe event" />
                  <div class="card-txt">
                     <h4>Kusmi thee</h4>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab illum nam incidunt pariatur
                        explicabo libero ipsum expedita distinctio culpa est cupiditate quasi natus provident placeat,
                        sed suscipit nobis a aspernatur?
                     </p>
                  </div>
               </div>

               <div class="card card-shop">
                  <img src="img/keramiek.jpg" alt="cafe event" />
                  <div class="card-txt">
                     <h4>HK Living</h4>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat a, facilis explicabo id
                        officiis, sed dolores hic ea tempora vitae eaque soluta asperiores consectetur perferendis
                        perspiciatis libero dolor similique reiciendis!

                     </p>

                  </div>
                  <a href="#" class="btn-card">Bezoek onze webshop</a>
               </div>

               <div class="card card-shop">
                  <img src="img/gimber.jpg" alt="cafe event" />
                  <div class="card-txt">
                     <h4>Gimber</h4>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quae est omnis unde eum
                        labore eius maxime non, deleniti reiciendis nemo ex quam temporibus sequi eos molestiae
                        blanditiis, obcaecati nihil.
                     </p>

                  </div>

               </div>
            </div>
         </section>
      </div>
      <footer class="footer" id="contact">
         <div class="map-container">
            <iframe class="googleMap" title="google map" frameborder="0" style="border: 0"
               src="https://www.google.com/maps/embed/v1/view?zoom=20&center=50.9589%2C4.2326&key=AIzaSyB5irXEvoO4G6WLKzzESP3DOSQ9mxODRT0"
               allowfullscreen></iframe>
         </div>

         <div class="info">
            <div class="adres flex-col">
               <address>
                  <strong>De Wereld van Alice</strong>
                  <br>Kerstraat 1
                  <br>1785 Merchtem
                  <br><a href="mailto:info@dewereldvanalice.be">info@dewereldvanalice.be</a>
                  <br><a href="tel:+32478554804"> Tel: 0478 55 48 04 </a>
               </address>
            </div>
            <div class="openingsuren flex-col">
               <p>
                  <strong>Alice is open op</strong>
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
   </div>

   <!-- Hamburger menu + animation -->
   <script src="js/menu.js"></script>

   <!-- Theme switcher -->
   <!-- <script src="js/switch.js"></script> -->

   <!-- image slider -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src="js/swiper.js"></script>
>>>>>>> 6427720319898bebc9a1472f55b4a58514f6f1aa

</body>

</html>