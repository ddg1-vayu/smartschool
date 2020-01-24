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
		<LINK REL = "STYLESHEET" TYPE = "TEXT/CSS" HREF = "1.css">
		<SCRIPT SRC = "topnav_resp.js"> </SCRIPT>
	</HEAD>
	<BODY>
		<DIV ID = "main">
			<CENTER>
				<EMBED SRC = "header.swf" NAME = "header" ALIGN = "middle" allowScriptAccess = "sameDomain" TYPE = "application/x-shockwave-flash" pluginspage = "http://www.macromedia.com/go/getflashplayer" />
				<DIV CLASS = "topnav" ID = "myTopnav">
					<A HREF = "About.php" > About </A>
					<A HREF = "impact.php"> Impact of Technology in Education </A>
					<A HREF = "smart-schools-in-india.php"> Smart Schools in India </A>
					<A HREF = "smart_clsrm1.php"> Smart Classrooms </A>
					<A HREF = "google_clsrm.php" CLASS = "active"> Google Classrooms </A>
					<A HREF = "m-learning.php"> M-Learning </A>
					<A HREF = "ContactUs.php"> Contact Us </A>
					<A HREF = "logout.php"> Logout </A>
					<A HREF = "javascript:void(0);" STYLE = "font-size:15px;" CLASS = "icon" ONCLICK = "myFunction()"> &#9776; </A>
				</DIV>
				<P CLASS = "p">
				<IMG SRC = "Google_Classroom_Logo.png" STYLE = "padding: 8px" WIDTH = "200px" HEIGHT = "175px" ALIGN = "RIGHT">
					Google Classroom is a <B CLASS = "special">Learning Management System (LMS)</B> developed by Google for schools that aims to simplify creating, distributing and grading assignments in a paperless way. It was introduced as a feature of <B CLASS = "special">G Suite for Education</B> on May 6, 2014 – followed by its public release on August 12, 2014. In June 2015, Google announced a classroom <B CLASS = "special">Application Programming Interface (API)</B> and a share button for websites, allowing school administrators and developers to further engage with Google Classroom. In March 2017, Google opened Classroom to allow any personal Google users to join classes without the requirement of having a G Suite for Education account, and in April, it became possible for any personal Google user to create and teach a class.
				<BR><BR>
					Google Classroom combines <B CLASS = "special">Google Drive</B> for assignment creation and distribution,<B CLASS = "special">Google Docs</B>, <B CLASS = "special">Google Sheets</B> and <B CLASS = "special">Google Slides</B> for writing, <B CLASS = "special">Gmail</B> for communication, <B CLASS = "special">Google Calendar</B> for scheduling, and <B CLASS = "special">Google Search</B> to help with school projects. Students can be invited to classes through the institution's database, through a private code, or be automatically imported from a school domain. Each class creates a separate folder in the respective user's <B CLASS = "special">Drive</B>, where the student can submit work to be a graded by a teacher. Mobile apps, available for <B CLASS = "special">iOS</B> and <B CLASS = "special">Android</B> devices, let users take photos and attach to assignments, share files from other apps, and access information offline. Teachers can monitor the progress for each student, and after being graded, teachers can return work, with comments, for the student to revise and improve the assignment. Teachers can post announcements to a common class stream, where students can comment. 
				</P>
			</CENTER>
		</DIV>
	</BODY>
</HTML>