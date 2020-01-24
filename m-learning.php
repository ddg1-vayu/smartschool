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
				<P CLASS = "p">
					The concept of m-learning (the use of mobile devices to deliver education anytime anywhere) could be a boon for India's education sector, especially in the field of adult learning. According to a recent study, Indian users, on an average, spend 3 hours and 18 minutes every day on their smartphones. Can't we think of a new dimension of using the same mobile phones to revolutionize the Indian education sector,using a concept called m-learning or mobile learning? </P>
				<HR COLOR = "#000000" SIZE = "9" STYLE = "border-radius: 5px;">
				<IMG SRC = "mobile-learning-solution-03.png" ALIGN = "LEFT" CLASS = "img1" WIDTH = "40%" STYLE = "padding-right: 8px"><BR>
				<P CLASS = "p">
					The progress of any nation depends on the system of education adopted by it to groom the next generation. With the proliferation of mobile technologies in all walks of life, it is the need of the hour for India to remodel and upgrade the current education delivery system. Though there are many long-term plans that are in various stages of implementation, the immediate goal should be to reach huge masses with limited investment. Nothing but mobile devices can help in the quick conceptualisation of smart education systems.<BR><BR> This can be mainly attributed to the fact that India has the second largest mobile phone user subscription base in the world, with over <B CLASS = "special">900 million</B> mobile phone users. Mobile devices have good penetration even in rural areas where other infrastructure does not exist. This growing ubiquity of mobile phones, the widespread availability and adoption of mobile broadband technology and market penetration of low-cost smartphones also hold key promises for the use of mobile technologies for education delivery in India.
				</P>
				<BR><BR><BR><BR>
				<HR COLOR = "#000000" SIZE = "9" STYLE = "border-radius: 5px;">
				<IMG SRC = "mLearning.png" CLASS = "img1" ALIGN = "RIGHT" HEIGHT = "35%" WIDTH = "45%" STYLE = "padding-left: 8px"><BR>
				<P CLASS = "p">
					All of us are aware of the concept of e-learning which refers to the use of information technology to deliver learning. Several initiatives have been taken by the government of India to promote e-learning. One of the most prominent among them is the setting up of the <B CLASS = "special">National Program on Technology Enhanced Learning (NPTEL)</B> by the Ministry of Human Resource Development (HRD). The aim of NPTEL was to develop curriculum-based video lectures and web courses to enhance the quality of engineering education in India. This programme became a great success that in turn, it triggered the setup of several such programmes across India by both public and private parties.
				</P>
				<BR><BR><BR>
				<HR COLOR = "#000000" SIZE = "9" STYLE = "border-radius: 5px;"><BR><BR>
				<DIV CLASS = "pagination">
					<A HREF = "#" CLASS = "active"> 1 </A>
					<A HREF = "m-learning-2.php"> 2 </A>
					<A HREF = "m-learning-3.php"> 3 </A>
				</DIV>
			</CENTER>
		</DIV>
	</BODY>
</HTML>