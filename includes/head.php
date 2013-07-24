  <head>
  	<meta charset="utf-8"/>
  	<title>Alexander Mark | ajmark.com</title>
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
		
		<!-- Javascript -->
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/main.js"></script>
		
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
		
		<!-- Google Analytics -->
		<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-42674429-1', 'ajmark.com');
  		ga('send', 'pageview');
		</script>
  </head>