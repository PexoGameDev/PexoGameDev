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
        <h2 style="margin:0">They Stole My Stuff</h2>
        <h4 style="margin:5px">Stealth-like hide&seek AI playground. </h4>
        
        <div class="tagbar">
            <div class="tag">Unity</div>
            <div class="tag">AI</div>
            <div class="tag">Prototype</div>
            <div class="tag">Project Canceled</div>
        </div>
        <br><hr>

        <p>
        <img src="../assets/graphics/covers/tsms2.jpg" class="project-cover">
        <h3 style="margin:0">Links:</h3>
        <ul style="margin:0px">
            <li><a class="project-link" href="http://github.com/pexogamedev/theystolemystuff">GitHub code Repository</a></li>
        </ul>
        </p><hr>

        <h3 style="margin:0px">What did I use:</h3>
        <ul style="margin:0px">
        <li>Unity3D</li>
        <li>C#</li>
        <li>Git & GitHub</li>
        <li>Blender</li>
        </ul><hr>

        <h3 style="margin:0px">What did I learn:</h3>
        <ul style="margin:0px">
        <li>Basics of git version control and GitHub</li>
        <li>Enumerators</li>
        <li>Layers</li>
        <li>Very basic 3D modeling</li>
        <li>Basics of AI and pathfinding</li>
        </ul><hr>

        <h3 style="margin:0px">Tips & Tricks for less advanced people:</h3>
        <ul style="margin:0px">
        <li class="highlight">Set up a GitHub account and share your code, even if it's not good. Actually especially when it's not good.</li>
        <li>Lists can posibbly be used to randomize a set of combinations of objects/numbers without repetitions.</li>
        <li>Don't use meshes to detect player in sight. Learn raycasts instead.</li>
        </ul><hr>

        <h3 style="margin:0px">Devlog:</h3>
        <p style="margin:0px">
            On the first I was going to turn it into full fledged game, but I quickly realized that it'd require way too much of toying with 3D modeling than I was willing to do.<br>
            Instead of making a game I decided to just toy with AI, some simple animations and detecting player in certain cases. 
            I even designed some simple patrol system with few diffrent states of guards like Idle, Patroling, OnAlert and ChasingPlayer. Guards in diffrent states acted diffrently.
        </p>
    </div>
</div>

</body>
</html>