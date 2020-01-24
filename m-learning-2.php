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
				
				<P CLASS = "p"> Both e-learning and m-learning are very closely related, the main difference being in the endpoint devices used for viewing the content. Another key aspect of m-learning is that for m-learning content to provide 100% end-user experience, it is important to keep track of some parameters such as layouts and format of the content because of some inherent limitations that are present in mobile device design. <BR> Following are some examples of m-learning in the Indian context: </P>
				<DL CLASS = "p">
					<DT CLASS = "dt"> Flipped classrooms </DT>
						<DD> This is a new education delivery mechanism that is revolutionising the education sector across the world. Flipped classroom uses a combination of face-to-face content delivery and offline learning approach to take the learning experience to the next level. It involves mastering initial concepts of a subject offline by viewing lecture videos and then interacting with experts/teachers later for clarification of doubts and for the practice of advanced concepts like projects and practical sessions where face-to-face guidance is inevitable. The offline videos can be downloaded and viewed using mobile devices and live interactions with the teachers can be done using smartphones. <BR>
						<CENTER>
							<IMG SRC = "mooc.png" CLASS = "img1">
						</CENTER>
						Another variant of flipped classrooms that could be a boon for the education sector in India is the concept of <B CLASS = "special">Massive Open Online Course (MOOC)</B>. MOOC is an open source model for delivering high quality learning content/courses online to anyone free of cost, with no specific restrictions on attendance, age, and geographies and so on. Top global universities have already joined MOOC platforms or started their own MOOC initiatives. Together, they host thousands of courses. The response from Indian students and teachers for MOOC courses has been fantastic. Globally, Indians form the second-largest pool of students attending MOOC courses. Some of the leading MOOCs providers are CoursEra, edX, and Khan Academy. Initiatives like MOOCs when coupled with their accessibility using mobile devices will definitely go a long way in providing high quality education anytime, anywhere to Indian masses who have been deprived of it for various reasons. </DD>
				<BR>
					<DT CLASS = "dt"> Game-based Learning </DT>
						<DD> Mobile games have always been a favourite pastime for people of all age groups. Game-based learning refers to the use of games as a mechanism for learning specific concepts. The advantage of game-based learning is its capability to grab and retain the interest and attention of the learner throughout the learning process. Several mobile applications for learning subjects like Mathematics, English and Statistics already exist in the mobile application store. More such mobile games should be developed for subjects in all domains in order to make m-learning an interesting experience. </DD>
				<BR>
					<DT CLASS = "dt"> Personalised learning </DT>
						<DD> When it comes to learning, people will have their own choice about the preferred mode of learning. For example, some learners would like to read and learn whereas others would prefer to watch a video and learn a concept. With the advancement in the field of learning analytics, it is possible to display content in a preferred mode of learning for each learner. Learning analytics refers to the application of analytics to the data created by each learner to track their personal likes and dislikes with regard to various aspects like type, format, and depth of content coverage in the courses. This would go a long way in enhancing their learning experience. </DD>
				<BR>
					<DT CLASS = "dt"> Social Learning </DT>
						<DD> The use of <B CLASS = "special">Web 2.0</B> technologies like blogs and communities to facilitate learning by collaboration and sharing of knowledge is called social learning. Nowadays, many social media websites such as <B CLASS = "special">LinkedIn</B> and <B CLASS = "special">Twitter</B> have also contributed their share to learning by forming communities and conducting Q&A sessions with experts in various domains. The most prominent usage of smartphones is for accessing social media networks. Support for learning provided by the social media networks will go a long way in promoting social learning using mobile devices. </DD>
				</DL>
				<BR>
				<DIV CLASS = "pagination">
					<A HREF = "m-learning.php"> 1 </A>
					<A HREF = "#" CLASS = "active"> 2 </A>
					<A HREF = "m-learning-3.php"> 3 </A>
				</DIV>
			</CENTER>
		</DIV>
	</BODY>
</HTML>