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
					<A HREF = "impact.php" CLASS = "active"> Impact of Technology in Education </A>
					<A HREF = "smart-schools-in-india.php"> Smart Schools in India </A>
					<A HREF = "smart_clsrm1.php"> Smart Classrooms </A>
					<A HREF = "google_clsrm.php"> Google Classrooms </A>
					<A HREF = "m-learning.php"> M-Learning </A>
					<A HREF = "ContactUs.php"> Contact Us </A>
					<A HREF = "logout.php"> Logout </A>
					<A HREF = "javascript:void(0);" STYLE = "font-size:15px;" CLASS = "icon" ONCLICK = "myFunction()"> &#9776; </A>
				</DIV>

				<P CLASS = "p"> Technology has brought about a huge revolution in the education sector. Laptops, e-readers and even e-learning apps are now part of everyday education, thanks to the advanced learning solutions that generates smart students. Transformation from a class room with dusty duster and black board, chalk dust and a large cane to a smart class with LEDs, Computers and teaching software did not happen in a day. This smart education initiative has been supported by diverse technology brands by introducing various digital learning solutions. Schools as well as college classrooms are now slowly inching towards advanced education, which rules out most of the conventional teaching methods. Devices including document cameras and projectors make it possible for schools and colleges to implement instructions in smart classrooms. <BR>
				
					<DL CLASS = "p">
						<DT CLASS = "dt"> Smartboards </DT>
							<DD> This is an interactive white board which allows the teacher to project an image from a laptop to the front of the room and the teacher can digitally draw on that image.</DD>
							
						<DT CLASS = "dt"> Digital Podium </DT>
							<DD> This advanced lecture stand is all-in-one smart classroom equipment that features a Touch Monitor, Document Camera, Visualizer, Public Addressing System (PAS) and Uninterrupted Power Supply (UPS).</DD>
							
						<DT CLASS = "dt"> Smart Class Information & Communication Technology </DT>
							<DD> The solution includes <B CLASS = "special">K-12 Digital</B> content, assessment suite introduced on an advanced offline or online LMS. The content can be strictly mapped as per school course and can be further localized as per requirement.</DD>
							
						<DT CLASS = "dt"> Visualizers </DT>
							<DD> Also known as document camera, this visual presenter is a real-time image capture devices that helps to display an object to a huge audience. The device can magnify and project the images of actual, 3-dimensional (3D) objects as well as transparencies.</DD>
				<BR>
					These educational products are highly beneficial for everyone, especially the Teachers, Educators, Presenters, Trainers and also the Corporate Professionals.
				</P>

			</CENTER>
		</DIV>
	</BODY>
</HTML>