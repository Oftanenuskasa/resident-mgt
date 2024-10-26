<?php
session_start();
error_reporting(0);
include "config.php";

if (isset($_POST['submitMain'])) {
	$account_type = $_POST['acc_type'];
	$userid = $_POST['txt_userid'];
	$password = md5($_POST['txt_password']);

	$_SESSION['txt_userid'] = $userid;

	// Prepared statement to prevent SQL injection
	$stmt = $conn->prepare("SELECT * FROM user WHERE Position = ? AND Username = ? AND Password = ?");
	$stmt->bind_param("sss", $account_type, $userid, $password);
	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$stat = $row['status'];

		if ($stat == 1) {
			$_SESSION['Username'] = $row['Username'];

			switch ($account_type) {
				case "chairman":
					header("Location: charman.php");
					break;
				case "Record Officer":
					header("Location: officer.php");
					break;
				case "Administrator":
					header("Location: admin.php");
					break;
				case "Resident":
					header("Location: resident.php");
					break;
				default:
					echo "Invalid role.";
					break;
			}
		} else {
			echo "<div align='center'><strong><font color='red'>Your Account is Deactivated. Please Contact the Administrator!</font></strong></div>";
		}
	} else {
		echo "<div align='center'><strong><font color='red'>Account Type, Username, or Password does not match!</font></strong></div>";
	}

	$stmt->close();
	$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Durame City Resident Record Management System</title>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<style>
		body {
			background: url(image/backgr.avif) repeat;
			margin-left: 300px;
		}
	</style>
	<script type="text/javascript">
		let count = 0;

		function member() {
			const images = ["image/df.jpg", "image/dg.jpg", "image/dh.jpg", "image/dj.jpg"];
			document.querySelector("#parentImage").src = images[count];
			count = (count + 1) % images.length;
			setTimeout(member, 3000);
		}

		function noBack() {
			window.history.forward();
		}
	</script>
</head>

<body onload="member(); noBack();" onpageshow="if(event.persisted) noBack();">
	<br>
	<table border="0" width="92.8%" cellspacing="0">
		<tr>
			<td colspan="3">
				<img src="image/f.gif" width="15%" height="130">
				<img src="image/dk.jpg" width="70%" height="150">
				<img src="image/Flag_of_Southern_Ethiopia.png" width="14%" height="130">
			</td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<font size="2.75">
					<li><b><a href="home.php"><em><img src="image/home.PNG" width="20" height="20"> Home</em></a></b></li>
					<li><b><a href="services.php"><img src="image/bel/se.jpg" width="20" height="20"><em>Service</em></a></b></li>
					<li><b><a href="about.php"><img src="image/bel/a.jpg" width="20" height="20"><em>About us</em></a></b></li>
					<li><b><a href="contact.php"><img src="image/ph.jpg" width="20" height="20"><em>Contact us</em></a></b></li>
					<li><b><a href="help.php"><em><img src="image/bel/im.png" width="20" height="20"> Help</em></a></b></li>
					<?php
					$date = date('Y-m-d');
					$a = date('Y-m-d', strtotime($date . ' - 7 days'));
					$b = date('Y-m-d');
					$stmt = $conn->prepare("SELECT COUNT(*) AS count FROM newnoti WHERE date BETWEEN ? AND ?");
					$stmt->bind_param("ss", $a, $b);
					$stmt->execute();
					$result = $stmt->get_result();
					$row = $result->fetch_assoc();
					$con = $row['count'];
					?>
					<li><b><a href="register_noti.php"><img src="image/mail.png" width="20" height="20"><em><strong>Notification <font color='red'>(<?php echo $con; ?>)</font></strong></em></a></b></li>
					<li><b><a href="register.php"><em><strong><img src="image/bel/reg.jpg" width="20" height="20"> New register</strong></em></a></b></li>
				</font>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="#F0F8FF" cellspacing="0" id="mele">
					<tr>
						<td width="252" height="450" valign="top">
							<table border="0" width="50" cellspacing="0">
								<tr>
									<td><img src="image/dj.jpg" width="250" height="200" id="parentImage" /></td>
								</tr>
								<tr>
									<td bgcolor="green" height="10" align="right"><strong>
											<font color="blue">Calendar</font>
										</strong></td>
								</tr>
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
						<td width="100%" height="380" valign="top" bgcolor="white"><br>
							<h2 align="center">
								<font color="blue" style="width: 530px; height: 100px; background:#808080">Welcome to Durame City<br>Resident Record Management system</font>
							</h2>
							<pre>
<font size="4">
Durame city was established in 2010 E.C.
This city is found in southeastern Ethiopia.
<a href="more.php"><font color="red">Read more</font></a>
</font>
                            </pre>
						</td>
						<td width="100%" height="400" valign="top">
							<table border="0" bgcolor="white" width="257" height="490" cellspacing="0" cellpadding="5">
								<form action="index.php" method="POST">
									<tr>
										<td height="50" colspan="2" bgcolor="green" align="center">
											<b>
												<font color="white" size="5">User Login</font>
											</b>
										</td>
									</tr>
									<tr>
										<td>
											<font size="4">Account Type:</font>
										</td>
										<td>
											<select name="acc_type">
												<option value="Administrator">Administrator</option>
												<option value="Resident">Resident</option>
												<option value="Record Officer">Record Officer</option>
												<option value="chairman">chairman</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<font size="4">Username:</font>
										</td>
										<td><input type="text" name="txt_userid"></td>
									</tr>
									<tr>
										<td>
											<font size="4">Password:</font>
										</td>
										<td><input type="password" name="txt_password"></td>
									</tr>
									<tr>
										<td colspan="2" align="center">
											<input type="submit" name="submitMain" value="Login">
											<input type="reset" value="Clear">
										</td>
									</tr>
								</form>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="3" height="40">
							<table border="0" align="center" width="100%" bgcolor="#CCCCCC" cellspacing="0">
								<tr>
									<td align="center">
										<font face="Times New Roman" color="black" size="4"><b>DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b></font>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>

</html>