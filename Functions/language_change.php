<?php 
	setcookie("language", $_GET['lang'], time() + 3600, "/");
	header( 'Location: ../index.php' ) ; 	
?>
	