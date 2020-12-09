<?php
	//logout.php
	session_start();
 	session_destroy();
 	//display logout message, return to landingpage
?>
<p>You have successfully logged out</p>
<a href="login.php">Login here</a>
