<?php
	if (isset($_POST['login']))
	{
		$servername = "localhost";
		$user = "root";
		$psw = "";
		$dbname = "smart_school";

		$conn = mysqli_connect($servername, $user, $psw, $dbname);
			if (!$conn)
				die ("Could not Connect").mysqli_error ($conn);
			else
				mysqli_select_db ($conn, $dbname);

		$id = stripslashes ($_POST["user"]);
		$pw = stripslashes ($_POST["passcode"]);

		$sql = "SELECT username, user_psw FROM user_profile WHERE username = '$id' AND user_psw = '$pw' ";
		//this query selects the record from the table, if there are any, based on user input
		$result = mysqli_query ($conn, $sql); //execute the previous query

		if (mysqli_num_rows ($result) > 0) {
			session_start();
			$_SESSION['user'] = $id;
			header ("location: About.php");
		} //if the entered record exists, the user is navigated to the Home page

		else {
			header ("location: index.php");
		}
	}
?>