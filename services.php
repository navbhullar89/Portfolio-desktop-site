<!DOCTYPE html>
<!--File name: services.php
	Author name: Nav Bhullar
	File description: services.php contains the code for the Services page of my portfolio web site, it describes the various services I offer. External stylesheet, php and javascript files are included. -->
<html lang="en">
  <head>
<?php  include_once('includes/head.php'); ?>
    <meta name="description" content="">
    <title>Services | Nav Bhullar</title>
  </head>
  <body onLoad="setActiveNav('nav_services');" >
<?php  include_once('includes/nav.php'); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Services</h1>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Web Designing</h2>
          <p>My designs will capture the attention of your audience through interaction, ease-of-use and value. I believe that every great design starts with fresh creative. Before a single pixel is populated, I will assist you in defining the creative voice for your brand and its visual presence on the web.I have over 10 years of experience designing and building attractive, accesible websites for clients all over the world. I use Wordpress and ExpressionEngine for all of my projects and write semantic, standard-compliant code. Have a look at my portfolio or contact me.</p>
          
        </div>
        <div class="col-lg-4">
          <img src="images/web_design1.jpg" alt ="web designing">
		  <img src="images/images.jpg" alt ="Arduino">
       </div>
        <div class="col-lg-4">
          <h2>Arduino</h2>
          <p> Arduino, a very small device has made a huge space of it's own in today's advanced growing technology. You can even lift tons of heavy weight with the use of such a smal device. I can help you in making your projects related to arduino too.</p>
          <p><a class="btn btn-default" href="contact_me.php">Let's Talk About Your Project &raquo;</a></p>
        </div>
      </div>

      <hr>

	<?php include_once('includes/footer.php'); ?>
	</div>
  </body>
</html>