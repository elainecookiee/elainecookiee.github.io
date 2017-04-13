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

 <img class="project" src="images/yweets.png" alt="Yweets API Mashup project"/>
    <div class='section grey'>
        <h2><strong>Yweets - API Mashup</strong></h2>
        <p>UI Design | Web Development</p>
        <p>I combined Twitter and Yelp's search APIs to give users access to the latest Twitter feed via hashtags by searching the name of a restaurant. This gives the user feedback to what others have to say about a restaurant or business.</p>
        <p>The Twitter Search API is part of Twitter’s REST API. It focuses on relevance by preforming a query for recent or popular Tweets published within the last seven days. While Yelp’s Business Search API returns information about businesses and reviews by accessing the business id.</p>
        <p><strong>Technologies:</strong> Twitter REST API, Yelp Search API, HTML/CSS, PHP</p>
        <p><strong>Date:</strong> January 2017</p>
        <p><strong>Website:</strong><a class="color" target="_blank" href="http://tranela.dev.fast.sheridanc.on.ca/API/php/api%20stuff.html"> Link</a></p>
    </div>

    <div class='section grey'>
        <img src= "images/y_full.png" width= "50%" alt="Yweets full screen"/>
    </div>

     <div class= 'section'>
            <div class="bottom-nav">
                <a id="l" href="tcr.php"><img src="images/icon-left.svg" alt="previous project"><h5>Previous</h5></a>
                <a id="r" href="boarding.php"><h5>Next</h5><img src="images/icon-right.svg" alt="next project"></a> 
            </div>
        </div>
	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="script.js"></script>
</html>
