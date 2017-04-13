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
        <img class="project" src="images/teamcat.png"/>
        <div class='section grey'>
            <h2><strong>Team Cat Rescue</strong></h2>
            <p>UX/UI Design | Web Development</p>
            <p>Team Cat Rescue is redesign project, in collaboration with three group members in the Sheridan Interactive Media program. The requirements were to build a responsive multi-page website, collaborate through a Git repository, implement two databases and create visual coherency between the pages of the site.</p>
            <p><strong>Technologies:</strong> HTML/CSS, Adobe Illustrator, JavaScript, PHP, MySQL, Git</p>
            <p><strong>Date:</strong> December 2016</p>
            <p><strong>Website: </strong><a class="color" target="_blank" href="http://amnon.rocks/projects/databases/cats/">Link</a></p>
        </div>
    </div>

    <div>
        <div class= 'section'>
            <h3><strong>My Role</strong></h3>
            <p>I led the design and project management role in a collaborative redesign for Team Cat Rescue’s site. I worked with a small team of developers and a designer.</p>
            <p>I created the group wireframes and prototypes, driven by human-centered design principles. I worked on the 'About' page and the individual pages for each cat.</p>
            <img class="casestudy" src= "images/tcr_full.png" width="50%" alt="Team Cat Rescue website"/>
            <img class="casestudy" src= "images/tcr_flow.JPG" width="50%" alt="Team Cat Rescue userflow"/>
        </div>
        <div class= 'section'>
            <h4>The Challenge</h4>
            <h3><strong>Establishing Purpose</strong></h3>
            <p>Team Cat Rescue’s current site lacks focus. The site emphasizes foster-based rescue for their cats but the Call-to-Action would send users to the donation page. The site is not optimal for mobile use. </p>
            <p>We had 3 weeks to build a redesign for the site.</p>
            <img class="casestudy" src= "images/tcr_before.png" width= "50%" alt="Website before"/>
        </div>
        <div class= 'section'>
            <h4>The Approach</h4>
            <h3><strong>Divergent-Convergent</strong></h3>
            <p><strong>// Exploration Phase (Divergent thinking):</strong></br> Each team member conducted market research and sketched our own ideas of how the site should look like. Learning to ask the right questions is pivotal to any design process in order to incorporate appropriate UX strategies.</p>
            <p><strong>// Refinement Phase (Convergent thinking):</strong></br> Next, we pitched our ideas and findings to the team and out group members. This helped us attain the feedback we needed to push our project forward.</p>
            <p><strong>//Outcome:</strong><br> 1) Simple/effective filtering system upon landing </br> 2) Individual cat stories and success stories </br> 3) Booking an appointment to see the cat</p>
            <img class="casestudy" src= "images/tcr_sketch.jpg" width= "50%" alt="website sketch"/>
            <img class="casestudy" src= "images/tcr_wireframe.png" width= "50%" alt="website wireframe"/>
        </div>
        <div class= 'section'>
            <img class="casestudy" src= "images/tcr_noresults.png" width= "50%" alt="website no results page"/>
        </div>
        <div class= 'section'>
            <h4>Reflection</h4>
            <h3><strong>What I learned</strong></h3>
            <p>Through this project, I learned that collaboration goes beyond communication. It requires a mutual effort in setting attainable goals, creative problem solving and a streamlined approval process.</p>
            <p>It was important to always have someone keep the purpose and goal of the project in check. The “What is this for” and “Are we building the right thing" rather than being too focused on what we are building. Creating is iterative.</p>
            <p>I think that there is value in having clarity in not just the finished project but the intended experience you want the user to have.</p>
            <br/>
        </div>

        <div class= 'section'>
            <div class="bottom-nav">
                <a id="l" href="travel.php"><img src="images/icon-left.svg" alt="previous project"><h5>Previous</h5></a>
                <a id="r" href="yweets.php"><h5>Next</h5><img src="images/icon-right.svg" alt="next project"></a> 
            </div>
        </div>
    </div>

    </body>
</html>