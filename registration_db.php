<?php

	$servername = "localhost";
	$user = "root";
	$psw = "";

	$conn = mysqli_connect($servername, $user, $psw);
		if (!$conn)
			die ("Could not Connect").mysqli_error ($conn);
		else
			echo "Successfully connected"."<BR>";

	$sql = "CREATE DATABASE smart_school";
		if (mysqli_query ($conn, $sql))
			echo "Database successfully created"."<BR>";
		else
			echo "Error ".mysqli_error ($conn)."<BR>";

	mysqli_select_db($conn, 'smart_school');
	
	$sql = "CREATE TABLE user_profile (
		user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		first_name CHAR (16) NOT NULL,
		last_name CHAR (16) NOT NULL,
		username VARCHAR (32) UNIQUE KEY NOT NULL,
		user_psw CHAR (16) NOT NULL)";
	
		if (mysqli_query ($conn, $sql))
			echo "Table successfully created";
		else
			echo "Error ".mysqli_error ($conn)."<BR>";

		$sql = "INSERT INTO user_profile (first_name, last_name, username, user_psw)
		VALUES ('Vayu', 'Dugar', 'admin', 'admingod')";
		if (mysqli_query ($conn, $sql))
			echo "new record successfully created"."<BR>";
		else
			echo "Error ".mysqli_error ($conn);

	mysqli_close ($conn);
?>