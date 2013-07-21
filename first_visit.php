<?php
	session_start();
		if(isset($_SESSION['visit'])) {
			if($_SESSION['visit'] == 0) {
				echo $_SESSION['visit'];
					$_SESSION['visit'] = 1;
			}
		}
?>