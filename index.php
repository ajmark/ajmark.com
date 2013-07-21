<?php session_start();
	if(!isset($_SESSION['visit'])) $_SESSION['visit'] = 0;
	$_SESSION['timeout'] = time(); 
	if ($_SESSION['timeout'] + 10*60 < time()) session_destroy; 
?>
<!DOCTYPE html>
<html lang="en">
	<?php include('includes/head.php'); ?>
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
			  $.get('first_visit.php', function(data) {
					if (data == '0') {
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
					}
				});
		});
	</script>
  </body>
</html>