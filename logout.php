<?php
	//logout.php
	session_start();
 	session_destroy();
	 //display logout message, return to landingpage
	header("Location: index.html");
?>
