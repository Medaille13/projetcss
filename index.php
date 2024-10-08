<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link href="./node_modules/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="./style/main.css<?php echo '?v=' . time(); ?>" rel="stylesheet" type="text/css">
  <title>Document</title>
</head>

<body>
  <header id="barmenu" class="header">
    <div class="menu-total">
      <div class="logo">
        <a href=""><img src="./image/logo.jpg" alt="" class="logomenu"></a>
      </div>
      <nav id="menu-haut">
        <a href="#presentation" class="menu">Présentation</a>
        <a href="#residence" class="menu">La résidence</a>
        <a href="#services" class="menu">Les services</a>
        <a href="#actualites" class="menu">Actualités</a>
        <a href="#contact" class="menu" id="contactmenu">Contact</a>
        <a href="tel:0160749300" class="menu always">01 60 74 93 00</a>
      </nav>
    </div>
  </header>
  <section id="presentation" class="presentation">
    <article class="article1">

      <!-- Slider main container -->
      <div class="swiper" id="swipe-header">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <img src="./image/resid1.jpg" alt="" class="swiper-slide">
          <img src="./image/resid2.jpg" alt="" class="swiper-slide">
          <img src="./image/resid3.jpg" alt="" class="swiper-slide">
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </div>

      <div class="content-1">
        <h1>Votre résidence autonomie à Avon</h1>

        <p>Un environnement de qualité pour une vie adaptée aux besoins des seniors autonomes.</p>
      </div>

    </article>
  </section>

  <section>
    <article class="article2">
      <h2>Un concept accessible, pour les seniors aux envies de liberté et de sécurité</h2>

      <div class="boite">
       
        <div class="contenu_1">
          <p>Short explanation of your company's partnership
            program and policy. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Donec egestas metus
            metus, in bibendum lacus rutrum vitae. Nam posuere
            est ut odio efficitur, id tristique orci consectetur.</p>

          <h3>See Immediate Benefits</h3>

          <p>Maecenas id lectus sed arcu hendrerit tincidunt. Duis
            feugiat magna at gravida finibus. Aenean dapibus
            tincidunt dolor ac finibus. Donec vel ligula dui. Sed
            dignissim dui eget consectetur sodales.</p>

        </div>
        <figure>
          <img src="./image/visuel_1.jpg" alt="">
        </figure>
      </div>
    </article>
  </section>

  <section id="residence">
    <article class="article3">
      <h2>La Résidence Jean Fontenelle</h2>
      <div>Située au sein du vieil Avon, la résidence Jean Fontenelle offre à ses habitants une haute qualité de vie au coeur d'un
        emplacement prisé et facilement accessible.</div>
      <div class="iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11616.788867339683!2d5.403443199999999!3d43.289191450000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1713997811370!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>


      <div class="boite2">

        <!-- Slider main container -->
        <div class="swiper swiper2" id="swiper-mini">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <img src="./image/1.jpg" alt="" class="swiper-slide">
            <img src="./image/2.jpg" alt="" class="swiper-slide">
            <img src="./image/3.jpg" alt="" class="swiper-slide">
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination2"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="contenu_2">
          <div class="text_contenu_2">
            <p>
              La résidence fait peau neuve en 2020 grâce à un projet de
              rénovation ambitieux qui assure un confort optimal aux
              habitants et lieu de vie actuel. Une terrasse et un salon
              climatisé ont notamment été créés pour assurer le bien
              être de chacun lors des beaux jours. <br><br>

              La résidence Jean-Fontenelle propose des logements
              entièrement refaits à neuf, allant du T1Bis au T2, dont
              certains sont destinés aux personnes à mobilité réduite, en
              rez-de-chaussée.
            </p>
          </div>
          <div class="brochure">
            <a href="#contact" class="mixin_button">Consulter<br>la brochure</a>
          </div>
        </div>
      </div>

    </article>
  </section>

  <section id="services">
    <article class="article5">
      <div class="partie-menu-gauche">
        <div class="partie1">
          <h3>Des espaces de convivialité <br> et des services sur-mesure</h3>
          <div class="premier-bloc-menu">
            <figure>
              <img src="./image/par1.jpg" alt="">
            </figure>
            <div class="contenu-premier-bloc-menu">
              <h4>Des activités favorisant l'autonomie</h4>
              <p>Des activités hebdomadaires sont proposées et ont vocations à préserver l'autonomie des habitants : gym douce atelier mémoire, tai-chi, art floral...</p>
            </div>
          </div>

          <div class="second-bloc-menu">
            <figure>
              <img src="./image/par2.jpg" alt="">
            </figure>
            <div class="contenu-second-bloc-menu">
              <h4>Un cadre naturellement propice aux sorties</h4>
              <p>Des activités hebdomadaires sont proposées et ont vocations à préserver l'autonomie des habitants : gym douce atelier mémoire, tai-chi, art floral...</p>
            </div>
          </div>

          <div class="troisieme-bloc-menu">
            <figure>
              <img src="./image/par3.jpg" alt="">
            </figure>
            <div class="contenu-troisieme-bloc-menu">
              <h4>Une équipe expérimentée à vos côtés</h4>
              <p>Service de téléassistance 7j/7, service de santé et maintien à domicile,</p>
            </div>
          </div>

          <div class="visite-menu">
            <a href="#contact" class="mixin_button">Organiser une visite</a>
          </div>
        </div>
        <div class="partie-menu-droite">
          <div class="quatrieme-bloc-menu">
            <div class="contenu-quatrieme-bloc-menu">

              <div class="card-menu">
                <img src="./image/menuu.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                  <h4>"La table de Fontenelle"</h4>
                  <p>Du lundi au vendredi, le chef du restaurant géré par le CCAS d'Avon, vous propose un menu équilibré, de saison et des repas festifs tout au long de l'année.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section class="section333" id="actualites">
    <article class="article6">
      <div class="contenu-toute-actualité">
        <div class="texte-actualité">
          <h2>Dernières actualités de la résidence</h2>
        </div>
        <div class="contenu-toute-actualité-swipe"><!-- Slider main container -->
          <div class="swiper swiper-multicards" id="swiper3">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide card">
                <div class="image-content">
                  <div class="overlay">
                    <div class="card-image">
                      <img src="./image/bbb.png" alt="" class="card-img">
                    </div>
                  </div>
                  <div class="card-content">
                    <h3>December 29, 2019</h3>
                    <p class="description">Proven Health & Lifestyle Hacks That Will Boost Your Energy at Home and Work</p>
                    <a class="button-card" href="#"><span>Read more</span> <span class="pcss-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide card">
                <div class="image-content">
                  <div class="overlay">
                    <div class="card-image">
                      <img src="./image/aaa.avif" alt="" class="card-img">
                    </div>
                  </div>
                  <div class="card-content">
                    <h3>Mai 24, 2024</h3>
                    <p class="description">Proven Health & Lifestyle Hacks That Will Boost Your Energy at Home and Work</p>
                    <a class="button-card" href="#"><span>Read more</span> <span class="pcss-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide card">
                <div class="image-content">
                  <div class="overlay">
                    <div class="card-image">
                      <img src="./image/ccc.png" alt="" class="card-img">
                    </div>
                  </div>
                  <div class="card-content">
                    <h3>Juillet 24, 2024</h3>
                    <p class="description">Proven Health & Lifestyle Hacks That Will Boost Your Energy at Home and Work</p>
                    <a class="button-card" href="#"><span>Read more</span> <span class="pcss-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide card">
                <div class="image-content">
                  <div class="overlay">
                    <div class="card-image">
                      <img src="./image/ccc.png" alt="" class="card-img">
                    </div>
                  </div>
                  <div class="card-content">
                    <h3>Juin 24, 2024</h3>
                    <p class="description">Proven Health & Lifestyle Hacks That Will Boost Your Energy at Home and Work</p>
                    <a class="button-card" href="#"><span>Read more</span> <span class="pcss-arrow-right"></span></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev" id="size1024"></div>
            <div class="swiper-button-next" id="size1025"></div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section id="contact" class="background">
    <article class="article7">
      <div class="partie-contact-et-rappel">
        <div class="conteneur-total">
          <div class="titre-contact-et-rappel">
            <h2>Contactez-nous</h2>
          </div>
        </div>
        <div class="partie-gauche-et-droite">
          <div class="contenu-contact-gauche">
            <div class="contact">
              <div class="contact-photo">
                <img src="./image/plaquette-immobiliere.jpg">
              </div>
              <div class="contenu-contact-text">
                <div class="contenu-contact-text-partie1">
                  <h3>Contactez la résidence</h3>
                  <p>Nos équipes sont à votre disposition pour répondre à toutes vos questions</p>
                  <p><span class="pcss-phone"></span><span class="number">01 632 960 985<span></p>
                </div>
                <div class="contenu-contact-text-partie2">
                  <h3>Résidence Autonomie Jean Fontenelle</h3>
                  <address>16, rue Jean Fontenelle <br> 77210 AVON
                  </address>
                  <div class="contenu-contact-text-partie3">
                    <p>Du lundi au vendredi de 9h à 12h30<br>
                      et de 14h30 à 17h.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="contenu-contact-droite">
            <form method="post" class="formulaire-total" id="form">
              <div class="souhait">
                <h3>Vous souhaitez</p>
              </div>
              <div class="checkbox myCheckbox">
                <div class="checkbox-premier myCheckbox_container">
                  <input type="checkbox" name="souhait" id="rappel" value="rappel" class="mycheck">
                  <label for="rappel">Être rappelé</label>
                </div>
                <div class="checkbox-second myCheckbox_container">
                  <input type="checkbox" name="souhait" id="visite" value="visite" class="mycheck">
                  <label for="visite">Organiser une visite</label>
                </div>
              </div>
              <hr>
              <div class="formulaire-1">
                <div class="selection">
                  <div class="civility">
                    <label>Civilité*</label>
                  </div>
                  <div class="sexe">
                    <div class="checkbox-civilite-premier">
                      <input type="radio" name="civility" id="monsieur" value="monsieur">
                      <label for="monsieur"><span>Monsieur</label>
                    </div>
                    <div class="checkbox-civilite-second">
                      <input type="radio" name="civility" id="madame" value="madame">
                      <label for="madame"><span>Madame</label>
                    </div>
                  </div>
                </div>
                <div class="formulaire">
                  <div class="nom-prenom">
                    <div class="nom">
                      <label for="name">Nom*</label><br>
                      <input id="name" type="text" name="lastname" class="mytext">
                    </div>
                    <div class="prenom">
                      <label for="nickname">Prénom*</label><br>
                      <input id="nickname" type="text" name="nickname" class="mytext">
                    </div>
                  </div>
                </div>
                <div class="formulaire-contact">
                  <div class="email-numero">
                    <div class="mail">
                      <label for="email">Email*</label><br>
                      <input id="email" type="email" name="email" class="mytext">
                    </div>
                    <div class="numero">
                      <label for="telephone">Téléphone*</label><br>
                      <input id="telephone" type="tel" name="telephone" class="mytext">
                    </div>
                  </div>
                </div>
                <div class="recherche">
                  <p><strong>Recherche</strong></p>
                </div>
                <div class="type-logement myCheckbox">
                  <div class="t1 myCheckbox_container">
                    <input type="checkbox" name="t1bis" id="t1bis" value="t1bis" class="mycheck">
                    <label for="t1bis">T1Bis</label>
                  </div>
                  <div class="t2 myCheckbox_container">
                    <input type="checkbox" name="t2" id="t2" value="t2" class="mycheck">
                    <label for="t2">T2</label>
                  </div>

                  <div class="t3 myCheckbox_container">
                    <input type="checkbox" name="t3" id="t3" value="t3" class="mycheck">
                    <label for="t3">T3</label>
                  </div>
                </div>
              </div>

              <div class="">
                <div class="">
                  <input type="checkbox" name="consent" id="consentement" value="" class="mycheck">
                  <label for="consentement">*consentement</label>
                </div>
              </div>
              <div class="envoi">
                <button type="submit" class="mixin_button">Envoyer</button>
            </form>
          </div>
        </div>
      </div>

    </article>
  </section>


  <footer>
    <div class="footer-total">
      <div>© 2020 - LogiRys</div>
      <nav class="footer-bas">
        <aside>|</aside><a href="">Mentions légales </a>
        <aside>|</aside><a href="">Politique de protection des données</a>
      </nav>
    </div>
  </footer>
  <script src="./node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="./javascript/app.js" <?php echo '?v=' . time(); ?>></script>
</body>

</html>