<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8"/>
  	<title>Alex Mark</title>
  	<meta name="author" content="Alex Mark" />
    <meta name="description" content="Personal website for a current Carnegie Mellon student"/>
  	<meta name="keywords" content="Alex Mark, Carnegie Mellon, Information Systems, cmu, Alexander Mark, website, design, pittsburgh, hillsborough, burlingame, bay area, san francisco, silicon valley, california, pennsylvania, alex, mark, alexander, web design, interaction design, user interface, information architect, information architecture, ajmark, amark"/>
    <meta name="copyright" content="Alex Mark 2013" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="favicon.ico" >

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets  -->
    <link rel='stylesheet' type='text/css' href='css/reset.css' />
    <link rel='stylesheet' type='text/css' href='css/style.css' />

  </head>
  
  <body>
    <?php include('includes/header.php'); ?>

    <div id='main'>
      <div class="text-wrap">
        <h1 class='intro'>
          Just call me <span>Alex</span>.
        </h1>
        <h2 class='text-body'>I am a Carnegie Mellon student, studying Information Systems and Human Computer Interaction. I aspire to work in the UX field through the use of my skills as a software developer and my affinity for design and interfaces. Explore my website and let me introduce myself. </h2>
        <br>
        <h1 class='text-body' id="bio-text"><span>Who</span> Am I?</h1>
				<div class="text-wrap inside-text text-body">
					<img id='goldengate' src='images/goldengate.png' width='300px'>
        	<h2 class='text-body'>I'm a Bay Area native. Growing up on the San Francisco Peninsula, I have had a lot of exposure to the Silicoln Valley and all of the opportunities it has to offer. However, moving to Pittsburgh for school was the best decisions I could have ever made. This city has given me a new perspective on how I view the world and how I can apply myself. It has helped me appreciate everything I have in life and all of my experiences.</h2>
				</div> 
        <br>
        <h1 class='text-body' id="hobbies-text">My <span>Interests</span>.</h1>
				<div class='text-wrap inside-text'>
          <h2 class='text-body'><span>Ukulele &amp; Guitar</span>: Growing up, I was a hip-hop junkie and I never would have expected to fall in love with the Ukulele. I started playing my Freshman year in college and I couldn't stop. Before you know it, I was playing songs by famous Ukulele artists such as Jake Shimabukuro and Troy Fernandez. <br>One thing led to another and in my Sophomore year of college, I bought myself an Alvarez acoustic guitar and I was once again hooked. The challenge of teaching yourself a skill from scratch is something I find exciting and addicting. I've mainly been using my guitar to progress my soloing techniques but I love trying to pick up a song by Tommy Emmanuel every now and then.</h2>
				  <h2 class='text-body'><span>Sports</span>: Mainly basketball but I love all sports, both watching and playing. My teams/heroes include The Warriors, Giants, 49ers, Novak Djokovic, </h2>
				  <h2 class='text-body'><span>Sneakers</span>: I'm a snearkerhead. My friends in highschool got me into the culture and even though I'm not quite on their level, I can still hold my own. I still catch myself browsing sites like SoleCollector every now and then...</h2>
			  </div>
				<br>
        <h1 class='text-body' id='news-text'><span>Things</span> I've Been Up To.</h1>
				<div class='text-body text-wrap inside-text'>
					<img class='xray' src='images/surgery.jpg'>
					<img class='xray' src='images/broken1.jpg'>
					
          <h2><span>March 2013</span>: I broke my ankle. Probably one of the most painful and difficult experiences of my life, I don't reccomend it. I fractured the fibula and displaced the tibia by a couple of millimeters. It required 9 screws and a plate to fix. I'm still feeling the effects from the surgery but the whole experience has taught me a lot about myself and has made me thankful for my health. I'm glad I now have a really cool scar and pictures to share.</h2>
				</div>
        <br>
				
		  </div>
    </div>

    <div id='side' class='homeside'>
      <img src="images/profile.jpg" class="profile" alt="profile-pic">
      <br><br>
      <div class="subprofile">
        <h3>Alexander J. Mark</h3>
        <h3>CMU Class of 2015</h3>
        <h3>Status: Working</h3>
        <br><br>
        <h3 class='scroll' id='bio'><span>Who</span> Am I?</h3>
        <h3 class='scroll' id='hobbies'>My <span>Interests</span>.</h3>
        <h3 class='scroll' id='news'><span>Things</span> I've Been Up To.</h3>
      </div>
    </div>

    <!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/main.js"></script>
	<script> 
		$(document).ready(function() {
  			$('.intro').css('display', 'none');
  			$('.text-body').css('display', 'none');
  			$('.homeheader').css('display', 'none');
  			$('.homeside').css('display', 'none');

  			$('.intro').fadeIn(800, function(){
    			$('.text-body').delay(500).fadeIn(350, function(){
      				$('.homeheader').fadeIn(350, function(){
        				$('.homeside').fadeIn(350);
      				});
    			});
  			});
		});
	</script>
  </body>
</html>