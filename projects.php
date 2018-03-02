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
        <h2 style="margin:0"> My Projects </h2>
        <div class="third">

        <div class="project">
                <div class="cover">
                <img src="assets/graphics/covers/uh.png">
                    <h3 class="label">Underhell</h3>
                </div>
                <div class="desc">
                    Rouglike platformer set in The Hell.
                    <a href="/project/underhell.php" class="morebutton">More ►</a>
                </div>
            </div>
            
            <div class="project">
                <div class="cover">
                <img src="assets/graphics/covers/blinky.jpg">
                    <h3 class="label">Blinky</h3>
                </div>
                <div class="desc">
                    Android arcade game with audio visualizer.
                    <a href="/project/blinky.php" class="morebutton">More ►</a>
                </div>
            </div>

            <div class="project">
                <div class="cover">
                <img src="assets/graphics/covers/td.jpg">
                    <h3 class="label">Tower Defense Prototype</h3>
                </div>
                <div class="desc">
                    Prototype of tower defense game. 
                    <a href="/project/blinky.php" class="morebutton">More ►</a>
                </div>
            </div>

        </div>
        <div class="third">

            <div class="project">
               
                <div class="cover">
                    <img src="assets/graphics/covers/nn.jpg">
                    <h3 class="label">Neon Nebula</h3>
                    
                </div>
                <div class="desc">
                    Classic, 2D, Arcade, Neon <br>Space-shooter!
                    <a href="/project/nn.php" class="morebutton">More ►</a>
                </div>
            </div>

            <div class="project">
                <div class="cover" style="background:black">
                <img src="assets/graphics/covers/si.jpg">
                    <h3 class="label">Space Invaders CMD</h3>
                </div>
                <div class="desc">
                    Very simple Space Invaders clone in CMD
                    <a href="/project/blinky.php" class="morebutton">More ►</a>
                </div>
            </div>

        </div>
        <div class="third">

        <div class="project">
                <div class="cover">
                <img src="assets/graphics/covers/lw.jpg">
                    <h3 class="label">Light Way</h3>
                </div>
                <div class="desc">
                    3D, isometric, survival shooter for Android.
                    <a href="/project/lightway.php" class="morebutton">More ►</a>
                </div>
            </div>
            <div class="project">
                <div class="cover">
                <img src="assets/graphics/covers/tsms.jpg">
                    <h3 class="label">They Stole My Stuff</h3>
                </div>
                <div class="desc">
                    Stealth, hide&seek, AI playground.
                    <a href="/project/theystolemystuff.php" class="morebutton">More ►</a>
                </div>
            </div>

        </div>
    </div>
</div>

</body>

<script>
    let projects = document.getElementsByClassName("project");
    let covers = document.getElementsByClassName("cover");
    let descs = document.getElementsByClassName("desc");
    
    for (let i = 0; i < projects.length; i++)
        projects[i].addEventListener('click', function(){
            if(covers[i].classList.contains("moved"))
                {
                    covers[i].classList.remove("moved");
                    descs[i].classList.remove("moved");
                    descs[i].classList.add("reseted");
                    covers[i].classList.add("reseted");
                }
            else
                {
                    covers[i].classList.remove("reseted");
                    descs[i].classList.remove("reseted");
                    covers[i].classList.add("moved");
                    descs[i].classList.add("moved");
                }
        });
</script>
</html>