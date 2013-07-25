<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8"/>
  	<title>Alexander Mark | ajmark.com</title>
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
				$('.box_skitter_large').skitter({
					theme: 'minimalist',
					numbers_align: 'center',
					progressbar: true,
					auto_play: true,
					dots: true, 
					preview: true,
					interval: 4500, 
					velocity: 0.8,
				});
			});
		</script>

		<!-- Google Analytics -->
		<script> 
			$(document).ready(function() {
			  $.get('first_visit.php', function(data) {
					if (data == '0') {
  					$('.intro').fadeIn(1000, function(){
    					$('.text-body').delay(1200).fadeIn(500, function(){
      					$('.homeheader').fadeIn(500, function(){
        					$('.homeside').fadeIn(500);
      						});
    						});
  						});
					}
				});
			});
		</script>

  </head>
  
  <body>
    <?php include('includes/header.php'); ?> 

    <div id='portfolio-page'>
      <h1>Form &#38; Composition | <span>Gestalt Principles</span></h1>
      <br>

      <div class="textbox-wide">
        <h2>About the Project</h2>
        <p>The purpose of this assignment was to experiment with simple objects to convey meaning. Our task was to use black squares of different sizes and orientations to illustrate words such as motion, tension and order. The theme of the project was to create our compositions around the <a href='http://sixrevisions.com/web_design/gestalt-principles-applied-in-design/'>Gestalt principles</a>, where it was essential that each overall piece conveyed the meaning rather than their individual parts. This required us to explore the many different uses of white space, figure, proximity, etc. and how each of these concepts interact with each other.
        </p>
        <br>

        <h2>Project Process</h2>
        <p> Before beginning to brainstorm ideas of each composition, the first step I took was to look of the definition for each of the assigned words even if I already thought I knew the definition of a word. This initial process helped me organize my ideas so I understood the direction I wanted to take while creating my project. I went through several sketches before picking my favorite iteration of each word. This was my first design project and it got me thinking and trying to solve problems in ways that challenged me to step out of my comfort zone.
        </p>
	    </div>
	  <div id='skitter'>
	  	<div class="box_skitter box_skitter_large">
			<ul>
				<li><a href="#fade"><img src="images/order.png" class="fade" /></a><div class="label_text"><p>Order</p></div></li>
				<li><a href="#fade"><img src="images/motion.png" class="fade" /></a><div class="label_text"><p>Motion</p></div></li>
				<li><a href="#fade"><img src="images/tension.png" class="fade" /></a><div class="label_text"><p>Tension</p></div></li>
				<li><a href="#fade"><img src="images/congestion.png" class="fade" /></a><div class="label_text"><p>Congestion</p></div></li>	
				<li><a href="#fade"><img src="images/whimsy.png" class="fade" /></a><div class="label_text"><p>Whimsy</p></div></li>	
			</ul>
	  	</div>
	  </div>	
		
    </div> 
  </body>
</html>