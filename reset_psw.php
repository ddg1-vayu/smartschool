<!DOCTYPE HTML>
<HTML LANG = "EN-IN">
	<HEAD>
		<LINK REL = "shortcut icon" TYPE = "image/x-icon" HREF = "Red-Orb-Alphabet-S.ico">
		<TITLE> The Smart School Initiative </TITLE>
		<META CHARSET = "UTF-8">
		<META NAME = "viewport" CONTENT = "width=device-width, initial-scale=1.0">
		<LINK REL = "STYLESHEET" TYPE = "TEXT/CSS" HREF = "1.css">
		<SCRIPT SRC = "psw_check.js"></SCRIPT>
	</HEAD>
	<BODY ONLOAD = "frm.reset()">
		<DIV ID = "main">
			<CENTER>
				<EMBED SRC = "header.swf" NAME = "header" ALIGN = "middle" allowScriptAccess = "sameDomain" TYPE = "application/x-shockwave-flash" pluginspage = "http://www.macromedia.com/go/getflashplayer" />
				<TABLE CLASS = "login" BORDER = "0" CELLPADDING = "5" CELLSPACING = "0" BACKGROUND = "form_bg.jpg">
				<FORM NAME = "frm" METHOD = "POST" ACTION = "reset_psw.php" AUTOCOMPLETE = "OFF">
					<TR>
						<TD> Current Username </TD>
						<TD>
							<INPUT TYPE = "TEXT" NAME = "user1" SIZE = "25" MAXLENGTH = "16" PLACEHOLDER = "Enter your current Username" AUTOCOMPLETE = "ON" REQUIRED AUTOFOCUS>
						</TD>
					</TR>
					<TR>
						<TD> Current Password </TD>
						<TD>
							<INPUT TYPE = "PASSWORD" NAME = "old" SIZE = "25" MAXLENGTH = "16" PLACEHOLDER = "Enter your current Password" REQUIRED>
						</TD>
					</TR>
					<TR>
						<TD> New Password </TD>
						<TD>
							<INPUT TYPE = "PASSWORD" NAME = "new" SIZE = "25" MAXLENGTH = "16" PLACEHOLDER = "Enter your new Password" REQUIRED>
						</TD>
					</TR>
					<TR>
						<TD> Confirm Password </TD>
						<TD>
							<INPUT TYPE = "PASSWORD" NAME = "new1" SIZE = "25" MAXLENGTH = "16" PLACEHOLDER = "Re-enter your new Password" REQUIRED ONCHANGE = "check_password()">
						</TD>
					</TR>
					<TR>
						<TD COLSPAN = "2" ALIGN = "CENTER">
							<INPUT TYPE = "SUBMIT" VALUE = "Reset Password" NAME = "submit" CLASS = "login-button">
						</TD>
					</TR>
				</FORM>
				</TABLE>
			</CENTER>
		</DIV>
	</BODY>
</HTML>

<?php

if (isset($_POST['submit']))
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

	$id = stripslashes ($_POST["user1"]);
	$pw = stripslashes ($_POST["old"]);
	$confirm_psw = stripslashes ($_POST["new1"]);

	$sql = "UPDATE user_profile SET user_psw = '$confirm_psw' WHERE username = '$id' AND user_psw = '$pw' ";
	$result = mysqli_query ($conn, $sql); //execute the previous query

	if (mysqli_affected_rows ($conn) > 0)
		header ("location: index.php");
	else
		header ("location: reset_psw.php");

	mysqli_close($conn);
}

?>