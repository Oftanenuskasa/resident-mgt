<?php
require_once('config.php');
session_start();
error_reporting(0);
if (isset($_SESSION['Username'])) {
	$_username = $_SESSION['Username'];
}
?>
<?php
$user = $_SESSION['Username'];
$result = mysqli_query($conn, "select * from user where Username='$user'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$accountid = $row['Username'];
$fname = $row['frist_name'];
$mname = $row['mname'];
$lname = $row['lname'];
?>

<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script type="text/javascript">
		if (document.images) { // Preloaded images
			demo1 = new Image();
			demo1.src = "image/A.png";
			demo2 = new Image();
			demo2.src = "image/1.png";
			demo3 = new Image();
			demo3.src = "image/2.png";
			demo4 = new Image();
			demo4.src = "image/3.png";
		}

		function timeimgs(numb) { // Reusable timer
			thetimer = setTimeout("imgturn('" + numb + "')", 1500);
		}

		function imgturn(numb) { // Reusable image turner
			if (document.images) {

				if (numb == "4") { // This will loop the image
					document["im"].src = eval("demo4.src");
					timeimgs('1');
				} else {
					document["im"].src = eval("im" + numb + ".src");

					timeimgs(numb = ++numb);
				}
			}
		}
	</script>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style type="text/css">
		<!--
		body {
			background-color: #eee;
			margin-left: 140px;
			margin-right: 50px;
			margin-bottom: 0px
		}
		-->
	</style>
</head>

<body onLoad="timeimgs('1');">
	<br>
	<table border="0" width="92.8%" cellspacing="0">
		<tr>
		<td colspan="3"><img src="image/f.gif" width="15%" height="150"><img src="image/dk.jpg" width="70%" height="150"><img src="image/Flag_of_Southern_Ethiopia.png" width="15%" height="150"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li><a href="resident.php"> <b> Home</b></a></li>
				<li><a href="comment.php"> <b>Give comment</b></a></li>
				<li><a href="clerance_request.php"><b>Clearance Request</b></a></li>
				<li><a href="#"><b>Idcard Request</b></a>
					<ul class="sub1">
						<li><a href="sendrequest.php"><b><i>For you Idcard</i></b></a></li>
						<li><a href="otehrrequset.php"><b><i>His/her firends Idcard</i></b></a></li>
						<li><a href="aginrequset.php"><b><i>For missing or renew</i></b></a></li>


					</ul>
				</li>
				<li>
				</li>
				<li><a href="change.php"><b>Change password</b></a></li>
				<li><a href="indexs.php"><b>Download clearance</b></a></li>

				<li><b>login as <font color='blue'><?php echo "$_username"; ?></font>
				</li></b>

				<li><a href="Logout.php"><b>(Logout)</b></a></li>
			</td>
		</tr>
		<tr>
			<td width="252" height='300'>
				<table border="0" bgcolor="#CCCCCC" cellspacing="0" valign="top">
					<tr>
						<td width="270" height="436" valign="top">
							<table border="0" width="259" cellspacing="0">
								<tr>
									<td id="topnav" align="lefet">
										<li><b>
												<font color='red'>Calander
											</b></font>
										</li>
									</td>
								</tr>
								<td>
									<br>
								</td>
								<tr bgcolor="#FFFFFF">
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
										<script language="javascript">
											function check() {
												if (document.getElementById("first").value == "") {
													alert('please enter house number!!');
													document.getElementById("first").focus();
													return false;
												} else if (document.getElementById("em").value == "") {
													alert('Please enter the the date!!');
													document.getElementById("em").focus();
													return false;
												} else if (document.getElementById("com").value == "") {
													alert('Please enter purpose!!');
													document.getElementById("com").focus();
													return false;
												}
											}
										</script>
									</td>
								</tr>
							</table>
						</td>
				</table>
			</td>
			<th width="1047" height="300" valign="top" bgcolor="white"><br>

				<div><b> well come to Idcard request form</b></div>
				<hr />
				<fieldset>
					<legend align="center">
						<div class="legend"><b>Please Enter Your request the space provided below</b></div>
					</legend>
					<br>
					<div>
						<form name="request" onsubmit='return formValidation()' action="clerance_request.php" method='POST'>

							<table align="center">
								<tr>
									<td>Id Number :</td>
									<td><input type="text" size="20px" id='house' name='Id' placeholder="Enter HouseNumber..."></td>
								</tr>

								<td><label for="file">Police service cirtifcate:</label></td>
								<td><input type="file" size="10px" name="photo" id="file" maxlength="50" value="" style="width:176px;" onchange=" document.getElementById('file').value=trim(this.value);" /></td>
		</tr>

		<tr>
			<td>small interprise cirtifcate:</td>
			<td><input type="file" name=" file" required=""></td>
		</tr>
		<tr>
			<td>Contenet :</td>
			<td><textarea name="com" id="com" cols="20" rows="4" pattern="\D{4,50}" placeholder="Enter purpose..."></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" style="cursor:pointer" value="Send request" onClick="return check(this.form);" />
				<input type='reset' value='clear'><a href="resident.php"> <b><input type='button' value='Back'></b></a>
			</td>
		</tr>
	</table>
	</form>
	</div>

	</td>

	<td width="50" height="100" valign="top">

		<table border="0" bgcolor="white" width="257" height="300" cellspacing="0" cellpadding="5">
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
			</tr>
		</table>
	</td>
	</table>
	</td>

	</td>
	</table>
	</td>
	</tr>
	</tr>
	<tr>
		<td colspan="3" height="25">
			<table border="0" align="center" width="82%" bgcolor="#CCCCCC" cellspacing="0">
				<tr>
					<td align="='center'">
						<font face="Times New Roman" color="black"><b>DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b>
						</font>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
</body>

</html>