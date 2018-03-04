<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('head.php'); ?>
    </head>
    <body>
        <div id="particles-js"></div>
        <script src="../particles.js/particles.js"></script>
        <script src="../particles.js/app.js"></script>

<div class="menu">
    <a href="http://pexogamedev.pl" class = "logonav">
    <div class="left">
        <img class="logo animated flipInX" src="../assets/graphics/logo.png">
        <h1 class="nickname animated fadeInDown">Pexo <div id="border"></div></h1>
    </div>
</a>
    <?php include('../menu.php'); ?>
</div>

<div class="top">
    <?php include('navbarmenu.php'); ?>
</div>

<div class="main">
    <div class="content">
        <h2 style="margin:0">Blinky</h2>
        <h4 style="margin:5px">Arcade "game" with audio visualizer for Android. </h4>
        
        <div class="tagbar">
            <div class="tag">Unity</div>
            <div class="tag">Prototype</div>
            <div class="tag">Project Suspended</div>
        </div>
        <br><hr>

        <p>
        <img src="../assets/graphics/covers/blinky.jpg" class="project-cover">
        <h3 style="margin:0">Links:</h3>
        <ul style="margin:0px">
            <li><a class="project-link" href="http://github.com/pexogamedev/blinky">GitHub code Repository</a></li>
        </ul>
        </p><hr>

        <h3 style="margin:0px">What did I use:</h3>
        <ul style="margin:0px">
        <li>Unity3D</li>
        <li>C#</li>
        <li><a href="https://www.youtube.com/channel/UCBefBxNTPoNCQBU_Lta6Nvg" class="project-link">Some Neffex's music</a></li>
        </ul><hr>

        <h3 style="margin:0px">What did I learn:</h3>
        <ul style="margin:0px">
        <li>Using #region statements (I fell in love with them, I admit).</li>
        <li>Using audio sources and their properties</li>
        <li>Extracting samples from sound file</li>
        <li>Line Renderers</li>
        <li>Scanning mobile device memory (Although I got stuck at struggling with getting persmissions trough manifest)</li>
        </ul><hr>

        <h3 style="margin:0px">Tips & Tricks for less advanced people:</h3>
        <ul style="margin:0px">
        <li class="highlight">It's extremely important to keep using proper naming conventions and to write code that's readable and clean.</li>
        <li>Samples' data from sound files can be used as a seed for Random class.</li>
        <li>Unity can be used not for games only (although it may not be the best option available).</li>
        </ul><hr>

        <h3 style="margin:0px">Devlog:</h3>
        <p style="margin:0px">
           I planned to make an arcade game with obstacles player would have to dodge (I'd either use dashing or blinking[hence "Blinky"] movement mechanisms) in which obstacles would be "randomized" but based on seed from audio samples. This way every song would have it's own "map".
        </p>
    </div>
</div>

</body>
</html>