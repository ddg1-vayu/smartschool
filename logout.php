<?php

	session_start('user'); // Initialize the session

	if (isset($_SESSION ['user'])) //check if the session is set or not
		unset ($_SESSION ['user']); //unset the session variables

	session_destroy(); // Destroy the session

	header ("location: index.php"); // Redirect to login page
	
	exit;

?>