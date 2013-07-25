<!DOCTYPE html>
<html lang="en">
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
		<link rel='stylesheet' type='text/css' href='fancybox/jquery.fancybox.css' />
		
		<!-- Javascript -->
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/main.js"></script>
		<script type='text/javascript' src="fancybox/jquery.fancybox.js"></script>
		
		<!-- Fancybox -->
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
		
		<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-42674429-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </head>
  
  <body>
    <?php include('includes/header.php'); ?>

    <div id='portfolio-page'>
      <h1>Ruby on Rails Web App | <span>The A &#38; M Karate School </span></h1>
      <br>
			<a class='large-link' href='http://amks.herokuapp.com' target='_blank'>The A &amp; M Karate School live application</a> 
			<p>&lt;-- Follow the link!</p>
			<br>
      <div class="textbox-wide">
        <h2>About the Project</h2>
        <p> This was a semester long project assigned in my Web Application Design and Development class. Our task was to use Ruby on Rails to create a dynamic web application for a mock karate tournament system. Through this project and this class, I learned how to:<br>1. Model data and translate data models into working databases<br>2. Be familiar with the Model-View-Controller pattern in software architecture<br>3. Understand the importance of test driven development<br>4. Use source code control to manage project development through Git<br>5. Apply principles of user-centered design to the development of software<br>6. Apply all of these skills to build a web-based application 
        </p>
      </div>
      <div class="textbox-wide">
        <h2>Project Process</h2>
      <a class="mainimage-box fancybox" href='images/erd.jpg' >
        <h2>Entity Relationship Diagram</h2>
        <img src="images/erd.jpg" style="width: 40em;">
      </a>
        <p> The web app was created in five different phases, each having its own focus on aspects of web application development.<br>In <span>phase 1</span> of the project, we focused on creating the data model of the application through an entity-relationship diagram, database design in third normal form, a data dictionary, and use cases.<br><span>Phase 2</span> of the project introduced us to unit testing and the creation of tables for the database.<br><span>Phase 3</span> focused primarily on the views of the application, where we implemented user-centered design techniques to create an easy-to-use interface. We also established CRUD functionality in our application during this phase which gave the application functional components.<br>In the following two phases, <span>phase 5</span> &amp; <span>phase 6</span>, we implemented more advanced processes to the application such as authentication, authorization and dashboards. We also revisited aspects of previous phases by adding additional unit tests.</p>
      </div>
    </div>

  </body>
</html>