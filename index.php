<?php session_start();
	if(!isset($_SESSION['visit'])) $_SESSION['visit'] = 0;
	$_SESSION['timeout'] = time(); 
	if ($_SESSION['timeout'] + 10*60 < time()) session_destroy; 
?>
<?php if ($_SESSION['visit'] == 0): ?>
	<style>
		.intro, .text-body, .homeheader, .homeside {
		  display:none;
		}
	</style>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
	<?php include('includes/head.php'); ?>
  <body>
    <?php include('includes/header.php'); ?>
		<?php include('includes/homecontent.php'); ?>

    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/main.js"></script>
  </body>
</html>