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
      <div class='text-wrap larger'>
        <h1>Leave me a <span>Message</span></h1>
        <div id='wrapper'>
          <form action='send_mail.php' method='post'>
            <div class='field' style='font-weight: lighter'>
              Name
              <br>
              <input type='text' name='name'>
            </div>
            <div class='field' style='font-weight: lighter'>
              E-mail
              <br>
              <input type='text' name='email_address'>
            </div>
            <br><br>
            <div style='font-weight: lighter'>
              Message
              <br>
              <textarea type='textfield' name='comments'></textarea>
              </div>
            <input type='submit' value='Send Message!' class='button' style='font-weight: lighter'>
          </form>
        </div>
      </div>
    </div>

    <div id='side'>
      <div class="info">
        <h5>ajmark@andrew.cmu.edu</h5>
        <br>
        <h3>Talk to me about sports, music, technology or just to say hi!</h3>
      </div>
    </div>

    <!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/main.js"></script>
    
  </body>
</html>