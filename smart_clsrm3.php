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
				<P CLASS = "p"> Some of the advantages for Smart board used inside a classroom are:
					<DL CLASS = "p">
						<DT CLASS = "dt"> Appeal to audio-visual senses </DT>
							<DD> By using smart boards in a classroom, we are appealing to both the audio sense and visual senses of students. Learning in such a way is very effective as the information is strongly embedded in a kid's mind. </DD>
						<BR>
						<DT CLASS = "dt"> No waste of time </DT>
							<DD> In traditional classroom, much time was wasted in drawing diagrams on the black/white boards, whereas in smartboards, the diagrams are engrained deep in memory. Time is used better for the active learning part. </DD>
						<BR>
						<DT CLASS = "dt"> Virtual field trips </DT>
							<DD> The students are taken virtually to field trips. When a teacher is covering a lesson on desert animals, using smartboard, we could play on screen a tour of desert like Sahara or Kalahari for the students to learn this by heart. Smart board teaching is not ‘see only’. We could use special markers to underline or mark an important location while teaching. We can even write on it to make the concept clear. </DD>
						<BR>
						<DT CLASS = "dt"> Inbuilt library </DT>
							<DD> Smart board has an inbuilt library in it, which enables a teacher to have an instant look at it in case of requirement. He/she may not have to scan a real library for this. </DD>
						<BR>
						<DT CLASS = "dt"> Active learning </DT>
							<DD> Smart boards lead to active learning process where both the teacher and the students are involved. This leads to strong reinforcement of information in students. Smart boards have many advantages and every class room should have it just because of easy learning process. Only a strong motivation is the basic of any learning process and can be carried out in any situation. Thus, it can be said in the end that smart board is such a learning process where active participation of both the teacher and the students is needed. This increases the interaction between teacher and students during a lesson and the students do not hesitate to ask any question if they have any doubt. It reduces the effort of the lecturer as its most parts are done in the presentation. It is very difficult for the tutorials to continue in a day without break. So this multimedia class is a boon for the students as well as the teachers. </DD>
					<BR>
					Several companies have entered into partnerships and created world-class digital resources, 3D videos and perhaps the world's best interactive virtual lab software to its repository of content for teachers. The modules are embedded in a template allowing the teachers to teach a chosen lesson in class, frame by frame.
					<BR><BR>
					The recent market research report from Technavio predicts the smart classroom market in India to grow at a CAGR of more than 20% during the forecast period of 2016 to 2020. As per the report, initiatives taken by the Indian government play a key role in popularizing smart ways of learning.
					<BR><BR>
					<UL TYPE = "SQUARE">
						<LI> With the exponential increase in use of everyday mobile devices in India, schools, colleges and other educational institutes might also implement Bring Your Own Device (BYOD) policies in the near future. </LI>
						<LI> To support their digital initiatives, teachers also require software to create e-learning content, which is likely to fuel the demand for learning products during the forecast period. </LI>
						<LI> The top players in the market include Microsoft, Oracle, Samsung, Dell, Educomp, HCL Technologies, IBM, Lenovo, and many more. </LI>
					</UL>
				</P><BR>
				<CENTER>
					<DIV CLASS = "pagination">
						<A HREF = "smart_clsrm1.php	"> 1 </A>
						<A HREF = "smart_clsrm2.php"> 2 </A>
						<A HREF = "#" CLASS = "active"> 3 </A>
					</DIV>
				</CENTER>
			</CENTER>
		</DIV>
	</BODY>
</HTML>