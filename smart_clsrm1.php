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
					<A HREF = "smart_clsrm1.php" CLASS = "active"> Smart Classrooms </A>
					<A HREF = "google_clsrm.php"> Google Classrooms </A>
					<A HREF = "m-learning.php"> M-Learning </A>
					<A HREF = "ContactUs.php"> Contact Us </A>
					<A HREF = "logout.php"> Logout </A>
					<A HREF = "javascript:void(0);" STYLE = "font-size:15px;" CLASS = "icon" ONCLICK = "myFunction()"> &#9776; </A>
				</DIV>

				<P CLASS = "p"> Smart class is a new method of teaching recently introduced. Today's classrooms are in transition. Technology of all sorts is making its way into the classroom and offering new ways to engage learners. The transition is not smooth, nor is it following a single path. Classroom technology was once limited to presentation via VCRs, filmstrips, and slide projectors. Today we find more interactive technology that uses LCD projectors, interactive whiteboards, notebook and desktop computers, and tablets such as the iPad. The global market for digital English language learning products and services reached US$ 1.31 billion in 2011. The worldwide five-year <B CLASS = "special">Compound Annual Growth Rate (CAGR)</B> is 14.5% and revenues will reach US$ 2.58 billion by 2016. </P>
				<CENTER>
					<IMG SRC = "edtech-1024x389.png" CLASS = "img1" HEIGHT = "70%" WIDTH = "70%">
				</CENTER>
				<P CLASS = "p"> The students are taught through digital instruction materials, 3D animated modules and videos. All the renowned schools are setting a benchmark for using this concept. Now the students are thrilled at this concept of innovative and interactive learning process. The concept of digitized classroom has not only redefined the education but it also gave the students better insight. Their imagination is fired. The students learn difficult and abstract curriculum concepts, watching highly engaging visuals and animations. This makes learning an enjoyable experience for students while improving their overall academic performance in school. Therefore it is clear that a smart classroom is a classroom that has an instructor station, equipped with computer and audio-visual equipment. Smartclass also enables teachers to instantly assess and evaluate the learning achieved by their students in class with an innovative assessment technology – smart assessment system – designed by a well-known company. </P>
				<CENTER>
					<IMG SRC = "smart-logo.png" CLASS = "img1" HEIGHT = "65%" WIDTH = "65%">
				</CENTER>
				<P CLASS = "p"> SmartClass is powered by a vast repository of digital instruction materials exactly mapped to meet the specific objectives laid out by different state learning standards. This repository is continuously populated through the on-going development at a well-known company's digital products and solutions group. The content repository consists of thousands of highly animated, lesson specific, 3D and 2D multimedia modules. These modules are built with an Instructor-led design that allows the teacher to effectively transact the lesson in a typical classroom of diverse set of learners. The modules are embedded in a template that allows the teachers to teach a chosen lesson in class, frame by frame, with engaging and instructionally sound animated set of visuals while retaining complete control on the pace of delivery. The curriculum reach unfolds from kindergarten to grade twelve covering subjects such as Mathematics, Science, English, EVS, Social Studies, Physics, Chemistry, Biology, History, Geography, Accountancy, Economics and Business Studies. </P>
				<BR>
				<DIV CLASS = "pagination">
					<A HREF = "#" CLASS = "active"> 1 </A>
					<A HREF = "smart_clsrm2.php"> 2 </A>
					<A HREF = "smart_clsrm3.php"> 3 </A>
				</DIV>
			</CENTER>
		</DIV>
	</BODY>
</HTML>