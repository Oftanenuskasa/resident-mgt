<?php
if (isset($_GET["attempt"])) {
	$attempt = $_GET["attempt"];
}
?>
<?php
session_start();
?>

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
			background-color: #FFFFCC;
			margin-left: 10px;
			margin-right: 10px;
		}
		-->
	</style>
</head>

<body onload="parent.member()" onload="noBack();" onpageshow="if(event.persisted) noBack(); ">
	<table border="0" width="1299" cellspacing="0">
		<tr>
			<td colspan="3"><img src="image/dk.jpg" width="1299" height="60"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li><b><a href="home.php"><i>HOME</i> </a></li>
				<li><a href="services.php"><i>SERVICES</i> </a></li>
				<li><a href="about.php"><i>ABOUT US</i></a></li>
				<li><a href="news.php"><i>NEWS</i></a></li>
				<li><a href="contact.php"><i>CONTACT US</i></a></li>
				<li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				<li><a href="Login.php"><i>LOGIN</i></a></li>
			</td>
		</tr>
		<td><img src="image/dj.jpg" width="1299" height="100" name="parent" /></td>
		<tr>
			<td>
				<table border="0" bgcolor="#0B0B0B" cellspacing="0">
					<tr>
						<td width="50" height="600" valign="top">
							<table border="0" width="50" cellspacing="0">
								<td>
									<br><br>
									<div id="left_colomn">
										<div id="yy">
											<img src="image/m.gif" width="200px" height="100">
										</div>
									</div>
									<div id="right_colomn" align="center">
										<div class="left"><br />
											<img src="image/m1.GIF" width="200" height="250"><br />
										</div>
									</div>
								</td>
								<tr>
									<td>
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
											document.write("<BR><BR><TABLE BORDER=1 BORDERCOLOR=INDIGO>" +
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

						<td width="900" height="600" valign="top" bgcolor="cyan"><br><br>
							<center>
								<div id="loginform">
									<h1>LOGIN FORM</h1>
									<script language="javascript">
										function check() {

											if (document.getElementById("txt_username").value == "") {
												alert('Please Enter user name !!');
												document.getElementById("txt_username").focus();
												return false;
											}
											if (document.getElementById("txt_password").value == "") {
												alert('Please Enter password !!');
												document.getElementById("txt_password").focus();
												return false;
											}

											if (isUcase(document.getElementById("txt_username").value) == false || isUcase(document.getElementById("txt_password").value) == false) {
												alert("Username and Password not match!!");
												document.getElementById("txt_username").value = "";
												document.getElementById("txt_password").value = "";
												document.getElementById("txt_username").focus();
												return false;
											}
										}
									</script>
									<form action="tologin.php" method="post" name="frm_login" id="frm_login" />
									<table align="center" cellspacing="0">
										<tr>
											<td colspan="2"><img src="image/key1.png" /></td>
										</tr>
										<tr>
											<td></td>
										</tr>
										<tr>
											<td colspan="2">
												<?php
												if (isset($attempt)) {
													if ($attempt == "null") {
												?>
														<div class="error">Enter your username and password.</div>
													<?php
													} elseif ($attempt == "fail") {
													?>
														<div class="error">Incorrect username or password,<br /></div>
														<?php
														//elseif($attempt == "contact")
														{
														?>
															<div class="error">contact,<br /></div>
												<?php
														}
													}
												}
												?>
											</td>
										</tr>
										<tr>
											<td><i>PLEASE CONTACT TO THE ADMINISTRATOR</i>:</td>

										</tr>

										<tr>
											<td>Username:</td>
											<td><input type="text" id='txt_username' name='username' size="25"></td>
										</tr>
										<tr>
											<td>Password:</td>
											<td><input type="password" id='txt_password' name='password' size="25"></td>
										</tr>
										<tr>
											<td colspan="2" align="right"></td>
										</tr>
										<tr>
											<td></td>
											<td class="add">
												<input type="submit" Value="Login" name='submitMain' Onclick="return check(this.form);" />
												<a href="home.php"><input type="button" name="submit" style="cursor:pointer" value="Cancel" /></a>
											</td>
										</tr>
									</table>
									</form>
								</div>
							</center>
						</td>
						<td width="50" height="600" valign="top">
							<table border="0" bgcolor="pink" width="50" height="600" cellspacing="0">
								<tr bgcolor="black">
									<td align="center">
										<h3><u>
												<font color="purple">Advertisment</font>
											</u></h3>
									</td>
								</tr>
								<tr>
									<td bgcolor="white">
										<img src="image/dj.jpg" width="200" height="146" /><br>
										<img src="image/dg.jpg" width="200" height="119" name="demo" /><br>
										<img src="image/dh.jpg" width="200" height="132" name="demo" />
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="3" height="25">
				<table border="0" align="center" width="100%" bgcolor="orange" cellspacing="0">
					<tr>
						<td>
							<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30"></a>
							<a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25"></a>
							<a href="http://twitter.com" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30"></a>
							<a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="40" height="30"></a>
						</td>
						<td>
							<font face="Times New Roman" color="black"><b>
									<marquee> DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</marquee>
								</b>
							</font>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>

</html>