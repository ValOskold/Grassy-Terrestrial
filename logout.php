<?php
	//logout.php
	session_start();
 	session_destroy();
	 //display logout message, return to landingpage
	echo("
	<script>
	alert('Logout successful.');
	window.location.replace('index.html');
	</script>
	");
	//header("Location: index.html");
?>
