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
$ful = $fname . " " . $mname;
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
			margin-left: 150px;
			margin-right: 50px;

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
				<li><a href="charman.php"><b>Home</b></a></li>
				<li><a href="#"><em><b>Prepare</b> </em></a>
					<ul class="sub1">
						<li><a href="clearance.php"><b><i>Clearance</i></b></a></li>
						<li><a href="display_residnet.php"><b><i>Idcard </i></b></a></li>
					</ul>
				</li>
				<li><a href="#"><em><b>Generate report</b> </em></a>
					<ul class="sub1">
						<li><a href="#"><b><i>Clearance report</i></b></a>
							<ul class="">
								<li><a href="clearancereport.php"><b><i>Daylly report</i></b></a></li>
								<li><a href="sex_repo.php"><b><i> Sex Report</i></b></a></li>
						</li>
					</ul>
				<li><a href="#"><b><i>Idcard report</i></b></a>
					<ul class="">
						<li><a href="idcardreport.php"><b><i>Daylly report</i></b></a></li>
						<li><a href="sex_report.php"><b><i>Sex Report </i></b></a></li>
				</li>
				</ul>
				</ul>
				</li>
				<li><a href="#"><em><b>News</b> </em></a>
					<ul class="sub1">
						<li><a href="postnew.php"><b><i>Post News </i></b></a></li>
						<li><a href="update_news.php"><b><i>Update news </i></b></a></li>

					</ul>
				</li>
				<li><a href="giveidcard.php"><strong>View id card </strong></a></li>
				<li><a href="renew_id.php"><b><i>Renew idcard</i></b></a>
				<li><a href="charman_changepass.php"><b>Change password</b></a></li>

				<li>
					<b>login as&nbsp;
						<font color='blue'><?php echo $ful; ?></font>
					</b>
				</li>
				<li><a href="Logout.php"><b>(Logout)</b></a></li>
			</td>
		</tr>
		<tr>
			<td width="252">
				<table border="0" bgcolor="#CCCCCC" cellspacing="0">
					<tr>
						<td width="270" height="436" valign="top">
							<table border="0" width="259" cellspacing="0">

								<tr>
									<td id="topnav">
										<li><a href="view_resident.php"><strong>View resident </strong></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="charmancomm.php"><strong>View comment</strong> </a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="viewclearance.php"><strong>View clearance </strong></a></li>
									</td>
								</tr>
								<td bgcolor="grean" align="right">
									<b>
										<font color='white'>Calander</font>
									</b>
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
									</td>
								</tr>
							</table>
						</td>
				</table>
			</td>
			<th width="1047" height="436" valign="top" bgcolor="white"><br>
				<h3 color='red'>Write some thing in text area to replay the requset</h3>
				<form name="form1" method="post" action="replay1.php" onSubmit="return check()">


					<textarea name="comments" required x-moz-errormessage="Please Enter comment " class="ta" id='comment' cols="55" rows="7" placeholder="Leave Comments Here..." onKeyUp="count_text(this.form.comments, this.form.textLeft);" onKeyDown="count_text(this.form.comments, this.form.textLeft);"></textarea></br></br>
					<input type="submit" value="Send" name="feedback" class="bt">
					<input type="reset" value="Cancel" name="cancel" class="bt">
					<a href='viewrequest.php'><img src='image/b.png' width='40' border='0' title='Back to view request page' ;'></img>
						<?php


						if (isset($_POST['feedback'])) {
							$send = $_REQUEST['name'];
							$comment = $_POST['comments'];
							$reg = mysqli_query($conn,"INSERT INTO `replay`(`id`, `username`, `charmanname`, `content`) VALUES ('none','$send','$_username','$comment')");
							if ($reg) {
								echo "<script>alert(' successfully send!!')</script>";
							} else {
								echo "<script>alert('id duplication occur try again!!')</script>";
							}
						}
						mysqli_close($conn);

						?>

			<td width="50" height="100" valign="top">

				<table border="0" bgcolor="white" width="257" height="433" cellspacing="0" cellpadding="5">
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
			<table border="0" align="center" width="85%" bgcolor="#CCCCCC" cellspacing="0">
				<tr>
					<td align="='left'">
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