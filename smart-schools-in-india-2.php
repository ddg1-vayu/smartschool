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
					<A HREF = "smart-schools-in-india.php" CLASS = "active"> Smart Schools in India </A>
					<A HREF = "smart_clsrm1.php"> Smart Classrooms </A>
					<A HREF = "google_clsrm.php"> Google Classrooms </A>
					<A HREF = "m-learning.php"> M-Learning </A>
					<A HREF = "ContactUs.php"> Contact Us </A>
					<A HREF = "logout.php"> Logout </A>
					<A HREF = "javascript:void(0);" STYLE = "font-size:15px;" CLASS = "icon" ONCLICK = "myFunction()"> &#9776; </A>
				</DIV>
				<P CLASS = "p"> Education has taken a quantum leap with the Internet, breaking classroom barriers and introducing students to a whole range of courses for upgrading themselves, which are also more affordable and accessible. In an IT savvy country like India, virtual classrooms assume a whole new value. <B CLASS = "special">MOOCs (Massive Open Online Courses)</B> that are, so far free, have generated a new wave in an education environment highly dissatisfied with the state of college education. The move is set to get a further push with India and the US looking to partner in this domain. In 2012, online education enrolment witnessed a 21% growth rate in India compared to a paltry 2% growth rate in higher education. What goes without saying is that the easy access to technological services is the main reason behind this.
				<BR><BR>
				Another critical factor is that the requirement for trained engineers and technologists is far more than the number of qualified graduates that India's technical institutions currently produce. It is imperative that the institutions like IITs, IISc, NITs and other leading universities in India disseminate teaching/learning content of high quality through all available media like virtual classrooms. It may be mentioned that the previous government had also launched an open repository for school education called <B CLASS = "special">National Repository of Open Educational Resources (NROER)</B> in August last year. This repository included concept maps, videos, audio clips, talking books, multimedia, learning objects, photographs, diagrams, charts, articles, Wikipages and textbooks for all grades in multiple languages. Students could search or browse through concepts from various subjects from elementary and secondary level education. They could also comment on them and contribute to the repository. </P>
				<CENTER>
					<IMG SRC = "www-education.jpg" CLASS = "img1">
				</CENTER>
				<P CLASS = "p"> A good example of extending training with virtual classrooms can be found at <B CLASS = "special">BrihanMumbai Municipal Corporation (BMC)</B>, where audio-visual facilities were set up in 400 civic-run schools across the city at a cost of &#x20B9;27 Crore last year. A brain child of <B CLASS = "special">Uddhav Thackeray</B>, the initiative's aim was to teach students in a fun-filled manner, which, in turn, would put a check on poor attendance.
				<BR><BR>
				India needs to take the virtual classrooms to each and every sphere of education to take India to the next level as far as learning, knowledge and skills are concerned. This makes India a very promising market for introducing newer technology in classrooms. A recent trend is that schools in tier two and tier three cities are increasingly adopting the latest technology. Moreover, state governments are also giving a boost to the adoption of technology in schools.
				<BR><BR>
				There has been a significant improvement in student enrolment and attendance, as well as a reduction of student dropouts due to ICT interventions. Yet another study conducted by the <B CLASS = "special">Xavier Institute of Management, Bhubaneswar</B> revealed that computer-aided education has improved the performance of children in subjects such as English, Mathematics and Science, which is taught through computers using multimedia-based educational content. Furthermore, with technological innovations gaining ground in the arena of school education, there has also been a growth of education focused tablet computers in the market and the trend is only picking up.</P>
				<BR>
				<DIV CLASS = "pagination">
					<A HREF = "smart-schools-in-india.php"> 1 </A>
					<A HREF = "#" CLASS = "active"> 2 </A>
				</DIV>
			</CENTER>
		</DIV>
	</BODY>
</HTML>