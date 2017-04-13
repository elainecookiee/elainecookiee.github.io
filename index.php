<?php session_start();?>

<?php
    include('include/header.php');
?>

<body>

	<div id = "overlay">
	    <div class="sk-folding-cube">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div>
    </div>

	<nav>
        <ul class="navigation">
        <li><a class="active" href="#">HOME</a></li>
        <li><a href="process.php">PROCESS</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="resume.html" target="_blank">RESUME</a></li>
        </ul>
    </nav>

    <section>
	<div class="center grey">
    	<a href="#"><h2 class="name" ><strong>Elaine Tran</strong></h2></a>
    	<p>UX/UI Designer | Front End Developer</p>
    	</br></br></br>
	</div>
	<div>
	    <div class="clearfix">
	    	<div class="row1">
	    	<div class="box">
	    		<img class="card" src="images/teamcat.png" alt="Team Cat Rescue project"/>
	    		<a href="tcr.php">
    		  	<div class="overlay">
			   	  <div class="text">
			   	  	<h5><strong>Team Cat Rescue</strong></h5>
			   	  	<p>HTML/CSS, JavaScript, PHP, MySQL, Git</p>
			   	  </div>
			  	</div>
			  	</a>
	    	</div>
	    	<div class="box">
	    		<img class="card" src="images/yweets.png" alt="Yweets API Mashup project"/>
	    		<a href="yweets.php">
	    		<div class="overlay">
			   	  <div class="text">
			   	  	<h5><strong>Yweets API Mashup</strong></h5>
			   	  	<p>Twitter API, Yelp API, HTML/CSS, PHP</p>
			   	  </div>
			  	</div>
			  	</a>
	    	</div>
	    	<div class="box">
	    		<img class="card" src="images/boarding.png" alt="Prototype App Demo"/>
	    		<a href="boarding.php">
	    		<div class="overlay">
			   	  <div class="text">
			   	  	<h5><strong>Travel App Mobile Demo</strong></h5>
			   	  	<p>Adobe Illustrator, After Effects, Invision</p>
			   	  </div>
			  	</div>
			  	</a>
	    	</div>
    	</div>
    	<div class="row2">
	    	<div class="box">
	    		<img class="card" src="images/fruitails.png" alt="Fruitails Interactive Mat Game"/>
	    		<a href="fruitails.php">
	    		<div class="overlay">
			   	  <div class="text">
			   	  	<h5><strong>Fruitails Interactive Mat Game</strong></h5>
			   	  	<p>HTML5 Canvas, CreateJS, zimjs</p>
			   	  </div>
			  	</div>
			  	</a>
	    	</div>
	    	<div class="box">
	    		<img class="card" src="images/foodCuisine.jpg" alt="Food Cuisine Interactive Data Viz"/>
	    		<a href="foodcuisine.php">
	    		<div class="overlay">
			   	  <div class="text">
			   	  	<h5><strong>Food Cuisine Interactive Data Viz</strong></h5>
			   	  	<p>HTML5 Canvas, CreateJS, zimjs</p>
			   	  </div>
			  	</div>
			  	</a>
	    	</div>
	    	<div class="box">
	    		<img class="card" src="images/travel.png" alt="Personal Travel Inspiration site"/></a>
	    		<div class="overlay">
	    		<a href="travel.php">
			   	  <div class="text">
			   	  	<h5><strong>My Travel Inspo Website</strong></h5>
			   	  	<p>HTML/CSS, JavaScript, PHP, Adobe Ilustrator</p>
			   	  </div>
			  	</div>
			  	</a>
	    	</div>
	    </div>
	</div>
    </section>

<?php
    include('include/footer.php');
?>

	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/main.js"></script>
</html>
