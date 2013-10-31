<!DOCTYPE html>
<!--File name: project.php
	Author name: Nav Bhullar
	File description: project.php contains the code for the Project page of my portfolio web site,
	it stores all my projects which i have done in past. Images take the user to the external link to show details of projects.
	External stylesheet, php and javascript files are included. -->
<html lang="en">
  <head>
<?php  include_once('includes/head.php'); ?>
    <meta name="description" content="">
    <title>Projects | Nav Bhullar</title>
  </head>
  <body onLoad="setActiveNav('nav_projects');" >
<?php  include_once('includes/nav.php'); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Projects</h1>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
		
          <a href = "http://webdesign4.georgianc.on.ca/~200246735/comp2068/assign1/index.php"><img src ="images/portfolio.jpg" alt="portfolio"></a><br /><br /> 
		  <p>A portfolio is a showcase for your talent and experience - whatever your creative or media field. As you move from job to job more frequently by nature as a freelancer, your portfolio will become your strongest selling tool enabling you to demonstrate past successes in why you were a useful or profitable resource (be that in adding value, increasing sales or readership, changing company perception, organising publicity or whatever.) I have designed my own portfolio site.</p>
        </div>
        <div class="col-lg-4">
		  <a href = "http://www.youtube.com/watch?v=nALHDTacSv4"><img src = "images/Home_Arduino.jpg" alt ="Arduino Home Automation"></a><br /><br />
          
          <p>Today with the advancement in technology life has become so easy. We can find every single thing with a single click. To make it more easier I tried to make a home automation system with the help of Arduino. I made a simple you tube video and post the entire code as an open source on github. Lights and fan are controlled automatically by detecting the light and temperature respectively. You can also control them with a remote control.</p>
		  
       </div>
        <div class="col-lg-4">
          <a href = "http://webdesign4.georgianc.on.ca/~200246735/comp1006/assign1/"><img src = "images/download.jpg" alt ="web design"></a><br /><br />
          <p>Everyone loves to stay organised. It's difficult when there are several family members and only one person have to grocery. So instead of making a grocery list of paper in this technical world I made a simple website for a family to write there grocery list and it will be automatically send to their email. other person can see it and make changes if necessary.</p>
          
        </div>
      </div>

      <hr>
	<?php include_once('includes/footer.php'); ?>
	</div>
  </body>
</html>