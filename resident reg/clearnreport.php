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
						<li><a href="prepare_clerance.php"><b><i>Clearance</i></b></a></li>
						<li><a href="display_residnet.php"><b><i>Idcard </i></b></a></li>
					</ul>
				</li>
				<li><a href="#"><em><b>Genrate Report</b> </em></a>
					<ul class="sub1">
						<li><a href="clearancereport.php"><b><i>D/W/Y/M Clearance report </i></b></a>
						</li>

						<li><a href="idcardreport.php"><b><i>D/W/Y/M Idcard report</i></b></a>
						<li><a href="total_clearancereport.php"><b><i>Total Clearance report</i></b></a>
						<li><a href="total_idcardreport.php"><b><i>Total Idcard report</i></b></a>

						</li>
				</li>
				</ul>
				</li>
				<li><a href="#"><em><b>News</b> </em></a>
					<ul class="sub1">
						<li><a href="postnew.php"><b><i>Post News </i></b></a></li>
						<li><a href="update_news.php"><b><i>Update news </i></b></a></li>

					</ul>
				</li>
				<li><a href="giveidcard.php"><strong>View idcard </strong></a></li>
				<li><a href="charman_changepass.php"><b>Change password</b></a></li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li>
					<b>You are logged as&nbsp;
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
						<td width="270" height="800" valign="top">
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
				<table id="contentbox">
					<tr>
						<td>
							<script language="javascript">
								function Clickheretoprint() {
									var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
									disp_setting += "scrollbars=yes,widtd=900, height=400, left=100, top=25";
									var content_vlue = document.getElementById("print_content").innerHTML;

									var docprint = window.open("", "", disp_setting);
									docprint.document.open();
									docprint.document.write('<html><head><title>List of Passer</title>');
									docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');
									docprint.document.write(content_vlue);
									docprint.document.write('</body></html>');
									docprint.document.close();
									docprint.focus();
								}
							</script>
							<style>
								#print_content {
									width: 434px;
									margin: 0 auto;
								}
							</style>

							<div id="print_content">
								<div align="center" style="margin-top:10px;"><strong><img src="image/repo1.jpg" width="500" height="80" align="center"></strong><BR><strong>Clearance Preparation Report</strong></a>
									From:&nbsp;<strong><?php echo $_POST['dayfrom']; ?></strong>&nbsp;&nbsp;To:&nbsp;<strong><?php echo $_POST['dayto']; ?></strong></div>
								<div style="margin-left:130%; width:50px;  text-align:center;"></div>
								<br>
								<?php
								$a = $_POST['dayfrom'];
								$b = $_POST['dayto'];
								$result1 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Female' and job='Farmer'");
								$fmale_far = mysqli_num_rows($result1);

								$result2 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Male'and job='Farmer'");
								$male_far = mysqli_num_rows($result2);
								$total_far = $fmale_far + $male_far;
								$result3 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Female' and job='Student'");
								$fmale_stu = mysqli_num_rows($result3);

								$result4 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Male'and job='Student'");
								$male_stu = mysqli_num_rows($result4);
								$total_stu = $fmale_stu + $male_stu;
								$result5 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Female' and job='Teacher'");
								$fmale_th = mysqli_num_rows($result5);

								$result6 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Male'and job='Teacher'");
								$male_th = mysqli_num_rows($result6);
								$total_th = $fmale_th + $male_th;
								$result7 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Female' and job='Doctor'");
								$fmale_doc = mysqli_num_rows($result7);

								$result8 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Male'and job='Doctor'");
								$male_doc = mysqli_num_rows($result8);
								$total_doc = $fmale_doc + $male_doc;
								$result9 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Female' and job='Guard'");
								$fmale_ga = mysqli_num_rows($result9);

								$result10 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Male'and job='Guard'");
								$male_ga = mysqli_num_rows($result10);
								$total_doc = $fmale_ga + $male_ga;
								$result11 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Female' and job='Phd'");
								$fmale_ph = mysqli_num_rows($result11);

								$result12 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Male'and job='Phd'");
								$male_ph = mysqli_num_rows($result12);
								$total_ph = $fmale_ph + $male_ph;
								$result13 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Female' and job='Master'");
								$fmale_ms = mysqli_num_rows($result13);

								$result14 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Male'and job='Master'");
								$male_ms = mysqli_num_rows($result14);
								$total_ms = $fmale_ms + $male_ms;
								$result15 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Female' and job='Other'");
								$fmale_oth = mysqli_num_rows($result15);

								$result16 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b' and Sex='Male'and job='Other'");
								$male_oth = mysqli_num_rows($result16);
								$total_oth = $fmale_oth + $male_oth;
								$total_fmale = $fmale_oth + $fmale_ms + $fmale_ph + $fmale_ga + $fmale_doc + $fmale_th + $fmale_stu + $fmale_far;
								$total_male = $male_oth + $male_ms + $male_ph + $male_ga + $male_doc + $male_th + $male_stu + $male_far;
								$total = $total_fmale + $total_male;

								$result3 = mysqli_query($conn,"SELECT * FROM clearance where Date_of_Taken BETWEEN '$a' AND '$b'");
								$count = mysqli_num_rows($result3);
								if ($count > 0) {
								?>
									<table width="530" border="1" align="left" cellpadding="2" cellspacing="0">
										<thead>
											<tr bgcolor="#cccccc" style="margin-bottom:10px;">
												<th width="120">
													<div align="center">IdNumber</div>
												</th>
												<th width="115">
													<div align="center">FirstName</div>
												</th>
												<th width="136">
													<div align="center">MiddleName</div>
												</th>
												<th width="110">
													<div align="center">Sex</div>
												</th>
												<th width="115">
													<div align="center">Date OfTaken</div>
												</th>
												<th width="113">
													<div align="center">Job</div>
												</th>

											</tr>
										</thead>
										<tbody>
											<?php

											$a = $_POST['dayfrom'];
											$b = $_POST['dayto'];


											$result3 = mysqli_query($conn,"SELECT * FROM clearance where Date_Of_Taken BETWEEN '$a' AND '$b'");

											while ($row3 = mysqli_fetch_array($result3)) {
												echo '<tr>';
												$dasd = $row3['IdNumber'];
												$result4 = mysqli_query($conn,"SELECT * FROM clearance where IdNumber='$dasd'");


												while ($row4 = mysqli_fetch_array($result4)) {
												}
												echo '<td><div align="center">' . $row3['IdNumber'] . '</div></td>';
												echo '<td><div align="center">' . $row3['FirstName'] . '</div></td>';
												echo '<td><div align="center">' . $row3['middleName'] . '</div></td>';
												echo '<td><div align="center">' . $row3['Sex'] . '</div></td>';
												echo '<td><div align="center">' . $row3['Date_of_Taken'] . '</div></td>';
												echo '<td><div align="center">' . $row3['job'] . '</div></td>';

												echo '</tr>';
											}

											?>

							</div>
						</td>
					</tr>
					</tbody>
					<tr>
						<td colspan="7" align="center">
							<font color='red'>Genral clerance report in the date.</font>
						</td>
					</tr>

					<tr>
						<td></td>
						<td>Female</td>
						<td colspan="2">Male</td>
						<td colspan="2">Total</td>
					</tr>
					<tr>
						<td>Farmer:</td>
						<td><?php echo $fmale_far; ?></td>
						<td colspan="2"><?php echo $male_far; ?></td>
						<td colspan="2"><?php echo $total_far; ?></td>
					</tr>
					<tr>
						<td>Teacher:</td>
						<td><?php echo $fmale_th; ?></td>
						<td colspan="2"><?php echo $male_th; ?></td>
						<td colspan="2"><?php echo $total_th; ?></td>
					</tr>
					<tr>
						<td>Doctor:</td>
						<td><?php echo $fmale_doc; ?></td>
						<td colspan="2"><?php echo $male_doc; ?></td>
						<td colspan="2"><?php echo $total_doc; ?></td>
					</tr>
					<tr>
						<td>Guard:</td>
						<td><?php echo $fmale_ga; ?></td>
						<td colspan="2"><?php echo $male_ga; ?></td>
						<td colspan="2"><?php echo $total_ga; ?></td>
					</tr>
					<tr>
						<td>phd:</td>
						<td><?php echo $fmale_ph; ?></td>
						<td colspan="2"><?php echo $male_ph; ?></td>
						<td colspan="2"><?php echo $total_ph; ?></td>
					</tr>
					<tr>
						<td>master:</td>
						<td><?php echo $fmale_ms; ?></td>
						<td colspan="2"><?php echo $male_ms; ?></td>
						<td colspan="2"><?php echo $total_ms; ?></td>
					</tr>
					<tr>
						<td>Student:</td>
						<td><?php echo $fmale_stu; ?></td>
						<td colspan="2"><?php echo $male_stu; ?></td>
						<td colspan="2"><?php echo $total_stu; ?></td>
					</tr>
					<tr>
						<td>Other:</td>
						<td><?php echo $fmale_oth; ?></td>
						<td colspan="2"><?php echo $male_oth; ?></td>
						<td colspan="2"><?php echo $total_oth; ?></td>
					</tr>
					<tr>
						<td>Total</td>
						<td><?php echo $total_fmale; ?></td>
						<td colspan="2"><?php echo $total_male; ?></td>
						<td colspan="2"></td>
					</tr>
					<tr>
						<td colspan="4">The total number of Clearance prepare b/n the date:</td>
						<td colspan="2"><?php echo $total; ?></td>
					</tr>



				</table>
				<h4> Prepared by:<?php echo $ful; ?></h4>
				<h4> Signature_________________</h4>
				</div><br>
			<?php
								} else {
									echo "<font color='red'>No clerance prepared beteewn this date.</font>";
								}
			?>

			<div style="margin-left:90%; width:50px;  text-align:center;"> </div>
			</td>
		</tr>
	</table>
	<a href="javascript:Clickheretoprint()"><img align="center" src="image/DPIC_36483.jpg" /></a>
	<a href="clearancereport.php"><img src="image/b.png" width="40" title="Click here to back the search menu"></a>

	</td>

	<td width="50" height="100" valign="top">

		<table border="0" bgcolor="white" width="257" height="436" cellspacing="0" cellpadding="5">
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
					<a href="http://twitter.com/" target="_blank"><img src="image/twitter.gif" title="Twitter" width="57" height="60"></a>
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
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
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