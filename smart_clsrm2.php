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
				
				<P CLASS = "p">
					The computers have revolutionised the education. We hear about smart classes every day. We all know that if a subject is understood better by a visual method, it is more beneficial. So the demand of using smart classes is being forcefully raised. ‘Smart Classes’ are providing education better through presentations and videos. A student can learn and retain a lesson better through visualization. All the students may not understand the teaching methodology of a teacher, but can understand by smart classes. This can be seen in case of movies, i.e. students remember movies better than the lessons taught in classroom. This type of teaching creates an attention called as interest in them. So e-learning is much better. But this should not be applied to all the topics in every subject, because imagination, visualization and application capability of a student regarding the subject may be reduced.
					<BR><BR>
					So, smart classes are better only up to certain extent. Firstly, in smart class mode the curriculum is converted into animated visuals, which not only becomes an enjoyable experience for students but they can also relate to and remember facts easily. For them, while learning in the classroom becomes a thrilling and exciting experience, at the end, they find abstract and difficult concepts easy to comprehend thereby enhancing their academic performance. Such teaching helps to maintain the student’s interest and focus by engaging them fully for the entire learning experience.
					<BR><BR>
					Secondly, from the teacher’s point of view, with the arrival of this digital initiative which is so practical to modern time and friendly to use, the teachers can instantly evaluate/assess the learning achieved by their students in his/her class. If a concept taught is not understood then teacher can repeat with greater clarity and emphasis. He/ she can identify the areas of student’s strength as well as weaknesses. These ultimately help the students for better understanding. Smart classrooms are very much beneficial to teaching-learning process in a school. We make use of an appeal to audio-visual senses of students in using smart boards. These smart boards are like a computer screen, handled by a teacher and sometimes by students.
				</P>
				<BR>
					<DIV CLASS = "pagination">
						<A HREF = "smart_clsrm1.php"> 1 </A>
						<A HREF = "#" CLASS = "active"> 2 </A>
						<A HREF = "smart_clsrm3.php"> 3 </A>
					</DIV>
			</CENTER>
		</DIV>
	</BODY>
</HTML>