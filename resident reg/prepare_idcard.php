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
						<td width="270" height="750" valign="top">
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


		<?php
		$date = date('Y-m-d');
		$id1 = $_REQUEST['id'];

		$query = "SELECT * FROM population where id='$id1' and status=0";
		$result = mysqli_query($conn,$query);
		$c = mysqli_num_rows($result);
		while ($row = mysqli_fetch_array($result)) {
			$row0 = $row[0];
			$row1 = $row[1];
			$row2 = $row[2];
			$row3 = $row[3];
			$row4 = $row[4];
			$row5 = $row[5];
			$row6 = $row[6];
			$row7 = $row[7];
			$row8 = $row[8];
			$row9 = $row[9];
			$row10 = $row[10];
			$row11 = $row[11];
			$row12 = $row[12];
			$row13 = $row[13];
		}

		$dob = new DateTime($row10);
		$age = $dob->diff(new DateTime);
		$ag = $age->y;
		?>
		<div><b>Id card Form</b></div>
		<hr />
		<form onsubmit='return formValidation()' action='prepare_idcard.php' method='POST' enctype="multipart/form-data">
			<?php $house = 0;
			$sql = "SELECT * FROM `idcard`";
			$res = mysqli_query($conn,$sql);
			while ($r = mysqli_fetch_array($res)) {
				$house = $r['id_number'];
				# code...
			}
			?>

			<table valign='top' align="center" style="width:500px; margin-top:-110px; margin-top:-220px; height:200px;border-radius:16px;border:2px solid #686868" cellpadding="3">
				<tr>
					<td colspan="2" align="right"><a href="display_residnet.php"><img src="image/close.png" width="30"></a></td>
				</tr>

				<tr>
					<td>House Number:</td>
					<td><input type='text' size='30px' name='house' id='house' readonly value="<?php echo $row1 ?>" style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />
				<tr>
					<td>First Name:</td>
					<td><input type='text' size='30px' id='firstname' name='firstname' pattern="\D{2,12}" value="<?php echo $row2 ?>" style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />
				<tr>
					<td>middle Name:</td>
					<td><input type='text' size='30px' name='middlename' id='middlename' pattern="\D{2,12}" readonly value="<?php echo $row3 ?> " style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />
				<tr>
					<td>Last Name:</td>
					<td><input type='text' size='30px' name='lastname' id='lastname' pattern="\D{2,12}" value="<?php echo $row4 ?>" style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />
				<tr>
					<td>age:</td>
					<td><input type='text' size='30px' id='ag' name='ag' readonly="" pattern="\d{1,3}" value="<?php echo $ag ?>" style="width: 200;height: 30; background:#eee;">
				</tr>
				</td><br />
				<tr>
					<td>Sex:</td>
					<td><input type='text' size='30px' name='Sex' readonly value="<?php echo $row6 ?>" style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />
				<tr>
					<td>Kebele:</td>
					<td><input type='text' id='kebele' size='30px' name='kebele' readonly value="<?php echo '01' ?>" style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />
				<tr>
					<td>Job:</td>
					<td><input type='text' size='30px' id='jop' name='job' value="<?php echo $row8 ?>" style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />
				<tr>
					<td>Place Of Birth:</td>
					<td><input type='text' size='30px' id='place' name='place' pattern="\D{4,12}" readonly value="<?php echo $row9 ?>" style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />
				<tr>
					<td>Date Of Birth:</td>
					<td><input type='text' size='30px' id='date' name='dat' value="<?php echo $row10 ?>" readonly style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />
				<tr>
					<td>Nationality:</td>
					<td><input type='text' size='30px' id='nationality' name='nationality' readonly value="<?php echo $row12 ?>" style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />
				<tr>
					<td>ID_number(Register id):</td>
					<td><input type='text' size='30px' id='id1' name='id1' readonly value="<?php echo $id1 ?>" style="width: 200;height: 30; background:#eee;"></td>
				</tr><br />

				<tr>
					<td colspan="2" align="center"><input type='submit' value='Submit' style="width: 80;height: 30; background:green;" name='idcard' onClick="return check(this.form);" /></td>
				</tr>
			</table>
		</form>
		<?php

		if (isset($_POST['idcard'])) {
			$id = $_POST['id'];
			$n = $_POST['firstname'];
			$id1 = $_REQUEST['id'];

			$dat = date('Y-m-d');
			$expr = date('Y-m-d', strtotime($date . '+3 years'));
			$age1 = $_POST['ag'];
			if ($age1 > 17) {
				$photo = $_FILES['$row13']['name'];
				$temp_pho = $_FILES["$row13"]["tmp_name"]; // for clerance
				move_uploaded_file($temp_pho, "downlod/photo/$photo");
				mysqli_select_db($conn,"resident" );
				$sql = "INSERT INTO `idcard`(`id_number`, `HouseNumber`, `FirstName`, `middleName`, `LastName`, `age`, `Sex`, `Kebele`, `Job`, `PlaceOfBirth`, `DateOfBirth`, `DateOfTaken`, `Nationality`, `renewed_date`, `UploadPicture`, `exipred_date`) VALUES ('$_POST[id]','$_POST[house]','$_POST[firstname]','$_POST[middlename]','$_POST[lastname]','$_POST[ag]','$_POST[Sex]','$_POST[kebele]','$_POST[job]','$_POST[place]','$_POST[dat]','" . $dat . "','$_POST[nationality]','" . $dat . "','" . $photo . "','" . $expr . "')";
				$ress = mysqli_query($conn,$sql);
				if ($ress) {
					$rs = "SELECT * FROM `user` WHERE frist_name='$n'";
					$result = mysqli_query($conn,$rs);
					while ($row = mysqli_fetch_array($result)) {
						# code...
						$user1 = $row['Username'];
					}
					$sql = "INSERT INTO `replay`(`id`, `username`, `charmanname`, `content`, `seen`, `idnum`) VALUES('none','$user1','$ful','The id card is prepared plese pay the mony and bring your photo or uplod. the id number is:$id','0','$id')";
					$res = mysqli_query($conn,$sql);

					if ($res) {
						$id2 = $_POST['id1'];
						$sql1 = "UPDATE population SET `status`='1' where id='$id2'";
						$up = mysqli_query($conn,$sql1);
						echo "<font color='white'><h4 style='width:500px;height:30px;background:brown;'> ID card Prepared Sucessfully !!</h4></font";
					}
				}
			} else {
				echo "<font color='white'><h4 style='width:500px;height:40px;background:brown;'>Your age are not allowed for id card preparation<br>B.C the age is less than 18</h4></font>";
				$r = "SELECT * FROM `user` WHERE frist_name='$n'";
				$resl = mysqli_query($conn,$r);
				while ($row = mysqli_fetch_array($resl)) {
					# code...
					$user = $row['Username'];
				}
				$sql = "INSERT INTO `replay`(`id`, `username`, `charmanname`, `content`, `seen`, `idnum`) VALUES('none','$user','$ful','The request is not accept becuaese the age is less than 18','0','none')";
				$res = mysqli_query($conn,$sql);
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