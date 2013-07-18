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
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets  -->
    <link rel='stylesheet' type='text/css' href='css/reset.css' />
    <link rel='stylesheet' type='text/css' href='css/style.css' />
		<link type="text/css" href="skitter/css/skitter.styles.css" media="all" rel="stylesheet" />
		
    <!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/main.js"></script>

	<script type="text/javascript" src="skitter/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="skitter/js/jquery.skitter.min.js"></script>
	  
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_wide').skitter({
				theme: 'minimalist',
				numbers_align: 'right',
				progressbar: false,
				auto_play: true,
				dots: true, 
				preview: true,
				interval: 5000, 
				velocity: 0.8,
			});
		});
	</script>
		
  </head>
  
  <body>
		<?php include('includes/header.php'); ?>
		
		<div id='portfolio-page'>
			<h1>Visual Booklet | <span>Contemporary Ukulele</span></h1>
			<br>
			<div id='skitter-wide'>
				<div class='box_skitter box_skitter_wide'>
			    <ul>
						<li><a href="#fade"><img src="images/spread0.png" class="fade" /></a></li>
						<li><a href="#fade"><img src="images/spread1.png" class="fade" /></a></li>
						<li><a href="#fade"><img src="images/spread2.png" class="fade" /></a></li>
						<li><a href="#fade"><img src="images/spread3.png" class="fade" /></a></li>
			  	  <li><a href="#fade"><img src="images/spread4.png" class="fade" /></a></li>
			  	  <li><a href="#fade"><img src="images/spread5.png" class="fade" /></a></li>
						<li><a href="#fade"><img src="images/spread6.png" class="fade" /></a></li>
			    </ul>
				</div>
				<br>
			  <div class='text-box'>
				  <h2>About the Project</h2>
					<p>In this project, our goal was to incorporate our knowledge of typography, grid systems to create a visual booklet of a topic of our choice and interests. Throughout the project, there were many design principles to consider such as deciding on a color scheme and what kind of styled elements we want to add to help accent the content of our books. This booklet is to serve as an example of my skills as both a visual and verbal person and that I have the ability to communicate effectively in both realms.</p>
			  </div>
			  <div class='text-box'>
				  <h2>Project Process</h2>
					<p>The reason I chose to showcase ukulele artists in my design booklet is because playing the ukulele has become a passion of mine over the years and it is a hobby I will truly enjoy for the rest of my life. In my booklet, I wanted to demonstrate that there is a whole culture that revolves around this instrument that is cool and contemporary, something that people do not typically think about when first being introduced to the instrument.</p>
			  </div>
				
			</div>
		</div>
		
		
  </body>
</html>