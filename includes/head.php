  <head>
  	<meta charset="utf-8"/>
  	<title>Alex Mark | Personal Website &amp; Portfolio</title>
  	<meta name="author" content="Alex Mark" />
    <meta name="description" content="Alex Mark's personal website and porftfolio. He is a Carnegie Mellon student studying Information Systems and Human Computer Interaction."/>
  	<meta name="keywords" content="alex mark, ajmark, carnegie mellon, information systems, cmu, alexander mark, website, design, pittsburgh, hillsborough, burlingame, bay area, san francisco, web design, interaction design, user interface, information architect"/>
    <meta name="copyright" content="Alex Mark 2013" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="favicon.ico" >

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets  -->
    <link rel='stylesheet' type='text/css' href='css/reset.css' />
    <link rel='stylesheet' type='text/css' href='css/style.css' />
		
		<!-- Javascript -->
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/main.js"></script>
		
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