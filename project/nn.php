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
        <h2 style="margin:0">Neon Nebula</h2>
        <h4 style="margin:5px">Classic 2D arcade neon space-shooter.</h4>
        
        <div class="tagbar">
        <div class="tag">Mobile</div>
        <div class="tag">Web</div>
        <div class="tag">Desktop</div>
        <div class="tag">Unity</div>
        <div class="tag">Playable</div>
        <div class="tag">Finished [June 2017]</div>
        </div><br><hr>

        <p>
        <img src="../assets/graphics/covers/nn2.jpg" class="project-cover">
        <h3 style="margin:0">Links:</h3>
        <ul style="margin:0px">
            <li class="animated flash infinite"><a class="project-link" href="http://pexogamedev.pl/neonnebula">Playable web version</a></li>
            <li><a class="project-link" href="http://github.com/pexogamedev/neonnebula">GitHub code repository</a></li>
            <li><a class="project-link" href="downloads/NeonNebula1.15.zip">Download desktop version</a></li>
            <li><a class="project-link" href="downloads/NeonNebulaMobile1.19.apk">Download mobile version</a></li>
            
        </ul>
        </p><hr>

        <h3 style="margin:0px">What did I use:</h3>
        <ul style="margin:0px">
        <li>Unity3D</li>
        <li>C#</li>
        <li>Adobe Photoshop</li>
        <li>PHP + MySQL</li>
        <li><a href="https://www.assetstore.unity3d.com/en/#!/content/42983" class="project-link">Sounds</a> and <a href="https://www.assetstore.unity3d.com/en/#!/content/50735" class="project-link">particles</a> from Asset Store</li>
        </ul><hr>

        <h3 style="margin:0px">What did I learn:</h3>
        <ul style="margin:0px">
        <li>Unity3D Editor controls and shortcuts</li>
        <li>Visual Studio 2017 basic controls and shortcuts</li>
        <li>Basics of Adobe Photoshop</li>
        <li>Monobehaviours and other Unity's classes</li>
        <li>2D Math, Vector Calculus</li>
        <li>Coroutines</li>
        <li>Particle Systems</li>
        <li>Tags</li>
        <li>Variables' scope and static variables</li>
        <li>Saving persistent data using bitformatter</li>
        <li>List data structures</li>
        <li>Mobile input and UI handling</li>
        <li>PHP, SQL, MySQL (storing highest scores in web version)</li>
        
        </ul><hr>

        <h3 style="margin:0px">Tips & Tricks for less advanced people:</h3>
        <ul style="margin:0px">
        <li class="highlight">Always start with the main, most important gameplay element or mechanic. Never work on graphics or UI or whatever else in the beggining. The game has to be <b>playable</b> in the very first place and order. I can't just emphasize this enough.</li>
        <li>Don't use tags for recognizing weather hit entity was an enemy or not (Use Interfaces, Classes or layers instead).</li>
        <li>Try to make your own graphics, even if you think you are no good with that. It might just work.</li>
        <li>A <b>lot</b> of lights extremely lowers performance. Use them sparingly instead (Same goes for tones of particles).</li>
        <li>After you finish the game utilize Unity's potential and release the game for all platforms avaiable to you (PC, Mobiles, even web).</li>
        <li>Show your work to people as soon as it's posibble to <b>play</b> it. Getting early feedback is crucial.</li>
        </ul><hr>

        <h3 style="margin:0px">Devlog:</h3>
        <p style="margin:0px">
            So, this is my very first game I have ever finished. Although it's 5th project of mine that I had started.<br>
            At first the game was supposed to be endless runner - player had a space ship, 3 paths and had to avoid asteroids.<br>
            Soon after I finished prototype mentioned above I asked friends to test the game for me and they asked why can't they shoot so... I added shooting. And that's where the actual game idea came from.
        </p>
        <p>
            Whole developing process took me around 1 month of working for around 5-7 hours daily.
        </p>
    </div>
</div>

</body>
</html>