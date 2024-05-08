<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="./style/main.css<?php echo '?v='.time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <title>Document</title>
</head>
<body>
<header id="barmenu" class="header">
    <div class="menu-total">
    <div class="logo">
    <a href=""><img src="./image/logo.jpg" alt="" class="logomenu"></img></a>
    </div>
    <nav id="menu-haut">
    <a href="#section1" class="menu" >Présentation</a>
    <a href="#section2" class="menu" >La résidence</a>
    <a href="#section1" class="menu" >Les services</a>
    <a href="#section1" class="menu" >Actualités</a>
    <a href="#section7" class="menu" id="contactmenu">Contact</a>
    <a href="tel:0160749300" class="menu always" >01 60 74 93 00</a>
    </nav>
    </div>
</header>
<section>
<article class="article1">

<!-- Slider main container -->
<div class="swiper">
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

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
  
</div>

<h1>Votre résidence autonomie à Avon</h1>

<p>Un environnement de qualité pour une vie adaptée aux besoins des seniors autonomes.</p>


</article>
</section>

<section>
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

<section>
  <article class="article3">
    <h2>La Résidence Jean Fontenelle</h2>
      <div>Située au sein du vieil Avon, la résidence Jean Fontenelle offre à ses habitants une haute qualité de vie au coeur d'un
      emplacement prisé et facilement accessible.</div>
      <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11616.788867339683!2d5.403443199999999!3d43.289191450000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1713997811370!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    

<div class="boite2">

<!-- Slider main container -->
<div class="swiper swiper2">
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

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar2"></div>
  
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
</div>
</div>
  </article>

</section>

<section>
  <article class="article4">

  </article>
</section>

<section>
  <article class="article5">

  </article>
</section>

<section>
  <article class="article6">

  </article>
</section>

<section>
  <article class="article7">

  </article>
</section>
  
  
<footer>
  <div class="footer-total">
<div>© 2020 - LogiRys</div><nav class="footer-bas"><aside>|</aside><a href="">Mentions légales </a><aside>|</aside><a href="">Politique de protection des données</a></nav>
  </div>
</footer>
<script src="./javascript/app.js" <?php echo '?v='.time(); ?>></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" <?php echo '?v='.time(); ?>></script>
<script>

  const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" <?php echo '?v='.time(); ?>></script>
<script>

  const swiper2 = new Swiper2('.swiper2', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination2',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar2',
  },
});
</script>
</body>
</html>