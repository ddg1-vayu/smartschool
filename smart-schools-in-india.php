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
				<P CLASS = "p">
					The digital divide between India and Bharat doesn't augur well for a country as diverse as ours. Growing cynicism has more takers than a wide spectrum of ideologies. The digital tools are new enablers. There will be a digital society, free from discrimination and inequality. Smartclass is rapidly transforming the way teachers teach and students learn in the schools with innovative and meaningful use of technology. Powered by the world's largest repository of digital content mapped to Indian school curriculum, <B CLASS = "special"> SmartClass </B> brings in technology right next to the blackboard for teachers in the classrooms. 
				</P>
					
				<CENTER>
					<IMG SRC = "india-school-rural.jpg" CLASS = "img1">
				</CENTER>
				
				<P CLASS = "p">
					The advent of <B CLASS = "special">Information and Communication Technology (ICT)</B> has had a profound and commanding global influence on the matrix of socio-economic and educational activities the world over in a new era. Industrial and developed countries are well ahead in formulating the policies and programme to accelerate its development, diffusion and empowerment abilities. Developing countries like India, having sensed it, must follow at a breakneck velocity to establish and capitalize on the enabling capabilities of ICT in the field of education. Technological tools are a necessity today and the students today have more than twenty technology tools to gain information from, so the teachers with the same knowledge base are not sufficient to quench their thirst for knowledge. There is requirement for much more and the need thus is for more technological intervention.
					<BR><BR>
					According to the <B CLASS = "special"> Indian Education Sector Outlook </B> ,the total number of schools in India stands at 1.3 million, and only around 10% of the private schools have tapped the potential of multimedia classroom teaching, whereas in government schools, it has barely made any inroads. This is expected to grow at a <B CLASS = "special"> Compound Annual Growth Rate (CAGR) </B> of 20% to breach the US$ 2 billion mark by 2020. The population of India in the 0-24 age bracket is twice the population of US and India still has a long road to travel to match global standards. According to market research, the current market size for digitised school products in private schools is around US$ 500 million. This is expected to grow at a Compound Annual Growth Rate (CAGR) of 20% to breach the US$ 2 billion mark by 2020. However, the market potential then might get as big as US$ 4 billion.
				</P>
				<CENTER>
					<IMG SRC = "digital-classroom.jpg" CLASS = "img1">
				</CENTER>
				<P CLASS = "p">
					Apart from this, the current market size for ICT in government schools is US$ 750 million. This is expected to grow five times by 2020 due to the current low level of penetration in government schools. Indian Government is planning to set up virtual classrooms and online courses for school education, Finance Minister Arun Jaitley informed during his Annual Budget speech for 2014-15. Jaitley has proposed an allocation of &#x20B9;100 Crore for this initiative. Bhartiya Janta Party (BJP), in its 2014 election manifesto, had said that this initiative would make it convenient for working class people and housewives to improve their knowledge and qualifications.
				</P>
				<BR>
				<DIV CLASS = "pagination">
					<A HREF = "#" CLASS = "active"> 1 </A>
					<A HREF = "smart-schools-in-india-2.php"> 2 </A>
				</DIV>
			</CENTER>
		</DIV>
	</BODY>
</HTML>