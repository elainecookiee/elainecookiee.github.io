<?php session_start();?>

<?php
    include('include/header.php');
?>

<body>
    <nav>
        <ul class="navigation">
        <li><a href="index.html">HOME</a></li>
        <li><a href="process.php">PROCESS</a></li>
        <li><a class="active" href="#">ABOUT</a></li>
        <li><a href="resume.html" target="_blank">RESUME</a></li>
        </ul>
    </nav>

     <div id="about" class="center">
        <img id='pic' src='images/profileimg.png' width="20%" alt="profile image"/>
        <div id="description">
        </br>
            <h3><strong>Hi, I am Elaine Tran</strong></h3>
            <p>UX/UI Designer | Front End Developer</p>
            <p>Grad studies @SheridanIMM | Psych @UWaterloo</p>
            </br>
            <h5>// Design is never linear.</h5>
        </div>
    </div>

<?php
    include('include/footer.php');
?>

<body>
</html>