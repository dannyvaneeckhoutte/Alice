<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <meta name="Description" content="De Wereld van Alice: coffeeshop, restaurant en bar in het centrum van Merchtem" />
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet" />
   <script src="https://kit.fontawesome.com/7b2dc1503a.js" crossorigin="anonymous"></script>
   <!-- <link rel="stylesheet" href="css/swiper-bundle.css" /> -->
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <link rel="stylesheet" href="css/reset.css" />
   <link rel="stylesheet" href="css/light.css" id="theme" />
   <link rel="stylesheet" href="css/hamburgers.css" />

   <title>De Wereld van Alice - home</title>
</head>

<body>
   <div class="main-wrapper">
      <div class="nav-container">
         <nav class="topnav">
            <!-- Animated hamburger icon (hamburger.css) -->
            <button class="hamburger hamburger--boring" type="button" aria-label="Menu" aria-controls="navigation">
               <a href="javascript:void(0);" class="icon" onclick="showMenu()">
                  <span class="hamburger-box">
                     <span class="hamburger-inner is-active"></span>
                  </span>
               </a>
            </button>

            <a href="#"></a>
            <div id="links">
               <a onclick="closeMenu()" href="index.html">Home</a>
               <a onclick="closeMenu()" href="#sfeer">Sfeer</a>
               <a onclick="closeMenu()" href="#events">Do</a>
               <a onclick="closeMenu()" href="#takeaway">Takeaway</a>
               <a onclick="closeMenu()" href="menu.html">Menu</a>
               <a onclick="closeMenu()" href="#shop">Shop</a>
               <a onclick="closeMenu()" href="#contact">Contact</a>
            </div>
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
               Hieronder vind je het takeaway menu voor deze week terug. <br />
               Bestellen kan via onderstaand formulier, of telefonisch voor
               woensdag of zaterdag 14u op het nummer:
            </p>
            <br />
            <a href="tel:+32478554804"><strong>0478 55 48 04</strong></a>
            <br>
            <table>
               <?php
				
               include('includes/takeawayDB.inc.php');
               gerechtenLijst();
      
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
            <div class="adres">
               <p>
                  <strong>De Wereld van Alice</strong>
                  <br />Kerstraat 1 <br />1785 Merchtem <br />
                  <a href="mailto:info@dewereldvanalice.be">
                     info@dewereldvanalice.be
                  </a>
                  <br />
                  <a href="tel:+32478554804"> Tel: 0478 55 48 04 </a>
               </p>
            </div>
            <br />
            <div class="openingsuren">
               <p>
                  <strong>Openingsuren</strong>
                  <br />woensdag van 9 tot 17u <br />donderdag van 12 tot 23u
                  <br />vrijdag van 9 tot 17u <br />zaterdag van 9 tot 17u
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