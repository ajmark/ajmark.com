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
		<?php include('includes/homecontent.php'); ?>

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