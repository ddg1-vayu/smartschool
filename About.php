<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: index.html");
	}
?>

<!DOCTYPE HTML>
<HTML LANG = "EN-IN">
	<HEAD>
		<LINK REL = "shortcut icon" TYPE = "image/x-icon" HREF = "Red-Orb-Alphabet-S.ico">
		<TITLE> The Smart School Initiative </TITLE>
		<META CHARSET = "UTF-8">
		<META NAME = "viewport" CONTENT = "width=device-width, initial-scale=1.0">
		<LINK REL = "stylesheet" TYPE = "TEXT/CSS" HREF = "1.css">
		<SCRIPT SRC = "topnav_resp.js"> </SCRIPT>
	</HEAD>	
	<BODY>
		<DIV ID = "main">
			<CENTER>			
				<EMBED SRC = "header.swf" NAME = "header" ALIGN = "middle" allowScriptAccess = "sameDomain" TYPE = "application/x-shockwave-flash" />				
				<DIV CLASS = "topnav" ID = "myTopnav">
					<A HREF = "About.php" CLASS = "active"> About </A>
					<A HREF = "impact.php"> Impact of Technology in Education </A>
					<A HREF = "smart-schools-in-india.php"> Smart Schools in India </A>
					<A HREF = "smart_clsrm1.php"> Smart Classrooms </A>
					<A HREF = "google_clsrm.php"> Google Classrooms </A>
					<A HREF = "m-learning.php"> M-Learning </A>
					<A HREF = "ContactUs.php"> Contact Us </A>
					<A HREF = "logout.php"> Logout </A>
					<A HREF = "javascript:void(0);" STYLE = "font-size:15px;" CLASS = "icon" ONCLICK = "myFunction()"> &#9776; </A>
				</DIV>
				<P>
					Smart Schools are the learning institutions that have been systematically reinvented in terms of teaching & learning practices and school management in order to prepare children for the age of Information Technology. The objectives of the curriculum of a Smart School are to help students achieve balanced overall development which is to integrate knowledge, skills, values and correct use of language,to state explicitly intended learning outcomes for different ability levels, to offer multi-disciplinary,thematic and continuous learning and to foster skills and attitude appropriate for success in the 21<SUP>st</SUP> Century.
				</P>
			</CENTER>
		</DIV>
	</BODY>
</HTML>