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
        <h2 style="margin:0"> What have I worked on?<i style="float:right;font-size:0.4em; margin-bottom:10px;"># = chronological order </i></h2>
        <div class="third">

        <div class="project animated flash">
            <div class="cover">
                <img src="assets/graphics/covers/uh.png">
                <h3 class="label">#6 Underhell</h3>
            </div>
            <div class="desc">
                Rouglike platformer set in The Hell.
                <a href="project/underhell.php" class="morebutton">More ►</a>
            </div>
        </div>
            
        <div class="project">
            <div class="cover">
                <img src="assets/graphics/covers/blinky.jpg">
                <h3 class="label">#4 Blinky</h3>
            </div>
            <div class="desc">
                Android arcade game with audio visualizer.
                <a href="project/blinky.php" class="morebutton">More ►</a>
            </div>
        </div>

        </div>
        <div class="third">

        <div class="project">
            <div class="cover">
                <img src="assets/graphics/covers/l1617.jpg">
                <h3 class="label">#3 Lublin 1617</h3>
            </div>
            <div class="desc">
                Point'n'click adventure about mystical history of Lublin city.
                <a href="project/l1617.php" class="morebutton">More ►</a>
            </div>
        </div>

        <div class="project">
            <div class="cover">
                <img src="assets/graphics/covers/lw.jpg">
                <h3 class="label">#5 Light Way</h3>
            </div>
            <div class="desc">
                3D, isometric, survival shooter for Android.
                <a href="project/lightway.php" class="morebutton">More ►</a>
            </div>
        </div>

        </div>
        <div class="third">

        <div class="project">
            <div class="cover">
                <img src="assets/graphics/covers/nn.jpg">
                <h3 class="label">#1 Neon Nebula</h3>
            </div>
            <div class="desc">
                Classic, 2D, Arcade, Neon <br>Space-shooter!
                <a href="project/nn.php" class="morebutton">More ►</a>
            </div>
        </div>

        <div class="project">
            <div class="cover">
                <img src="assets/graphics/covers/tsms.jpg">
                <h3 class="label">#2 They Stole My Stuff</h3>
            </div>
            <div class="desc">
                Stealth, hide&seek, AI playground.
                <a href="project/theystolemystuff.php" class="morebutton">More ►</a>
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