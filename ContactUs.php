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
		<LINK REL = "STYLESHEET" HREF = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					<A HREF = "m-learning.php"> M-Learning </A>
					<A HREF = "ContactUs.php" CLASS = "active"> Contact Us </A>
					<A HREF = "logout.php"> Logout </A>
					<A HREF = "javascript:void(0);" STYLE = "font-size: 5px;" CLASS = "icon" ONCLICK = "myFunction()"> &#9776; </A>
				</DIV>
				<P CLASS = "p">
					<TABLE CELLPADDING = "5" CELLSPACING = "5" BORDER = "0" BORDERCOLOR = "#000000" STYLE = "border-radius: 15px;">
						<TR VALIGN = "TOP">
							<TD ALIGN = "CENTER" STYLE = "border-radius: 15px;" ROWSPAN = "2">
								<DIV CLASS = "gmap">
									<IFRAME STYLE = "border-radius: 15px;" FRAMEBORDER = "0" SCROLLING = "NO" MARGINHEIGHT = "0" MARGINWIDTH = "0" SRC = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3220.0687199819486!2d75.80853671468442!3d26.894233967360574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db69f034ac007%3A0x56a60ed9c30e676c!2sSubodh+Public+School!5e1!3m2!1sen!2sin!4v1515522610852" allowfullscreen></IFRAME>
							</TD>
							<TD STYLE = "border-radius: 15px;">
								<P CLASS = "p1">
									<I CLASS = "fa fa-institution" STYLE = "font-size: 30px; color: #000000;"></i> Subodh Public School <BR>
									<I CLASS = "fa fa-map-marker" STYLE = "font-size: 30px; color: #000000;"></i> Bhawani Singh Marg, Rambagh Circle, Jaipur - 302015<BR>
									<I CLASS = "fa fa-phone" STYLE = "font-size: 30px; color: #000000;"></I> 0141-2568477 || 0141-2572426 || 0141-2571612 <BR>
									<I CLASS = "fa fa-envelope" STYLE = "font-size: 30px; color: #000000;"></I>
										<A HREF = "mailto:info@spsjaipur.com">info@spsjaipur.com</A> <BR>
									<I CLASS = "fa fa-at" STYLE = "font-size: 30px; color: #000000;"></I>
										<A HREF = "http://www.subodhpublicschool.com" TARGET = "_blank">www.subodhpublicschool.com</A> || <A HREF = "http://www.spsjaipur.com" TARGET = "_blank">www.spsjaipur.com</A>
								</P>
							</TD>
						<TR VALIGN = "TOP">
							<TD STYLE = "border-radius: 15px;" ALIGN = "CENTER">
								<A HREF = "https://goo.gl/9sfwK2" TARGET = "_blank"><I CLASS = "fa fa-facebook" STYLE = "font-size: 50px; width: 50px; color: #F5F5F5; background-color: #3B5998; border-radius: 50%; padding: 16px;"></I></A>
								<A HREF = "https://goo.gl/buAFXe" TARGET = "_blank"><I CLASS = "fa fa-twitter" STYLE = "font-size: 50px; width: 50px; color: #F5F5F5; background-color: #1DA1F2; border-radius: 50%; padding: 16px;"></I></A>
								<A HREF = "https://goo.gl/DZKrQ9" TARGET = "_blank"><I CLASS = "fa fa-instagram" STYLE = "font-size: 50px; width: 50px; color: #F5F5F5; background-color: #C32AA3; border-radius: 50%; padding: 16px;"></I></A>
								<A HREF = "https://goo.gl/XpRtM3" TARGET = "_blank"><I CLASS = "fa fa-linkedin" STYLE = "font-size: 50px; width: 50px; color: #F5F5F5; background-color: #007BB5; border-radius: 50%; padding: 16px;"></I></A>
								<A HREF = "https://goo.gl/TMRa9g" TARGET = "_blank"><I CLASS = "fa fa-youtube-play" STYLE = "font-size: 50px; width: 50px; color: #F5F5F5; background-color: #FF0000; border-radius: 50%; padding: 16px;"></I></A>
							</TD>
						</TR>
					</TABLE>
				</P>
			</CENTER>
		</DIV>
	</BODY>
</HTML>