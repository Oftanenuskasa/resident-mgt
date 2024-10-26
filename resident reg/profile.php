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
				<li><b><a href="officer.php"><em><b>Home</b></em></a></li>
				<li><a href="#"><em>Register</em></a>
					<ul class="sub1">
						<li><a href="population.php"><b><i>Population</i></b></a></li>
						<li><a href="house.php"><b><i>House</i></b></a></li>
						<li><a href="deathregister.php"><b><i>Death resident</i></b></a></li>
						<li><a href="birth.php"><b><i>Birth resident</i></b></a></li>

					</ul>
				</li>
				<li><a href="#"><em>Generate report</em></a>
					<ul class="sub1">
						<li><a href="populationreport.php"><b><i>D/W/M register population report</i></b></a></li>
						<li><a href="housereport.php"><b><i>D/M/Y register house report</i></b></a></li>
						<li><a href="totalpopreport.php"><b><i>Total population reporet</i></b></a></li>
						<li><a href="totalhousereport.php"><b><i>Total house reporet</i></b></a></li>


					</ul>
				</li>
				<li><a href="#"><em>Count</em></a>
					<ul class="sub1">
						<li><a href="generate.php"><b><i> Count Population</i></b></a></li>
						<li><a href="counthouse.php"><b><i>Count house</i></b></a></li>

					</ul>
				</li>
				<li><a href="record_changepass.php"><b>Change password</b></a></li>
				<li><em><a href="officer_renewrequset.php"><b>Rnew requset </b></a></em></li>

				<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				<li>
					<b>You are logged as&nbsp;
						<font color='blue'><?php echo $ful; ?></font>
					</b>
				</li>
				<li><a href="Logout.php"><em>(Logout)</em></a></li>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="#CCCCCC" cellspacing="0">
					<tr>
						<td width="250" height="510" valign="top">
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
							<li><em><a href="viewpop.php"><b>View population </b></a></em></li>
						</td>
					</tr>
					<tr>
						<?php
						$result1 = mysqli_query($conn,"select * from comment");
						$no = mysqli_num_rows($result1);
						?>
						<td id="topnav">
							<li><em><a href="viewcomment.php"><b>View comment<font color="blue">(<?php echo $no; ?>)</font> </b></a></em></li>
						</td>
					</tr>
					<tr>
						<td id="topnav">
							<li><em><a href="viewhouse.php"><b>View house </b></a></em></li>
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

		<div><b>Change your profile or photo</b></div>
		<hr />

		<br><br><br><br><br><br><br><br><br><br><br><br>
		<form action='profile.php' method='POST' enctype="multipart/form-data">
			<table valign='top' align="center" style="width:400px; margin-top:-110px; margin-top:-220px; height:150px;border-radius:16px;border:0px solid #686868">

				<tr>
					<td>UploadPicture:</td>
					<td><input type='file' name='UploadPicture'> </td>
				</tr>
				<tr>
					<td><input type='submit' name='update' value='Upload' required=""></td>
					<td>
				</tr>
				</td>
			</table>
		</form>

		<?php
		if (isset($_POST['update'])) {
			$photo = $_FILES['UploadPicture']['name'];
			$temp_pho = $_FILES["UploadPicture"]["tmp_name"]; // for clerance
			move_uploaded_file($temp_pho, "downlod/photo/$photo");

			$updat = mysqli_query($conn,"update user set profile='" . $photo . "' where Username='$_username'") or die(mysqli_error($conn));
			if ($updat) {
				echo "<h4 align='center'><font color='red'>....................................................................................................</h4></font>";
				echo "<h4 align='center' style='width:500px;height:30px;background:green;'><font color='red'> Your photo Upload succesfuly. !!</h4></font>";
				echo "<h4 align='center'><font color='red'>.....................................................................................................</h4></font>";
			} else
				echo $id1;
		}

		?>
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
					<td align="center">
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