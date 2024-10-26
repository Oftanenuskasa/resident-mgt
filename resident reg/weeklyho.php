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
	<title>DC RRMS record officer page</title>
</head>

<body onLoad="timeimgs('1');">
	<br>
	<table border="0" width="92.8%" cellspacing="0">
		<tr>
		<td colspan="3"><img src="image/f.gif" width="15%" height="150"><img src="image/dk.jpg" width="70%" height="150"><img src="image/Flag_of_Southern_Ethiopia.png" width="15%" height="150"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li><b><a href="officer.php"><em><img src="image/home.PNG" width="20" height="17"><b>Home</b></em></a></li>
				<li><a href="#"><em><img src="image/bel/gi.jpg" width="20" height="17">Register</em></a>
					<ul class="sub1">
						<li><a href="population.php"><b><i>Population</i></b></a></li>
						<li><a href="house.php"><b><i>House</i></b></a></li>
						<li><a href="deathregister.php"><b><i>Death resident</i></b></a></li>
						<li><a href="birth.php"><b><i>Birth resident</i></b></a></li>

					</ul>
				</li>
				<li><a href="#"><em><img src="image/ch.jpg" width="20" height="17">Generate report</em></a>
					<ul class="sub1">
						<li><a href="populationreport.php"><b><i>D/W/M register population report</i></b></a></li>
						<li><a href="housereport.php"><b><i>D/M/Y register house report</i></b></a></li>
						<li><a href="totalpopreport.php"><b><i>Total population reporet</i></b></a></li>
						<li><a href="totalhousereport.php"><b><i>Total house reporet</i></b></a></li>


					</ul>
				</li>
				<li><a href="#"><img src="image/bel/find.PNG" width="20" height="20"><em>Count</em></a>
					<ul class="sub1">
						<li><a href="generate.php"><b><i> Count Population</i></b></a></li>
						<li><a href="counthouse.php"><b><i>Count house</i></b></a></li>

					</ul>
				</li>
				<li><a href="record_changepass.php"><img src="image/edit.PNG" width="25" height="20"><b>Change password</b></a></li>
				<li><em><a href="officer_renewrequset.php"><img src="image/g.PNG" width="25" height="20"><b>Rnew requset </b></a></em></li>


				<li><a href="Logout.php"><em><img src="image/bel/log.PNG" width="20" height="20">(Logout)</em></a></li>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="#CCCCCC" cellspacing="0">
					<tr>
						<td width="250" height="770" valign="top">
							<table border="0" width="249" cellspacing="0">
								<tr>
									<?php
									$sql = "SELECT * FROM `user` WHERE Username='$_username'";
									$res = mysqli_query($conn,$sql);
									while ($row = mysqli_fetch_array($res)) {
										$profile = $row['profile'];

										# code...
									}
									if (!$profile) {
										echo "<td  align='lefet' colspan='2' style='background: #eee'><img src='image/ma.jpg' style='border-radius: 80%;width: 110px;height: 100px;'>

";
									} else {
										echo "<td  align='lefet' colspan='2' style='background: #eee'><img src='downlod/photo/$profile' style='border-radius: 80%;width: 110px;height: 90px;'>
";
									}
									?>
									<br>
									<font color="blue"><a href="profile.php"><img src="image/activate.png"><?php echo $ful; ?>(change profile)</a></font>
						</td>
					</tr>
					<tr>
						<td width="314" id="topnav">
							<li><em><a href="viewpop.php"><img src="image/view.PNG" width="20" height="20"><b>View population </b></a></em></li>
						</td>
					</tr>
					<tr>
						<?php
						$result1 = mysqli_query($conn,"select * from comment");
						$no = mysqli_num_rows($result1);
						?>
						<td id="topnav">
							<li><em><a href="viewcomment.php"><b><img src="image/bel/m.PNG" width="20" height="20">View comment<font color="blue">(<?php echo $no; ?>)</font> </b></a></em></li>
						</td>
					</tr>
					<tr>
						<td id="topnav">
							<li><em><a href="viewhouse.php"><img src="image/view.PNG" width="20" height="20"><b>View house </b></a></em></li>
						</td>
					</tr>

					<td bgcolor="grean" align="right">
						<b>
							<font color='white'>Calander</font>
						</b>
					</td>
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
		<script type="text/javascript">
			function showDiv(prefix, chooser) {
				for (var i = 0; i < chooser.options.length; i++) {
					var div = document.getElementById(prefix + chooser.options[i].value);
					div.style.display = 'none';
				}

				var selectedOption = (chooser.options[chooser.selectedIndex].value);
				if (selectedOption == "1") {
					displayDiv(prefix, "1");
				}
				if (selectedOption == "2") {
					displayDiv(prefix, "2");
				}
				if (selectedOption == "3") {
					displayDiv(prefix, "3");
				}
				if (selectedOption == "4") {
					displayDiv(prefix, "4");
				}
				if (selectedOption == "5") {
					displayDiv(prefix, "5");
				}
			}

			function displayDiv(prefix, suffix) {
				var div = document.getElementById(prefix + suffix);
				div.style.display = 'block';
			}
		</script>
		<div style="margin-left:80%; width:50px;  text-align:center;"> <a href="javascript:Clickheretoprint()"><img src="image/DPIC_36483.jpg" /></a></div>

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
						<div align="center" style="margin-top:10px;"><strong><img src="image/ho.jpg" width="100%" height="80" align="center">
								<p align='center'><strong>Weekly House Registration Report <p> from <?php echo date('Y-m-d', strtotime($date . '- 1 weeks')); ?> -to-<?php echo date('Y-m-d'); ?>
									</strong></div>
						</p>
						<?php
						$a = date('Y-m-d', strtotime($date . '- 1 weeks'));
						$b = date('Y-m-d');
						$dip = "Private house";
						$ner = "Kebele House";
						$result1 = mysqli_query($conn,"SELECT * FROM house where House_Type='$dip' and DateOfRegistration BETWEEN '$a' AND '$b'");
						$con1 = mysqli_num_rows($result1);
						$result2 = mysqli_query($conn,"SELECT * FROM house where House_Type='$ner' AND DateOfRegistration BETWEEN '$a' AND '$b'");
						$con2 = mysqli_num_rows($result2);
						$total = $con2 + $con1;
						$result3 = mysqli_query($conn,"SELECT * FROM house where DateOfRegistration BETWEEN '$a' AND '$b'");
						$con = mysqli_num_rows($result3);
						if ($con < 1) {
							echo "<font color='red'>.....................................................................................................................................</font><br>";
							echo "<font color='red'>You have no house register in the date in this week</font><br>";
							echo "<font color='red'>.....................................................................................................................................</font>";
						} else {
						?>
							<table width="100%" border="0.5" align="center" cellpadding="0" cellspacing="0">
								<thead>
									<tr bgcolor="#eee" style="margin-bottom:10px;">
										<th width="120">
											<div align="center">OwnerId</div>
										</th>
										<th width="115">
											<div align="center">HouseNo</div>
										</th>
										<th width="113">
											<div align="center">House_Type</div>
										</th>
										<th width="130">
											<div align="center">DateOfRegistration</div>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php

									$a = date('Y-m-d', strtotime($date . '- 1 weeks'));
									$b = date('Y-m-d');


									$result3 = mysqli_query($conn,"SELECT * FROM house where DateOfRegistration BETWEEN '$a' AND '$b'");


									while ($row3 = mysqli_fetch_array($result3)) {
										echo '<tr>';
										$dasd = $row3['HouseNumber'];
										$result4 = mysqli_query($conn,"SELECT * FROM house where HouseNumber='$dasd'");


										while ($row4 = mysqli_fetch_array($result4)) {
										}
										echo '<td><div align="center">' . $row3['OwnerId'] . '</div></td>';
										echo '<td><div align="center">' . $row3['HouseNumber'] . '</div></td>';
										echo '<td><div align="center">' . $row3['House_Type'] . '</div></td>';
										echo '<td><div align="center">' . $row3['DateOfRegistration'] . '</div></td>';

										echo '</tr>';
									}

									?>

					</div>
				</td>
			</tr>
			</tbody>
			<tr>
				<td bgcolor="#eee" colspan="4" align="center">
					<font color='blue'>General house registrtion report in one week</font>
				</td>
				<td>
			</tr>

			<tr>
				<td colspan="3">Kebele house</td>
				<td colspan="1"><?php echo $con2; ?> </td>
			</tr>
			<tr>
				<td colspan="3">Private house</td>
				<td colspan="1"><?php echo $con1; ?> </td>
			</tr>
			<tr>
				<td colspan="3">Total house registered in one week</td>
				<td colspan="1" bgcolor="">
					<font color='red'><?php echo $total; ?></font>
				</td>
			</tr>

		</table>
		<p>Prepared by:<?php echo $ful; ?> &nbsp;&nbsp;&nbsp;&nbsp;
			Signature:________________</p>
		</div><br><br>
	<?php
						}
	?>

	</table>
	<br>
	<div style="margin-left:80%; width:50px;  text-align:center;"><a href="housereport.php"><img src="image/b.png" width="40" title="click here to back to the serarch page"></a></div><br>

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
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
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
			<table border="0" align="left" width="92.8%" bgcolor="#CCCCCC" cellspacing="0">
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