<?php session_start();?>

<?php
    include('include/header.php');
?>

<?php
    if(isset($_POST['submit'])) {
        $to = "elainetran.tran@gmail.com";
        $subject = "New Inquiry from Elaine's Website";
        $body = "Name: " . $_POST['name'];
        $body .= "<br/>Company: " . $_POST['company'];
        $body .= "<br/>Message: " . $_POST['message'];
        $body .= "<br/>Email: " . $_POST['email'];
       $headers = 'MIME-Version: 1.0' . "\r\n";
       $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       $headers .= 'From: elainetran.me <elainetran.tran@gmail.com>' . "\r\n";
       $headers .= 'Cc: elainetran.tran@gmail.com' . "\r\n";
       $headers .= 'Bcc: advertising7@gmail.com' . "\r\n";

        mail($to,$subject,$body,$headers);
    }
?>

<body>
    <nav>
        <ul class="navigation">
        <li><a href="index.php">HOME</a></li>
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