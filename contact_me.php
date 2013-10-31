<!DOCTYPE html>
<!--File name: contact_me.php
	Author name: Nav Bhullar
	File description: contact_me.php contains the code for the contact_me page of my portfolio web site,
	it takes user to my various social networking profiles and also gives them opportunity to call me and email me.
	External stylesheet, php and javascript files are included. -->
<html lang="en">
  <head>
<?php  include_once('includes/head.php'); ?>
    <meta name="description" content="">
    <title>Contact Me | Nav Bhullar</title>
  </head>
  <body onLoad="setActiveNav('nav_contact_me');" >
<?php  include_once('includes/nav.php'); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>CONTACT ME</h1>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
		<h2>Contact Info</h2>          
          <p>For more information about my work and to discuss how I an help you with your web projects,
		  please contact me at:</p>
		  <ul>
			  <li><strong>Email:</strong> <a href="mailto:navbhullar86@gmail.com">navbhullar86@gmail.com</a></li>
			  <li><strong>Phone:</strong> 705-500-5000</li>
		  </ul>
        </div>
        <div class="col-lg-4">
		<h2>Follow Me</h2>
<?php include_once('includes/nav2.php'); ?>
		</div>
      </div>
      <hr>
	<?php include_once('includes/footer.php'); ?>
	</div>
  </body>
</html>