<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('head.php'); ?>
    </head>
    <body>
        <div id="particles-js"></div>
        <script src="particles.js/particles.js"></script>
        <script src="particles.js/app.js"></script>

<div class="menu">
    <a href="http://pexogamedev.pl" class = "logonav">
    <div class="left">
        <img class="logo animated flipInX" src="assets/graphics/logo.png">
        <h1 class="nickname animated fadeInDown">Pexo <div id="border"></div></h1>
    </div>
</a>
    <?php include('menu.php'); ?>
</div>

<div class="top">
    <?php include('navbarmenu.php'); ?>
</div>

<div class="main">
    <div class="content">
        <h3>#WhoAmI?</h3>


<div class="half">
abc aba abc abc aba abc abc aba abc abc 
aba abc abc aba abc abc aba abc abc aba 
abc abc aba abc abc aba abc abc aba abc 
abc aba abc abc aba abc abc aba abc abc
aba abc abc aba abc abc aba abc abc aba
abc abc aba abc 
</div>

<section class="timeline">
<ul>
  <li>
    <div>
      <time>1998</time> Starcraft, Baldur's Gate, Half-Life and I were all born the same year.
    </div>
  </li>
  <li>
    <div>
      <time>2003</time> I get the first gaming console: Pegasus (Polish clone of NES) and I play my first video game ever: Super Mario Bros.
    </div>
  </li>
  <li>
    <div>
      <time>2004</time> I'm six and I decide that I want to <b> make games in the future.</b>
    </div>
  </li>
  <li>
    <div>
      <time>2005</time> I get my first PC (running Windows 98). Since then I become passionate about computer science and games. <i>(Mostly playing games though)</i>
    </div>
  </li>
  <li>
    <div>
      <time>2006</time> PSX joins my collection and I get to know the feeling of leaving it turned on for night while playing Tekken 3 because I had no Memory Card.
    </div>
  </li>
  <li>
    <div>
      <time>2009</time> I start coding simple websites using HTML and CSS. Also Mini Ninjas, Trine, Uncharted 2 and Left For Dead 2 are released.
    </div>
  </li>
  <li>
    <div>
      <time>2010</time> I happen to get yet another console - Play Station 2; God Of War and GoW2 immediately become my favourite games ever.
    </div>
  </li>
  <li>
    <div>
      <time>2012</time> I try programming in C++ for the first time (following some online tutorial). Mass Effect 3, Dishonored and The Walking Dead are out too.
    </div>
  </li>
  <li>
    <div>
      <time>2014</time> I start high school at class with IT Specialist profile. Blizzard releases Hearthstone, wohoo.
    </div>
  </li>
  <li>
    <div>
      <time>2014</time> Unity3D and I meet for the first time. After that we become friends <i>forever</i>.
    </div>
  </li>
  <li>
    <div>
      <time>2015</time> Life is Strange is released and it becomes a definition of a games that I want to create.
    </div>
  </li>
  <li>
    <div>
      <time>2016</time> I start working <i>a lot</i> in Unity, developing first prototypes and discarding plenty of half-baked pseudo-projects.
    </div>
  </li>
  <li>
    <div>
      <time>2016</time> I fall in love with <span style="color:#c98020">Over</span>watch (Thanks Blizzard <3).
    </div>
  </li>
  <li>
    <div>
      <time>2016</time> I move to Sweden for 3 months so I can hone my english.
    </div>
  </li>
  <li>
    <div>
      <time>2017</time> I attend my first meeting of gamedev community - Lublin Gamedev.
    </div>
  </li>
  <li>
    <div>
      <time>2017</time> <b>I finish my first video game <a class="link" href="http://neonnebula.pexogamedev.pl/">Neon Nebula.</a></b>
    </div>
  </li>
  <li>
    <div>
      <time>2017</time> I join GitHub and start sharing my code there. Meanwhile I attempt to write more complex projects and I set up this website (in much diffrent form).
    </div>
  </li>
  <li>
    <div>
      <time>2017</time> Thanks to Lublin Gamedev community I become a part of <a class="link" href="http://bit.ly/lublin1617">Lublin 1617</a> project.
    </div>
  </li>
  <li>
    <div>
      <time>2018</time> I team up with other young, aspiring game developers and graphics and we start working on Underhell
    </div>
  </li>
  <li>
    <div>
      <time>2018</time> I give <a class="link" href="#">PexoGameDev</a> a second life (and new C<span style="font-size:0.75em">ss</span>lothes).
    </div>
  </li>
  <li>
    <div>
      <time>2018</time> I write up my first CV and apply to company that I dreamt I could work for.
    </div>
  </li>
</ul>
</section>

    </div>
</div>

<script>
    (function() {

  'use strict';

  var items = document.querySelectorAll(".timeline li");

  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i]))
        items[i].classList.add("in-view");
      else
        items[i].classList.remove("in-view");
    }
  }
  
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
})();
</script>
</body>
</html>