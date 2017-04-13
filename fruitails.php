<?php session_start();?>

<?php
    include('include/header.php');
?>

<body>
    <nav>
        <ul class="home-top">
            <li><a href="index.php"><img class="home" src="images/icon-home.png" width="90%"/></a></li>
        </ul>
    </nav>

    <h4 class="absolute"><a href="index.php">Elaine's Projects</a></h4>

<!--CASE STUDY -->

    <div>
        <img class="project" src="images/fruitails.png"/>
        <div class='section grey'>
            <h2><strong>Fruitails</strong></h2>
            <p>UX/UI Design | Animation</p>
            <p>Fruitails is a split screen catch game with an interactive mat controller created for a Tech Studio Design course. Players control the movement of two characters, which their feet, at the same time. There are four buttons on the mat used as arrow keys. LED lights are synced with all key press to indicate that the mat is responsive.</p>
            <p><strong>Technologies:</strong>HTML5 Canvas animation, CreateJS, zimjs libraries, Makey Makey Classic</p>
            <p><strong>Additional Material:</strong> Aluminum foil tape, conductive thread, LED lights, wires, alligator clips</p>
            <p><strong>Date:</strong> December 2016</p>
            <p><strong>Website:</strong><a class="color" target="_blank" href="http://gongme.dev.fast.sheridanc.on.ca/fruitail/"> Link</a></p>
        </div>
    </div>

    <div>
        <div class= 'section'>
            <h3><strong>My Role</strong></h3>
            <p>I worked with a graphic designer for this project. We were both interested in creating a technology that would make physical activity more fun and engaging for beginners.</p>
            <p>I worked on the instructions screen, background assets and animation with CreateJS libraries as well as the design/implementation of the interactive mat controller.</p>
            <p><strong>Requirements:</strong> A proposal, alpha preview, presentation, final write-up and a <a class="color" href="https://github.com/mengsigong/Fruitails">gitHub tutorial</a></p>
            <img src= "images/ft_full.png" width= "50%"/>
            <img src= "images/ft_controller.png" width= "50%"/>
        </div>
        <div class= 'section'>
            <h4>The Challenge</h4>
            <h3><strong>Ideation and Feasibility</strong></h3>
            <p>For our first Tech Studio Design project, we had the time, resources and a lot of great technology to use. Our challenge was building a proof of concept and the project flow.</p>
            <img src= "images/ft_sketch.jpg" width= "50%"/>
        </div>
        <div class= 'section'>
            <h4>The Approach</h4>
            <h3><strong>Building Simultaneously</strong></h3>
            <p>We built a paper prototype of the mat with foil tape and conductive thread. This would ensure that keypress events and LED lights worked the way we wanted before having it transferred to the working prototype.</p>
            <p>For the game, we animated on the HTML5 Canvas with the zim.js and EaselJS external libraries.</p>
            <img src= "images/ft_paper.png" width= "50%"/>
        </div>
        <div class= 'section'>
            <h4>The Stumbles</h4>
            <h3><strong>Fail Fast Fail Early</strong></h3>
            <p>Using Arduinos for keypress events would require an extra usb keyboard. We decided to use the Makey Makey board instead for its durability.</p>
            <p>The new interface for V1.2 made the remapping process a lot simpler. However, the tutorials we needed for connecting the Makey Makey board to LED lights were for the Classic version. We decided to remap the Classic version by modifying the code using an Arduino IDE Firmware.</p>
            <img src= "images/ft_makey.png" width= "50%"/>
            <p>After successfully connecting one light using pin D14, we tried to use D16 to connect to extra lights using the same method. However, D16 is defaulted to mouse events, which is not used in our case. We solved this problem by extending GND and D14 to an external breadboard so that we can connect to multiple lights instead of using different pins on one board.</p>
            <p><strong>Game:</strong> Setting random falling objects within four individual columns. Controlling the falling speed and time to manage the game difficulty. Objects staying on stage after falling, slowing down the game. Overlapping apples/pears with traps (rocks), hit test sometimes not working. Set capacity for score bar to progress to next level</p>
            <img src= "images/ft_game.png" width= "50%"/>
        </div>
        <div class= 'section'>
            <h4>The Victories</h4>
            <h3><strong>And Then it Works...</strong></h3>
            <p>While researching conductive material, we went from pressure sensors to using foil tape and conductive thread which greatly expanded the area that players can use. It was also less costly and more durable than the other options we researched such as Velostat or conductive fabric.</p>
            <p>We got two LED lights to light up when extending keyboard pins into the breadboard.</p>
            <img src= "images/ft_lights.png" width= "50%"/>
            <p>The design of the buttons were well thought out. All the seams from the threads were hidden by sewing within the mat material. The conductive thread created a path from each button to the center of the mat, which solved our concern with having too many wires.</p>
            <img src= "images/ft_wires.png" width= "50%"/>
            <p>Extending the ‘ground’ of the Makey Makey by connecting alligator clips also did not seem to take away from the player’s experience.</p>
        </div>
        <div class= 'section'>
            <h4>Reflection</h4>
            <h3><strong>What I Learned</strong></h3>
            <p>Building the game itself was a collaborative task. We would witness our game break over and over again but then we would see it start to work the way it should. We also created all of the assets for the game as we saw it come to life.</p>
            <br/>
            <img src= "images/ft_demo.png" width= "50%"/>
        </div>
         <div class= 'section'>
            <div class="bottom-nav">
                <a id="l" href="boarding.php"><img src="images/icon-left.svg"><h5>Previous</h5></a>
                <a id="r" href="foodcuisine.php"><h5>Next</h5><img src="images/icon-right.svg"></a> 
            </div>
        </div>
    </div>

    </body>
</html>