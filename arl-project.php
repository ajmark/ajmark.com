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
      <h1> Website Redesign | <span> The Animal Rescue League of Pittsburgh</span></h1>
      <br>
      <div class="text-box">
        <h2>About the Project</h2>
          <p>This was a school project with a mock client. The purpose of the project was to use what I have learned about typography and grid systems to redesign a website for an organization. I was assigned the <a href="http://www.animalrescue.org/" target="_blank">Animal Rescue League of Pittsburgh</a>. I had to make special considerations for the specific content and the design objectives that the clients wanted to include in the website. A large part of this project involved understanding the interactive parts of web design and how different layouts would offer the best experience for the users.
          </p>
          <br>
        <h2>Design Process</h2>
          <p>One of the main goals of the Animal Rescue League client was to increase the number of views on the adoption page to help improve adoption numbers from the center. Some of the pain points of the current website are that there is no clear call to action, the information is unorganized and irrelevant to their listed categories, and that there are too many navigation options on the homepage for the user to easily make a decision from. Through my iterations of the homepage, I made the navigation to the adoption page the focus of the website. I attempted to create a clear call to action to visit the adoption page and to create a better system to browse available animals.
        </p>
      </div>

      <a class="mainimage-box fancybox" href='images/arlfinal1.jpg' >
        <h2>Final Homepage</h2>
        <img src="images/arlfinal1.jpg">
      </a>

      <a class="mainimage-box fancybox" href='images/arlfinal2.jpg'>
        <h2>Final Adoption Page</h2>
        <img src="images/arlfinal2.jpg">
      </a>

      <div id="subsection">
        <ul>
          <li>
            <a class="mainimage-box fancybox" href='images/arliteration1.jpg'>
              <h2>First Homepage Iteration</h2>
              <img src="images/arliteration1.jpg">
            </a>
          </li>
          <li>
            <a class="mainimage-box fancybox" href='images/arliteration2.jpg'>
              <h2>First Adoption Page Iteration</h2>
              <img src="images/arliteration2.jpg">
            </a>
          </li>
        </ul>
      </div>
    </div>
    
  </body>
</html>