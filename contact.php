<!DOCTYPE html>
<html lang="en">
	<?php include('includes/head.php'); ?>
  
  <body>
    <?php include('includes/header.php'); ?>

    <div id='main'>
      <div class='text-wrap larger'>
        <h1>Leave me a <span>message</span>.</h1>
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

		<?php include('includes/contactside.php'); ?>

    <!-- <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/main.js"></script>
    
  </body>
</html>