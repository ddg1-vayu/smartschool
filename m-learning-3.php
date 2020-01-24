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
					<A HREF = "google_clsrm.php"> Google Classrooms </A>
					<A HREF = "m-learning.php" CLASS = "active"> M-Learning </A>
					<A HREF = "ContactUs.php"> Contact Us </A>
					<A HREF = "logout.php"> Logout </A>
					<A HREF = "javascript:void(0);" STYLE = "font-size:15px;" CLASS = "icon" ONCLICK = "myFunction()"> &#9776; </A>
				</DIV>
				
				<P CLASS = "p"> The government has already taken some initiatives to popularise m-learning in India like the distribution of <B CLASS = "special">Aakash</B> tablets to college students. However, these initiatives should be accelerated to ensure that the benefits of m-learning penetrate across the length and breadth of India and not only the student population. <BR> Some of the steps that could be taken by the government to promote widespread adoption of m-learning are: </P>
				
					<UL TYPE = "SQUARE" CLASS = "p">
						<LI> The government should offer subsidies to mobile service providers for providing special tariff plans for accessing education portals and specific education sites. </LI>
						<LI> Conduct m-learning promotion and awareness campaigns extensively in villages and other remote locations in India. </LI>
					</UL>
					
				<P CLASS = "p"> Now coming to the concluding notes, what could be the future of m-learning? Obviously, it will be something to do with the <B CLASS = "special">Internet of Things (IoT)</B> ecosystem. IoT is a technology that is used to interconnect embedded objects/devices such as sensors, mobile devices and so on, and facilitate communication among them without the need for any human intervention. The proliferation of IoT technology could lead to the emergence of <B CLASS = "special">wearable learning</B>, that is, getting custom learning experiences with the help of smart sensory and visual devices, that obviously could take us to the next era of learning. </P>
				<BR><BR>

				<DIV CLASS = "pagination">
					<A HREF = "m-learning.php"> 1 </A>
					<A HREF = "m-learning-2.php"> 2 </A>
					<A HREF = "#" CLASS = "active"> 3 </A>
				</DIV>
				
			</CENTER>
		</DIV>
	</BODY>
</HTML>