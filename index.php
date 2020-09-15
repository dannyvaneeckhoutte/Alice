<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM gerechten ORDER BY categorie DESC");
$resultLunch = mysqli_query($mysqli, "SELECT * FROM gerechten WHERE categorie = 'Lunch' ORDER BY id DESC");
$resultZoet = mysqli_query($mysqli, "SELECT * FROM gerechten WHERE categorie = 'Zoet' ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="nl">

<head>
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
   <link rel="stylesheet" href="css/light.css" id="theme" />
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
         <a href="#" class="style-switch" onclick="switchSheet()">
            <i class="fas fa-lightbulb fa-lg"></i>
         </a>
      </div>
      <header>
         <img src="img/logo-txt.svg" alt="Alice logo" class="main-logo" />
      </header>
      <div class="section-wrapper">
         <section id="home" class="section section-intro">
            <p>
               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias
               repellendus voluptates earum dolor, culpa, aut esse sunt aspernatur
               veritatis iusto, id alias praesentium. Dicta quaerat modi reiciendis
               consequuntur. Explicabo, et.
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
               <div class="card">
                  <img src="img/cafe.jpg" alt="cafe event" />
                  <div class="card-txt">
                     <h3>Cafe Alice</h3>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Mollitia iste consectetur, illum exercitationem et magni hic?
                        Laudantium earum, maiores unde in neque consequuntur! Impedit
                        nobis animi optio commodi necessitatibus nihil!
                     </p>
                  </div>
               </div>
               <div class="card">
                  <img src="img/wunder.jpg" alt="cafe event" />
                  <div class="card-txt">
                     <h3>Cafe Alice</h3>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Mollitia iste consectetur, illum exercitationem et magni hic?
                        Laudantium earum, maiores unde in neque consequuntur! Impedit
                        nobis animi optio commodi necessitatibus nihil!
                     </p>
                  </div>
               </div>
               <div class="card">
                  <img src="img/kermis.jpg" alt="cafe event" />
                  <div class="card-txt">
                     <h3>Cafe Alice</h3>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Mollitia iste consectetur, illum exercitationem et magni hic?
                        Laudantium earum, maiores unde in neque consequuntur! Impedit
                        nobis animi optio commodi necessitatibus nihil!
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
                  while($resLunch = mysqli_fetch_array($resultLunch)) {       
                     echo "<tr>";
                     echo "<td>".$resLunch['gerecht']."</td>";
                     echo "<td>€".$resLunch['prijs']."</td>";
                  }
               ?>
            </table>
            <table>
               <tr>
                  <th>Zoet</th>
                  <th></th>

               </tr>
               <?php 
                  while($resZoet = mysqli_fetch_array($resultZoet)) {      
                     echo "<tr>";
                     echo "<td>".$resZoet['gerecht']."</td>";
                     echo "<td>€".$resZoet['prijs']."</td>";
                  }
               ?>
            </table>
         </section>
         <section id="reserveer" class="section section-reserveer">
            <h1>Reserveer</h1>
            <p>
               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam
               alias ea labore? Nesciunt, delectus veritatis! Suscipit enim animi
               minus ad odio odit, ratione quidem voluptates repudiandae excepturi
               sequi pariatur esse.
            </p>
            <p>Een tafel reserveren kan op het nummer:</p>
            <br />
            <a href="tel:+32478554804"><strong>0478 55 48 04</strong></a>
         </section>
         <section id="shop" class="section section-shop">
            <h1>Shop</h1>
            <p>
               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam
               alias ea labore? Nesciunt, delectus veritatis! Suscipit enim animi
               minus ad odio odit, ratione quidem voluptates repudiandae excepturi
               sequi pariatur esse.
            </p>
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
            <a href="https://www.facebook.com/761543060570041"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="https://www.instagram.com/wereldvanalice/"><i class="fab fa-instagram-square fa-2x"></i></a>
         </div>
         <p class="copyright">
            code & design &copy; &nbsp;<a href="https://github.com/dannyvaneeckhoutte" target="_blank">
               Danny Van Eeckhoutte</a>
         </p>
      </footer>
   </div>

   <!-- Hamburger menu + animation -->
   <script src="js/menu.js"></script>

   <!-- Theme switcher -->
   <script src="js/switch.js"></script>

   <!-- image slider -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src="js/swiper.js"></script>
</body>

</html>