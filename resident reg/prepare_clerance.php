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
						<td width="270" height="530" valign="top">
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
	<th width="100%" height="436" valign="top" bgcolor="white">

		<div><b>
				<h2>
					<font color="blue">Clearance Form</font>
				</h2>
			</b></div>
		</center>

		<fieldset>
			<legend align="center">
				<div class="legend"><b>Please fill-up the space provided below</b></div>
			</legend>
			<div>
				<form action='prepare_clerance.php' method='POST' enctype="multipart/form-data">
					<table cellpadding="4">
						<tr>
							<td>
								<font color="black"><b>Owner Id number :</b>
							</td>
							</font>
							<td><input type="text" size="20px" id='id' name='id' placeholder="  Enter Id number..." style="width: 200;height: 30; background:#eee;" pattern="[0-9 ]+" required title="Enter only number"></td>
						</tr>
						<tr>
							<td>
								<font color="black"><b>First Name :</b>
							</td>
							</font>
							<td><input type="text" size="20px" id='firstname' name='firstname' placeholder="Enter firstname..." style="width: 200;height: 30; background:#eee;" pattern="[a-zA-Z ]+" required title="Enter only alephabet"></td>
						</tr>
						<tr>
							<td>
								<font color="black"><b>Middle Name :</b>
							</td>
							</font>
							<td><input type="text" size="20px" id='middlename' name='middlename' placeholder="Enter middlename..." style="width: 200;height: 30; background:#eee;" pattern="[a-zA-Z ]+" required title="Enter only alephabet"></td>
						</tr>
						<tr>
							<td>
								<font color="black"><b>Last Name :</b>
							</td>
							</font>
							<td><input type="text" size="20px" id='lastname' name='lastname' placeholder="Enter lastname..." style="width: 200;height: 30; background:#eee;" pattern="[a-zA-Z ]+" required title="Enter only alephabet"></td>
						</tr>
						<tr>
							<td>
								<font color="black"><b>Age :</b>
							</td>
							</font>
							<td><input type="text" size="20px" id='age' name='age' placeholder="Enter Age..." style="width: 200;height: 30; background:#eee;" pattern="[0-9 ]+" required title="Enter only number"></td>
						</tr>
						<tr>
							<td>
								<font color="black">Sex :
							</td>
							</font>
							<td><input type="radio" name="gender" id="optionsRadios1" value="Male" checked>
								Male<input type="radio" name="gender" id="optionsRadios2" value="Female" checked>
								Female
							</td>
						</tr>
						<tr>
						<tr>
							<td>Job :</td>
							<td><select id='job' name='job' style="width: 200;height: 30; background:#eee;">
									<option>Please Choose</option>
									<option>Farmer</option>
									<option>Student</option>
									<option>Teacher</option>
									<option>Doctor</option>
									<option>Phd</option>
									<option>Master</option>
									<option>Other</option>
								</select></td>
						</tr>

						<td>
							<font color="black"><b>Reason Of Clearance:</b>
						</td>
						</font>
						<td><textarea name="reason" id="reason" cols="15" rows="6" pattern="\D{4,50}" placeholder="Enter purpose..." style="width: 200;height: 30; background:#eee;"></textarea></td>
						</tr>
						<tr>
							<td><label for="file">Upload Picture:</label></td>
							<td><input type="file" size="10px" name="file" id="file" maxlength="50" value="" style="width:176px;" /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='submit' value='Submit' name='clearance' onClick="return check(this.form);" style="width: 100;height: 30; background:green;" />
								<input type='reset' value='clear'>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</fieldset>
		<hr />
		<?php
		if (isset($_POST['clearance'])) {
			$sendr;
			$count = 0;
			$id1 = $_POST['id'];
			$name = $_POST['firstname'];
			$result = mysqli_query($conn,"SELECT * FROM user where frist_name='$name'");
			while ($row = mysqli_fetch_array($result)) {
				$sendr1 = $row['Username'];
				# code...

			}
			$result2 = mysqli_query($conn,"SELECT * FROM idcard");
			while ($row = mysqli_fetch_array($result2)) {
				$id = $row['id_number'];
				$fname1 = $row['FirstName'];
				if ($id == $id1 and $fname1 == $name) {
					$count = 1;
					break;
				} else
					continue;
			}
			if ($count == 1) {

				$date = date('y-m-d');
				$photo = $_FILES['file']['name'];
				$temp_pho = $_FILES["file"]["tmp_name"]; // for clerance
				move_uploaded_file($temp_pho, "downlod/photo/$photo");
				mysqli_select_db($conn,"resident");
				$sql = "INSERT INTO `clearance`(`IdNumber`, `FirstName`, `middleName`, `LastName`, `age`, `Sex`, `Reason_Of_Clearance`, `Date_of_Taken`, `job`, `profile`, `prepard_by`) VALUES
('$_POST[id]','$_POST[firstname]','$_POST[middlename]','$_POST[lastname]','$_POST[age]','$_POST[gender]','$_POST[reason]','$date','$_POST[job]','" . $photo . "','$ful')";
				if (!mysqli_query($conn,$sql)) {
					die('Error: ' . mysqli_error($conn));
				} else {

					$sql1 = "INSERT INTO `noti`(`id`, `send`, `from`, `content`, `seen`,`date`,`username`) VALUES('none',' charman','$_username','Please Deactivate this user account.','0','$date','$sendr1')";
					if (mysqli_query($conn,$sql1)) {
						$up = "UPDATE `clearance_requset` SET `seen`=1 WHERE id_number='$id1'";
						$res = mysqli_query($conn,$up);


						echo " <font color='white'><h4 align='center' style='width:520px;height:30px;background:brown;'>prepared Successfully !!</h4></font>";
					} else
						echo " <font color='red'><h4 align='center'>prepared not Successfully !! !!</h4></font>";
				}
			} else
				echo "<font color='white'><h4 align='center' style='width:530px;height:40px;background:brown;'>The id and the name is not mach or incorrect.please fill the correct one!!</h4></font>";
		}

		mysqli_close($conn)
		?></td>

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
			<table border="0" align="left" width="85%" bgcolor="#CCCCCC" cellspacing="0">
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

</html><?php
