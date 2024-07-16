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
  <section id="presentation">
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

  <section id="residence">
    <article class="article2">
      <h2>Un concept accessible, pour les seniors aux envies de liberté et de sécurité</h2>

      <div class="boite">
        <figure>
          <img src="./image/visuel_1.jpg" alt="">
        </figure>
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
      </div>
    </article>
  </section>

  <section id="services">
    <article class="article3">
      <h2>La Résidence Jean Fontenelle</h2>
      <div>Située au sein du vieil Avon, la résidence Jean Fontenelle offre à ses habitants une haute qualité de vie au coeur d'un
        emplacement prisé et facilement accessible.</div>
      <div>
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
          <a href="https://sentry.io/answers/">
            <button>Consulter la brochure</button>
          </a>
        </div>
      </div>
    </article>

  </section>

  <section id="actualites">
    <article class="article4">
      <div class="boite3">
        <h2>Participez aux Rendez-vous découvertes</h2>

        <div class="contenu3">
          Dès le mois de mars 2021, la résidence Jean-Fontenelle vous ouvre ses portes !
          Venez rencontrer notre équipe d'encadrants et animateurs, visitez nos appartements témoins
          et profitez du cadre de vie des résidents.
          Les mesures sanitaires adéquates ont été mises en place pour la protection de tous.
          Au plaisir de vous rencontrer !</div>
      </div>
      <div class="button1">

      </div>

    </article>
  </section>

  <section id="contact">
    <article class="article5">
      <div class="partie-menu-gauche">
        <div class="partie1">
          <h3>Des espaces de convivialité <br> et des services sur-mesure</h3>
          <div class="premier-bloc-menu">
            <figure>
              <img src="./image/par1.jpg" alt="">
            </figure>
            <div class="contenu-premier-bloc-menu">
              <h3>Des activités favorisant l'autonomie</h3>
              <p>Des activités hebdomadaires sont proposées et ont vocations à préserver l'autonomie des habitants : gym douce atelier mémoire, tai-chi, art floral...</p>
            </div>
          </div>

          <div class="second-bloc-menu">
            <figure>
              <img src="./image/par2.jpg" alt="">
            </figure>
            <div class="contenu-second-bloc-menu">
              <h3>Un cadre naturellement propice aux sorties</h3>
              <p>Des activités hebdomadaires sont proposées et ont vocations à préserver l'autonomie des habitants : gym douce atelier mémoire, tai-chi, art floral...</p>
            </div>
          </div>

          <div class="troisieme-bloc-menu">
            <figure>
              <img src="./image/par3.jpg" alt="">
            </figure>
            <div class="contenu-troisieme-bloc-menu">
              <h3>Une équipe expérimentée à vos côtés</h3>
              <p>Service de téléassistance 7j/7, service de santé et maintien à domicile,</p>
            </div>
          </div>

          <div class="visite-menu">
            <button type="submit"><a href="#section7">Organiser une visite</a></button>
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

  <section class="section333">
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
                    <button class="button-card">Read more</button>
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
                    <button class="button-card">Read more</button>
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
                    <h3>juillet 24, 2024</h3>
                    <p class="description">Proven Health & Lifestyle Hacks That Will Boost Your Energy at Home and Work</p>
                    <button class="button-card">Read more</button>
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
                    <h3>juin 24, 2024</h3>
                    <p class="description">Proven Health & Lifestyle Hacks That Will Boost Your Energy at Home and Work</p>
                    <button class="button-card">Read more</button>
                  </div>
                </div>
              </div>
            </div>            
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </article>
  </section>
  ajouter before (pseudo element), c'est lui qui aura l'élement de couleur, qui sera en background de ce bloc

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
                    <img src="./image/téléphone.png" alt=""><a>01 632 960 985</a>
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
                <div class="checkbox">
                  <div class="checkbox-premier">
                    <input type="checkbox" name="" id="rappel" value="rappel">
                    <label for="rappel">Être rappelé</label>
                  </div>
                  <div class="checkbox-second">
                    <input type="checkbox" name="" id="visite" value="visite">
                    <label for="visite">Organiserune visite</label>
                  </div>
                </div>
                <hr>
                <div class="formulaire-1">
                  <div class="selection">
                    <label for="civility">Civilité*</label>
                    <div class="sexe">
                    <div class="checkbox-civilite-premier">
                      <input type="checkbox" name="" id="monsieur" value="monsieur">
                      <label for="monsieur"><span>Monsieur</label>
                    </div>
                    <div class="checkbox-civilite-second">
                      <input type="checkbox" name="" id="madame" value="madame">
                      <label for="madame"><span>Madame</label>
                    </div>
                    </div>
                  </div>
                  <div class="formulaire">
                    <div class="nom">
                      <input id="name" type="text" name="lastname">
                      <label for="name">Nom*</label>
                    </div>
                    <div class="prenom">
                      <input id="nickname" type="text" name="nickname">
                      <label for="nickname">Prénom*</label>
                    </div>
                  </div>
                  <div class="email">
                    <div class="mail">
                      <input id="email" type="email" name="email">
                      <label for="email">Email*</label>
                    </div>
                    <div class="numero">
                      <input id="telephone" type="tel" name="telephone">
                      <label for="telephone">Téléphone*</label>
                    </div>
                  </div>
                    <p><strong>Recherche</strong></p>
                  <div class="">
                    <div class="">
                      <input type="checkbox" name="t1bis" id="t1bis" value="t1bis">
                      <label for="t1bis">T1Bis</label>
                    </div>
                    <div class="">
                      <input type="checkbox" name="t2" id="t2" value="t2">
                      <label for="t2">T2</label>
                    </div>
                  </div>
                  <div class="">
                    <input type="checkbox" name="t3" id="t3" value="t3">
                    <label for="t3">T3</label>
                  </div>
                </div>

                <div class="">
                  <div class="">
                    <input type="checkbox" name="" id="" value="">
                    <label for=""></label>
                  </div>
                </div>
                <div class="envoi">
                  <button type="submit" class="">
                    <span>Envoyer</span>
                  </button>
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