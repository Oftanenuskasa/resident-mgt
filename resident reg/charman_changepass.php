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
$lname = $row['lname'];
$ful = $fname . " " . $mname;
?>

<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script language="javascript" src="datetimepicker.js"></script>
	<script type="text/javascript">
		function validatePassword() {
			var currentPassword, newPassword, confirmPassword, output = true;

			currentPassword = document.frmChange.currentPassword;
			newPassword = document.frmChange.newPassword;
			confirmPassword = document.frmChange.confirmPassword;

			if (!currentPassword.value) {
				currentPassword.focus();
				document.getElementById("currentPassword").innerHTML = "required";
				output = false;
			} else if (!newPassword.value) {
				newPassword.focus();
				document.getElementById("newPassword").innerHTML = "required";
				output = false;
			} else if (!confirmPassword.value) {
				confirmPassword.focus();
				document.getElementById("confirmPassword").innerHTML = "required";
				output = false;
			}
			if (newPassword.value != confirmPassword.value) {
				newPassword.value = "";
				confirmPassword.value = "";
				newPassword.focus();
				document.getElementById("confirmPassword").innerHTML = "not same";
				output = false;
			}
			return output;
		}
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
						<td width="270" height="500" valign="top">
							<table border="0" width="259" cellspacing="0">
								<tr>
									<?php
									$sql = "SELECT * FROM `user` WHERE Username='$_username'";
									$res = mysqli_query($conn, $sql);
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
						$result = mysqli_query($conn, "select * from comment");
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
	<th width="100%" height="436" valign="top" bgcolor="white">
		<div align="center"><b>Change Password Form</b></div>
		<hr />
		<fieldset>
			<legend align="center">
				<div class="legend"><b>Please fill the space provided below</b></div>
			</legend>
			<br>
			<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
				<div style="width:400px;">
					<div class="message"><?php if (isset($message)) {
												echo $message;
											} ?></div>
					<table border="0" cellpadding="10" cellspacing="0" width="100%" align="center" class="tblSaveForm">
						<tr>
							<td width="40%"><label>Current Password:</label></td>
							<td width="60%"><input type="password" required name="oldpassword" id="oldpassword" placeholder="Enter old password"></td>
						</tr>
						<tr>
							<td><label>New Password:</label></td>
							<td><input type="password" required name="newpassword" id="newPassword" placeholder="Enter new password"></td>
						</tr>
						<td><label>Confirm Password:</label></td>
						<td><input type="password" required name="cnewpassword" id="cnewpassword" placeholder="Reenter new password"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="change" value="Change" class="btnSubmit">
								<input type="reset" name="reset" value="reset" class="btnSubmit"><a href="charman.php"><input type="button" name="back" value="back" class="btnSubmit"></a>
							</td>
						</tr>
					</table>
				</div>
			</form>
		</fieldset>
		<?php
		if (isset($_POST['change'])) {
			// Validate new password length
			if (strlen($_POST['newpassword']) < 6 || strlen($_POST['newpassword']) > 25) {
				echo "<font color='red'>Please enter a new password between 6 and 25 characters.</font>";
			} elseif (strlen($_POST['cnewpassword']) < 6 || strlen($_POST['cnewpassword']) > 25) {
				echo "<font color='red'>Please enter the confirm new password between 6 and 25 characters.</font>";
			} elseif ($_POST['newpassword'] != $_POST['cnewpassword']) {
				echo "<font color='red'>The new password and confirm new password must be equal.</font>";
			} else {
				// Connect to the database
				$con = mysqli_connect("localhost", "root", "nasis", "resident");
				if (!$con) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// Sanitize inputs
				$oldpassword = mysqli_real_escape_string($con, md5($_POST['oldpassword']));
				$newpassword = mysqli_real_escape_string($con, md5($_POST['newpassword']));
				$username = mysqli_real_escape_string($con, $_POST['username']); // Assuming username is passed in POST

				// Check if the old password is correct
				$sql = "SELECT * FROM user WHERE password='$oldpassword' AND Username='$username'";
				$result = mysqli_query($con, $sql);
				if (mysqli_num_rows($result) > 0) {
					// Update the password
					$update_sql = "UPDATE user SET password='$newpassword' WHERE Username='$username'";
					if (mysqli_query($con, $update_sql)) {
						echo "<h4 style='width:530px;height:30px;background:brown'><font color='white'>Password is successfully changed</font></h4>";
					} else {
						echo "Error updating password: " . mysqli_error($con);
					}
				} else {
					echo "<h4 style='width:530px;height:40px;background:red' align='left'><font color='white'><font color='green' size='5'>(?)</font> Please enter the correct old password </font></h4>";
				}

				// Close the database connection
				mysqli_close($con);
			}
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
				<td align="left"> durame city .</td>
			</tr>
			</tr>
			<tr>
				<td align="left"> </td>
			</tr>
			</tr>
			<tr>
				<td align="left"> </td>
			</tr>
			</tr>
			<tr>
				<td align="left"> </td>
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