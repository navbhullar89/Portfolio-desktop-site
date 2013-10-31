<!DOCTYPE html>
<!--File name: about_me.php
	Author name: Nav Bhullar
	File description: about_me.php contains the code for the About_me page of my portfolio web site, it enablee  users to download the pdf form of my CV.
	External stylesheet, php and javascript files are included. -->
<html lang="en">
  <head>
<?php  include_once('includes/head.php'); ?>
    <meta name="description" content="">
    <title>About Me | Nav Bhullar</title>
  </head>
  <body onLoad="setActiveNav('nav_about_me');" >
<?php  include_once('includes/nav.php'); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>About Me</h1>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
		
          <img src="images/nav.jpg" alt="nav">
        </div>
        <div class="col-lg-4">
          <h2>THE SHORT VERSION</h2>
          <p>My name is Nav Bhullar and I am a Web Developer living in Barrie. When it comes down to it, I'm just a regular girl who is passionate about development and design.</p>
		  <h3>Download my CV Below</h3>
          <p><a href="images/Resume_NavBhullar.pdf" target="_blank"><img src="images/pdf-file-logo-icon.jpg"  alt="CV" /></a></p>
       </div>
        <div class="col-lg-4">
          <h2>THE LONG VERSION</h2>
          <p>I grew up in a small town in India, and I often got in trouble in grade school for doodling in my notebooks. However, I wasn't drawing what most children draw. I was sketching 3D buildings, roller coasters, and athletic shoes.I had discovered my love for design and realized it was my calling. After high school, I decided I wanted to make a career out of it. I attended Georgian College, where I majored in Computer Programming.</p>
		  <p>The journey was totally a new starting in my life. New country, new people to communicate with different language as my mother tongue but I survived. Starting from finding a room for my living to a job I did everything by own. This experience not only give me a experience for future but also boosted me up with confidence. </p>
          
        </div>
      </div>

      <hr>
	<?php include_once('includes/footer.php'); ?>
	</div>
  </body>
</html>