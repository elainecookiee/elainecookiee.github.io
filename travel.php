<?php session_start();?>

<?php
    include('include/header.php');
?>

<body>
    <nav>
        <ul class="home-top">
            <li><a href="index.html"><img class="home" src="images/icon-home.png" width="90%" alt="homepage"/></a></li>
        </ul>
    </nav>

    <h4 class="absolute"><a href="index.html">Elaine's Projects</a></h4>

<!--CASE STUDY -->

    <div>
        <img class="project" src="images/travel.png"/>
        <div class='section grey'>
            <h2><strong>My Travel Inspo</strong></h2>
            <p>UX/UI Design | Web Development</p>
            <p>My Travel Inspo is the first site I created in my grad program at Sheridan using vanilla JavaScript and PHP. I wanted to create a conceptual site based on my experiences travelling over the past year. I animated a plane and a character I created of myself to show progression towards places I dream to be. The idea of "seeing myself there" is represented by a function in JavaScript that simply generates a random background.</p>
            <p><strong>Technologies: </strong>HTML/CSS, JavaScript, PHP</p>
            <p><strong>Date:</strong> October 2016</p>
            <p><strong>Website:</strong><a class="color" target="_blank" href="http://tranela.dev.fast.sheridanc.on.ca/new/"> Link</a></p>
        </div>
    </div>

    <div>
        <div class= 'section'>
            <h3><strong>My Role</strong></h3>
            <p>This project took place September to October 2016. I designed and developed my first website, a personalized travel inspiration site, using HTML, CSS, JavaScript and PHP.</p>
            <img src= "images/travel_final.png" width= "50%" alt="Travel site final website"/>
        </div>
        <div class= 'section'>
            <h4>The Challenge</h4>
            <h3><strong>No External Libraries</strong></h3>
            <p>The requirements for this first project was to build a responsive site without external libraries. The challenge was how to go from a conceptualized idea into executable parts.</p>
        </div>
        <div class= 'section'>
            <h4>The Approach</h4>
            <h3><strong>The Design Process</strong></h3>
            <p>The design context for the project was to decide our own challenge. My approach was to have purpose in my work. I wanted to bring the concept to life by figuring out what i wanted my learning outcomes to be as well as the tools and skills I wanted practice using.</p>
            <img src= "images/travel_sketch.jpg" width= "50%" alt="Travel site sketches"/>
        </div>
        <div class= 'section'>
            <h4>The Stumbles</h4>
            <h3><strong>The Learning Curve</strong></h3>
            <p><strong>Multiple takes:</strong> I started on one version of the site before being introduced to CSS flex box layouts, positioning and media queries which would have been very helpful to know before.</p>
            <p><strong>Adding class active on Navigation: </strong>I created an event listener that would add or remove CSS styling for the active class depending on the user’s current scroll location on the screen.</p>
            <P>The issue was that styling from the previous section could not be removed since the last section of the page ‘connect’ would never reach the top of the screen. After multiple tries, the best solution was to subtract the top of the previous section by the pixel height of the ‘connect’ div.</p>
            <img src= "images/travel_stumble.png" width= "50%" alt="travel site challenges"/>
            <p><strong>Incorporating PHP</strong>Originally, I wanted to have a PHP function that would randomly display background images from an array at a set interval. However, there are no timers in PHP because once the server executes PHP it sends the finished HTML result to the browser. I used JavaScript instead.</p>
            <img src= "images/travel_randBg.png" width= "50%" alt="travel site random background"/>
        </div>
        <div class= 'section'>
            <h4>The Victories</h4>
            <h3><strong>The Work Grind</strong></h3>
            <p><strong>Setting checkpoints:</strong> One thing that I have learn through my journey of self-learning is that building takes a lot of time. Thus, I started on the project a month before and set checkpoints every week to see how I have progressed.</p>
            <p><strong>Adding a gallery feature:</strong> I finished the site at the beginning of the week and took the extra time to build a responsive gallery. I used PHP to randomize the order of the divs displayed in the gallery.</p>
            <img src= "images/travel_gal.png" width= "50%" alt="travel site gallery feature"/>
        </div>
        <div class= 'section'>
            <h4>Reflection</h4>
            <h3><strong>What I Learned</strong></h3>
            <p>I learned that the process of building helps to solidify my skills by giving it context. A place to make errors and see how things work together. My next steps to learning would be embracing variation in terms of the environment and context of use.</p>
        </div>
        <div class= 'section'>
            <div class="bottom-nav">
                <a id="l" href="foodcuisine.php"><img src="images/icon-left.svg" alt="previous project"><h5>Previous</h5></a>
                <a id="r" href="tcr.php"><h5>Next</h5><img src="images/icon-right.svg" alt="next project"></a> 
            </div>
        </div>
    </div>
    
    </body>
</html>