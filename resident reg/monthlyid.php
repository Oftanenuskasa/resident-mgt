<?php
require_once('config.php');
session_start();
error_reporting(0);
if (isset($_SESSION['Username'])) {
	$_username = $_SESSION['Username'];
} else if (!isset($_SESSION['Username'])) {
	header("location:home.php");
}
?>
<?php
$user = $_SESSION['Username'];
$result = mysqli_query($conn, "select * from user where Username='$user'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$accountid = $row['Username'];
$fname = $row['frist_name'];
$mname = $row['mname'];
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
	<title>Charperson:RRMS</title>
</head>

<body onLoad="timeimgs('1');">
	<br>
	<table border="0" width="92.8%" cellspacing="0">
		<tr>
		<td colspan="3"><img src="image/f.gif" width="15%" height="150"><img src="image/dk.jpg" width="70%" height="150"><img src="image/Flag_of_Southern_Ethiopia.png" width="15%" height="150"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li><a href="charman.php"><b><img src="image/home.PNG" width="20" height="20">Home</b></a></li>
				<li><a href="#"><em><img src="image/bel/gi.jpg" width="20" height="20"><b>Prepare</b> </em></a>
					<ul class="sub1">
						<li><a href="prepare_clerance.php"><b><i>Clearance</i></b></a></li>
						<li><a href="display_residnet.php"><b><i>Idcard </i></b></a></li>
					</ul>
				</li>
				<li><a href="#"><em><b><img src="image/ch.jpg" width="20" height="20">Genrate Report</b> </em></a>
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
				<li><a href="#"><em><img src="image/ne.jpg" width="20" height="20"><b>News</b> </em></a>
					<ul class="sub1">
						<li><a href="postnew.php"><b><i>Post News </i></b></a></li>
						<li><a href="viewnew.php"><b><i>Update news </i></b></a></li>

					</ul>
				</li>
				<li><a href="giveidcard.php"><img src="image/view.jpg" width="23" height="17"><strong>View idcard </strong></a></li>
				<li><a href="charman_changepass.php"><img src="image/ch.jpg" width="20" height="20"><b>Change password</b></a></li>

				<li><a href="Logout.php"><img src="image/bel/log.PNG" width="20" height="20"><b>(Logout)</b></a></li>
			</td>
		</tr>
		<tr>
			<td width="252">
				<table border="0" bgcolor="#CCCCCC" cellspacing="0">
					<tr>
						<td width="270" height="900" valign="top">
							<table border="0" width="259" cellspacing="0">
								<tr>
									<?php
									$sql = "SELECT * FROM `user` WHERE Username='$_username'";
									$res = mysqli_query($conn,$sql);
									while ($row = mysqli_fetch_array($res)) {
										$profile = $row['profile'];

										# code...
									}
									if (!$profile) {
										echo "<td  align='lefet' colspan='2' style='background: #eee'><img src='image/ma.jpg' style='border-radius: 80%;width: 130px;height: 100px;'>

";
									} else {
										echo "<td  align='lefet' colspan='2' style='background: #eee'><img src='downlod/photo/$profile' style='border-radius: 80%;width: 130px;height: 100px;'>
";
									}
									?>
									<br>
									<font color="blue"><a href="charprofile.php"><img src="image/activate.png"><?php echo $ful; ?>(change profile)</a></font>
						</td>
					</tr>
					<tr>
						<td id="topnav">
							<li><a href="viewresedent.php"><img src="image/view.jpg" width="23" height="17" <strong>View resident </strong></a></li>
						</td>
					</tr>
					<tr><?php
						$result = mysqli_query($conn,"select * from comment");
						$no = mysqli_num_rows($result);
						?>
						<td id="topnav">
							<li><a href="charmancomm.php"><img src="image/bel/m.png" width="23" height="20"><strong>View comment<font color="red" size="3">(<?php echo $no; ?>)</font></strong> </a></li>
						</td>
					</tr>
					<tr>
						<td id="topnav">
							<li><a href="viewclearance.php"><img src="image/view.jpg" width="23" height="17"><strong>View clearance </strong></a></li>
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
		<div style="margin-left:70%; width:50px;  text-align:center;">
			<a href="javascript:Clickheretoprint()"><img align="center" src="image/DPIC_36483.jpg" /></a>
		</div>
		<table id="contentbox" border="1" width="100%">
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
						<div align="center" style="margin-top:10px;"><strong><img src="image/repo.jpg" width="100%" height="80" align="center"></strong><BR><strong> Monthly Idcard Preparation Report </strong></a>
						</div>
						<div style="margin-left:130%; width:50px;  text-align:center;"></div>
						<br>


						<?php
						$a = date('Y-m-d', strtotime('-1 month'));
						$b = date('Y-m-d');
						
						// Define the queries and execute them
						$queries = [
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Female' AND Job='Farmer'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Male' AND Job='Farmer'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Female' AND Job='Student'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Male' AND Job='Student'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Female' AND Job='Teacher'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Male' AND Job='Teacher'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Female' AND Job='Doctor'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Male' AND Job='Doctor'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Female' AND Job='Guard'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Male' AND Job='Guard'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Female' AND Job='Phd'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Male' AND Job='Phd'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Female' AND Job='Master'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Male' AND Job='Master'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Female' AND Job='Other'",
							"SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b' AND Sex='Male' AND Job='Other'"
						];
						
						// Initialize arrays to store counts
						$female_counts = [];
						$male_counts = [];
						
						// Execute each query and store the counts
						foreach ($queries as $index => $query) {
							$result = mysqli_query($conn, $query);
							if ($result) {
								if ($index % 2 == 0) {
									$female_counts[] = mysqli_num_rows($result);
								} else {
									$male_counts[] = mysqli_num_rows($result);
								}
							} else {
								die('Error: ' . mysqli_error($conn));
							}
						}
						
						// Calculate the totals
						$total_far = $female_counts[0] + $male_counts[0];
						$total_stu = $female_counts[1] + $male_counts[1];
						$total_th = $female_counts[2] + $male_counts[2];
						$total_doc = $female_counts[3] + $male_counts[3];
						$total_ga = $female_counts[4] + $male_counts[4];
						$total_ph = $female_counts[5] + $male_counts[5];
						$total_ms = $female_counts[6] + $male_counts[6];
						$total_oth = $female_counts[7] + $male_counts[7];
						
						$total_female = array_sum($female_counts);
						$total_male = array_sum($male_counts);
						$total = $total_female + $total_male;
						
						// Query to get the total count of records
						$result_total = mysqli_query($conn, "SELECT * FROM idcard WHERE DateOfTaken BETWEEN '$a' AND '$b'");
						$count = mysqli_num_rows($result_total);
						if ($count > 0) {
						?>
							<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="white">
								<thead>
									<tr bgcolor="#eee" style="margin-bottom:10px;">
										<th width="120">
											<div align="center">IdNo</div>
										</th>
										<th width="115">
											<div align="center">job</div>
										</th>
										<th width="136">
											<div align="center">First Name</div>
										</th>
										<th width="114">
											<div align="center">Middle Name</div>
										</th>
										<th width="110">
											<div align="center">Sex</div>
										</th>
										<th width="113">
											<div align="center">Date</div>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php

									$a = date('Y-m-d', strtotime($date . '- 1 month'));
									$b = date('Y-m-d');


									$result3 = mysqli_query($conn,"SELECT * FROM idcard where DateOfTaken BETWEEN '$a' AND '$b'");


									while ($row3 = mysqli_fetch_array($result3)) {
										echo '<tr>';
										$dasd = $row3['id_number'];
										$result4 = mysqli_query($conn,"SELECT * FROM idcard where id_number='$dasd'");


										while ($row4 = mysqli_fetch_array($result4)) {
										}
										echo '<td><div align="center">' . $row3['id_number'] . '</div></td>';
										echo '<td><div align="center">' . $row3['Job'] . '</div></td>';
										echo '<td><div align="center">' . $row3['FirstName'] . '</div></td>';
										echo '<td><div align="center">' . $row3['middleName'] . '</div></td>';
										echo '<td><div align="center">' . $row3['Sex'] . '</div></td>';
										echo '<td><div align="center">' . $row3['DateOfTaken'] . '</div></td>';
										echo '</tr>';
									}

									?>

					</div>
				</td>
			</tr>

			</tbody>
			<tr>
				<td colspan="7" align="center" bgcolor="#eee">
					<font color='black'>General Idcard report prepared in one month.</font>
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
				<td colspan="4">The total number of Id card prepared in one month:</td>
				<td colspan="2"><?php echo $total; ?></td>
			</tr>




		</table>
		<h4> Prepared by:<?php echo $ful; ?></h4>
		<h4> Signature_________________</h4>

		</div><br>
	<?php
						} else {
							echo "<font color='black'>No Idcard prepared beteewn this date.</font>";
						}
	?>
	</td>
	</tr>
	</table>
	<a href="idcardreport.php"><img src="image/b.png" width="40" title="Click here to back the search menu"></a>
	</td>

	<td width="50" height="100" valign="top">

		<table border="0" bgcolor="white" width="257" height="436" cellspacing="0" cellpadding="5">
			<tr>
				<td align="right" bgcolor="white"><b></b></td>
			</tr>
			<tr>
				<td bgcolor="#CCCCCC" align="center"><b><img src="image/i.png" width="80" height="50"> Mission</b></td>
			</tr>
			<tr>
				<td align="left">The mission of durame city is that</td>
			</tr>

			<tr>
				<td align="left"> to build or to create a civil servise </td>
			</tr>
			<tr>
				<td align="left"> that serves the people that achives</td>
			</tr>
			<tr>
				<td align="left"> the democratic government goals</td>
			</tr>
			<tr>
				<td align="left"> policies and strategies with</td>
			</tr>
			<tr>
				<td align="left"> full potential.</td>
			</tr>

			<tr>
				<td align="left"></td>
			</tr>
			<tr>
				<td align="center" bgcolor="#CCCCCC"> <b><img src="image/i.png" width="80" height="50">Vision</b></td>
			</tr>
			<tr>
				<td align="left"> The vision of durame city is that,to </td>
			</tr>
			<tr>
				<td align="left"> build a full potententaled citizens</td>
			</tr>
			<tr>
				<td align="left">and a great human resourse who </td>
			</tr>
			<tr>
				<td align="left">can achive the stated mission in</td>
			</tr>
			<tr>
				<td align="left"> durame city.</td>
			</tr>
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
			<tr>
				<td align="right"><b></b></td>
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
						<font face="Times New Roman" color="black"><b> DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b>
						</font>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
</body>

</html>