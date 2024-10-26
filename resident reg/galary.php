<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script type="text/JavaScript">

		var count = 0;
  function member() {
    if (parent.count ==0) {
       document.parent.src = "image/df.jpg";
	 title="evahotel build";
       count = 1;
    }
     else if (parent.count ==1) {

       document.parent.src = "image/dg.jpg";
       count = 2;
    }
 else if(parent.count ==2) {
       document.parent.src = "image/dh.jpg";
       count = 3;
    }

 else {
 document.parent.src = "image/dj.jpg";
       count = 0;

}
    setTimeout("member()", 3000);
  }
</script>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style type="text/css">
		<!--
		body {
			background-color: #eee;
			margin-left: 140px;
			margin-right: 50px;
		}
		-->
	</style>
</head>

<body onload="parent.member()" onload="noBack();" onpageshow="if(event.persisted) noBack(); ">
	<br>
	<table border="0" width="92%" cellspacing="0">
		<tr>
			<td colspan="3"><img src="image/f.gif" width="15%" height="140"><img src="image/dk.jpg" width="70%" height="140"><img src="image/Flag_of_Southern_Ethiopia.png" width="15%" height="140"></td>
		</tr>
		<tr height="5px">
			<td id="dropdown" colspan="3">
				<font size="2.75">
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li><b><a href="home.php"><em>Home</em></a></li>
					<li><b><a href="services.php"><em>Service</em></a></li>
					<li><a href="about.php"><em>About us </em></a></li>
					<li><a href="contact.php"><em>Contact us </em></a></li>
					<li><a href="galary.php"><em>Advertisment</em></a></li>
				</font>
				<li><a href="help.php"><em>Help</em></a></li>
				<li><a href="help.php"><em></em></a></li>
				<li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;

				<li>
					<font size="2.75"><a href="register.php"><em><strong>New register</strong></em></a>
				</li>
				<li>
					<font size="2.75"><a href="tologin.php"><em><strong>Login</em></strong></em></a>
				</li>
			</td>
			</font>
			</li>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="pink" cellspacing="0" id="mele">
					<tr>
						<td width="256" height="100" valign="top">
							<table border="0" width="50" cellspacing="0">
								<tr>
									<td><img src="image/df.jpg" width="250" height="200" name="parent" /></td>
								</tr>
								<tr>
									<td bgcolor="#9966FF" height="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Calender</strong></td>
								</tr>
								<tr>
									<td bgcolor="#FFFFFF">
										<script language="JavaScript">
											<!-- hide code
											// this array gives the weekday names
											var Weekday = new Array();
											Weekday[0] = "Sunday";
											Weekday[1] = "Monday";
											Weekday[2] = "Tuesday";
											Weekday[3] = "Wednesday";
											Weekday[4] = "Thursday";
											Weekday[5] = "Friday";
											Weekday[6] = "Saturday";
											// this array gives month names
											var MonthA = new Array();
											MonthA[0] = "January";
											MonthA[1] = "February";
											MonthA[2] = "March";
											MonthA[3] = "April";
											MonthA[4] = "May";
											MonthA[5] = "June";
											MonthA[6] = "July";
											MonthA[7] = "August";
											MonthA[8] = "September";
											MonthA[9] = "October";
											MonthA[10] = "November";
											MonthA[11] = "December";
											// this array gives the number of days in each month
											var Mdays = new Array();
											Mdays[0] = 31;
											Mdays[1] = 28;
											Mdays[2] = 31;
											Mdays[3] = 30;
											Mdays[4] = 31;
											Mdays[5] = 30;
											Mdays[6] = 31;
											Mdays[7] = 31;
											Mdays[8] = 30;
											Mdays[9] = 31;
											Mdays[10] = 30;
											Mdays[11] = 31;
											// this code gets current date information
											var Today = new Date();
											var Date = Today.getDate();
											var Month = Today.getMonth();
											var dow = Today.getDay();
											var Year = Today.getYear();
											// these are variables for 
											var day = 1;
											var i, j;
											// adjust year for browser differences
											if (Year < 2000) {
												Year += 1900;
											}
											// account for leap year
											if ((Year % 400 == 0) || ((Year % 4 == 0) && (Year % 100 != 0)))
												Mdays[1] = 29;
											// determine day of week for first day of the month
											var Mfirst = Today;
											Mfirst.setDate(1);
											var dow1 = Mfirst.getDay();
											// write out current date
											document.write("Today is " + Weekday[dow] + ", " + MonthA[Month]);
											document.write(" " + Date + ", " + Year);
											// construct calendar for current month
											document.write("<BR><BR><TABLE BORDER=0 BORDERCOLOR=INDIGO>" +
												"<TR><TH COLSPAN=7 ALIGN=CENTER>" + MonthA[Month] + " " + Year + "</TH></TR>");
											document.write("<TR><TH>Sun</TH><TH>Mon</TH><TH>Tue</TH><TH>Wed</TH>" +
												"<TH>Thu</TH><TH>Fri</TH><TH>Sat</TH></TR>");
											for (i = 0; i < 6; i++) {
												// this loop writes one row of days Sun-Sat
												document.write("<TR>");
												for (j = 0; j < 7; j++) {
													// this loop determines which dates to display and in which column
													if ((i == 0 && j < dow1) || (day > Mdays[Month])) {
														// this puts in blank cells at the beginning an end of the month
														document.write("<TD><BR></TD>");
													} else {
														if (day == Date) {
															// highlight the current day and display the date for this cell
															document.write("<TD><FONT COLOR=red>" + day + "</FONT></TD>");
														} else {
															// display the date for this cell
															document.write("<TD>" + day + "</TD>");
														}
														// increment day counter
														day++;
													}
												}
												// end of row; determine if more rows needed
												document.write("</TR>");
												if (day > Mdays[Month]) {
													i = 6;
												}
											}
											// end of table
											document.write("</TABLE>");
											// end hiding 
											-->
										</script>
									</td>
								</tr>
							</table>
						</td>
						<td width="703">
							<table border="0" width="600" height="300" align="right">
								<tr>
									<td width="2000" height="300" rowspan=4 align="center" valign="top" class="one" bgcolor="white">
										<div id="homeslide">
											<link href="css1/js-image-slider.css" rel="stylesheet" media="screen" />
											<script src="css1/js-image-slider.js" type="text/javascript"></script>
											<div id="sliderFrame">
												<div id="slider">
													<img src="images/7.png" alt="welcome to Kebele 18" /> </a>
													<a class="lazyImage" href="images/13.png" title="welcome to Kebele 18"></a>
													<b data-src="images/3.jpg" data-alt="#htmlcaption3"></b> </a>
													<a class="lazyImage" href="images/3.png" title="welcome to Kebele 18"></a>
													<a class="lazyImage" href="images/3.png" title="welcome to Kebele 18"></a>
													<a class="lazyImage" href="images/3.png" title="welcome to Kebele 18"></a>
													<a class="lazyImage" href="images/3.png" title="welcome to Kebele 18"></a>
													<a class="lazyImage" href="images/3.png" title="welcome to Kebele 18"></a>
													<a class="lazyImage" href="imagse/3.png" title="welcome to Kebele 18"></a>
												</div>

											</div>

										</div>
										</p>
									</td>

									<td width="40" height="200" valign="top">
										<table border="0" bgcolor="white" width="350" height="300" cellspacing="0" cellpadding="5">
											<tr>
												<td bgcolor="white" align="right">
													<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="57" height="50"></a>
												</td>
											</tr>
											<tr>
												<td align="right"><b> Facebook</b></td>
											</tr>
											<tr>
												<td align="right"><a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="57" height="50"></a></td>
											</tr>
											<tr>
												<td align="right"> <b>Google</b></td>
											</tr>
											<tr>
												<td align="right">
													<a href="http://twitter.com" target="_blank"><img src="image/twitter.gif" title="Twitter" width="57" height="60"></a>
												</td>
											</tr>
											<tr>
												<td align="right"><b> Twiter</td></b>
											</tr>
											<tr>
												<td align="right">
													<a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="57" height="60"></a>
												</td>
											</tr>
											<tr>
												<td align="right"><b>Youtube</b></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="3" height="25">
							<table border="0" align="center" width="90%" bgcolor="#CCCCCC" cellspacing="0">
								<tr>
									<td align="center">
										<font face="Times New Roman" color="black"><b>DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b></font>
									</td>
								</tr>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>

</html>