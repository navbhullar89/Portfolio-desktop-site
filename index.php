<!DOCTYPE html>
<!--File name: index.php
	Author name: Nav Bhullar
	File description: index.php contains the code for the home page of my portfolio web site. External stylesheet, php and javascript files are included.-->
<html lang="en">
  <head>
<?php  include_once('includes/head.php'); ?>
    <meta name="description" content="">
    <title>Home | Nav Bhullar</title>
  </head>
  <body onLoad="setActiveNav('nav_home'); initializeFeatured();" >
<?php  include_once('includes/nav.php'); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
			<h1>WELCOME</h1>
				<p>My name is Nav Bhullar and I am a <STRONG>WEB DEVELOPER</STRONG></p>
				<p>I'm web designer. I'm interested in all kinds of visual communication, but my major focus is on designing web, mobile & tablet interfaces. I also have skills in other fields like branding, icon design or web development. Looking for a job to give my capabilities a platform to be my career. </p>
				<p><a class="btn btn-primary btn-lg" href="about_me.php">Know more about me&raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4 featured-work">
          <h2>Featured Work</h2>
		  <p><a id="slideUrlId" href="#" title="My featured work"><img id="image-slider" src="images/arduino-web-server2.jpg" alt ="slide_show arduino"></a></p>
		  <p>
          <a id="prev-image-btn" class="btn btn-default" href="JavaScript:previousImage()">&laquo; Previous</a>
          <a id="next-image-btn" class="btn btn-default" href="JavaScript:nextImage()">Next &raquo;</a>
		  </p>
        </div>
        <div class="col-lg-4 follow-me">
		  <h2>Follow Me</h2>
<?php include_once('includes/nav2.php'); ?>
       </div>
      </div>

      <hr>
<?php include_once('includes/footer.php'); ?>
    </div>
  </body>
</html>
