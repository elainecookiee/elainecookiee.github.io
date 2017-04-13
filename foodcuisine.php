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

 <img class="project" src="images/foodCuisine.jpg"/>
    <div class='section grey'>
        <h2><strong>Interactive Data Visualization</strong></h2>
        <p>Interaction Design | Web Animation</p>
        <p>Inspired by Food Cuisine's unique data visualization displays, I created an interactive demo where users can drag and play around with the food items to reveal hidden facts or audio feedback.</p>
        <p><strong>Technologies:</strong> HTML5 Canvas Animation, CreateJS, zimjs libraries, Adobe Illustrator, Adobe Photoshop</p>
        <p><strong>Date:</strong> November 2016</p>
        <p><strong>Website:</strong><a class="color" target="_blank" href="http://tranela.dev.fast.sheridanc.on.ca/zim/select.html"> Link</a></p>
    </div>

    <div class='section grey'>
        <img src= "images/fc_full.png" width= "50%" alt="food cuisine full site"/>
        <img src= "images/fc_mobile.png" width= "50%" alt="food cuisine on mobile"/>
    </div>

    <div class= 'section'>
        <div class="bottom-nav">
            <a id="l" href="fruitails.php"><img src="images/icon-left.svg" alt="previous project"><h5>Previous</h5></a>
            <a id="r" href="travel.php"><h5>Next</h5><img src="images/icon-right.svg" alt="next project"></a> 
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="script.js"></script>
</html>
