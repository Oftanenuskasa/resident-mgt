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
<script language="javascript" src="datetimepicker.js"></script>

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
						<td width="250" height="670" valign="top">
							<table border="0" width="249" cellspacing="0">
								<tr>
									<?php
									$sql = "SELECT * FROM `user` WHERE Username='$_username'";
									$res = mysqli_query($conn, $sql);
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
						$result1 = mysqli_query($conn, "select * from comment");
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
		<?php
		$id = $_REQUEST['id'];
		$sql = "SELECT * FROM `population` WHERE id='{$id}'";
		$res = mysqli_query($conn, $sql);
		while ($r = mysqli_fetch_array($res)) {
			$id1 = $r[0];
			$i1 = $r[1];
			$i2 = $r[2];
			$i3 = $r[3];
			$i4 = $r[4];
			$i5 = $r[5];
			$i6 = $r[6];
			$i7 = $r[7];
			$i8 = $r[8];
			$i9 = $r[9];
			$i10 = $r[10];
			$i11 = $r[11];
			$i12 = $r[12];
			$i13 = $r[13];
			$i14 = $r[14];
			# code...
		}

		$fuln = $i2 . " " . $i3;




		?>
		<table>
			<tr>
				<td>
					<div><b>Death registration Form</b></div>
					<hr />
					<fieldset>
						<legend align="center">
							<div class="legend"><b>Please fill-up the space provided below</b></div>
						</legend>
						<br>
						<div>
							<form onsubmit='return formValidation()' action='death.php' method='POST'>
								<table width="500px" cellpadding="3">
									<tr>
										<td>
											<font color="red"></font> Register Id :
										</td>
										<td><input type="text" size="20px" id='id' name='id' placeholder="Enter Id number..." style="width: 200;height: 30; background:#eee;" readonly="" value="<?php echo $id1; ?>"></td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>Full name:
										</td>
										<td><input type="text" size="20px" id='kid' name='kid' placeholder="Enter house..." style="width: 200;height: 30; background:#eee;" readonly="" value="<?php echo $fuln; ?>"></td>
									</tr>

									<tr>
										<td>
											<font color="red"></font>Place of birth:
										</td>
										<td><input type="text" size="20px" id='pod' name='pod' pattern="\D{2,12}" placeholder="Enter firstname..." style="width: 200;height: 30; background:#eee;" readonly="" value="<?php echo $i9; ?>"></td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>Place of grave :
										</td>
										<td><input type="text" size="20px" id='pog' name='pog' placeholder="Enter middlename..." style="width: 200;height: 30; background:#eee;" required=""></td>
									</tr>
									<?php $dob = new DateTime($i10);
									$age = $dob->diff(new DateTime);
									$ag = $age->y; ?>
									<tr>
										<td>
											<font color="red"></font>Age :
										</td>
										<td><input type="text" size="20px" id='age' name='age' pattern="\d{1,3}" placeholder="Enter Age..." style="width: 200;height: 30; background:#eee;" value="<?php echo $ag; ?>" readonly></td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>Sex :
										</td>
										<td><input type="text" name="gender" id="optionsRadios1" value="<?php echo $i6; ?>" style="width: 200;height: 30; background:#eee;" readonly>
										</td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>Kebele:
										</td>
										<td><label>
												<select name="kebele" id="kebele" style="width: 200;height: 30; background:#eee;">

													<option>shiro meda</option>
												</select>
											</label></td>
									</tr>
									<tr>
										<td>Job :</td>
										<td><input type="text" id='job' name='job' style="width: 200;height: 30; background:#eee;" value="<?php echo $i8; ?>">
										</td>
									</tr>
									<tr>
										<td>Date of birth :</td>
										<td><input type="text" id='job' name='da' style="width: 200;height: 30; background:#eee;" value="<?php echo $i10; ?>">
										</td>
									</tr>

									<tr>
										<td>
											<font color="red"></font>Date Of Death :
										</td>
										<td><input type="date" size="15px" id='date' name='date' class="mine_text_field_7" required style="width: 200;height: 30; background:#eee;"></td>

									</tr>
									<tr>
										<td>
											<font color="red"></font>Reson of death :
										</td>
										<td><textarea size="15px" id='rod' name='rod' pattern="\D{4,12}" style="width: 200;height: 30; background:#eee;" required=""></textarea></td>
									</tr>
									<tr>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td><input type='submit' value='Register' name='death' onClick="return check(this.form);" />
											<input type='reset' value='clear'>
										</td>
									</tr>
								</table>
							</form>
						</div>
					</fieldset>
					<hr />
					<?php
					if (isset($_POST['death'])) {
						// Connect to the database
						$conn = mysqli_connect("localhost", "root", "nasis", "resident");
						if (!$conn) {
							die('Could not connect: ' . mysqli_connect_error());
						}

						$dat = date('Y-m-d');
						$id1 = mysqli_real_escape_string($conn, $_POST['id']);
						$kid = mysqli_real_escape_string($conn, $_POST['kid']);
						$pod = mysqli_real_escape_string($conn, $_POST['pod']);
						$pog = mysqli_real_escape_string($conn, $_POST['pog']);
						$rod = mysqli_real_escape_string($conn, $_POST['rod']);
						$age = mysqli_real_escape_string($conn, $_POST['age']);
						$gender = mysqli_real_escape_string($conn, $_POST['gender']);
						$kebele = mysqli_real_escape_string($conn, $_POST['kebele']);
						$job = mysqli_real_escape_string($conn, $_POST['job']);
						$date = mysqli_real_escape_string($conn, $_POST['date']);
						$da = mysqli_real_escape_string($conn, $_POST['da']);
						$username = mysqli_real_escape_string($conn, $_POST['username']);

						// Insert into death table
						$sql = "INSERT INTO death (drid, kebeleid, placeofdeath, placeofgrave, reasonofdeath, age, sex, Kebele, job, date, register, dateofb)
            VALUES ('$id1', '$kid', '$pod', '$pog', '$rod', '$age', '$gender', '$kebele', '$job', '$date', '$dat', '$da')";

						if (!mysqli_query($conn, $sql)) {
							die('Error: ' . mysqli_error($conn));
						} else {
							// Retrieve sender's username
							$i2 = mysqli_real_escape_string($conn, $_POST['i2']);
							$s = "SELECT * FROM user WHERE frist_name='$i2'";
							$re = mysqli_query($conn, $s);
							$sender = '';

							while ($row = mysqli_fetch_array($re)) {
								$sender = $row['Username'];
							}

							// Insert into notification table
							$sql1 = "INSERT INTO noti (id, send, from, content, seen, date, username)
                 VALUES ('none', 'charman', '$username', 'Please Deactivate this user account.', '0', '$dat', '$sender')";

							if (mysqli_query($conn, $sql1)) {
								// Update population table
								$up = "UPDATE population SET des=1 WHERE id='$id1'";
								$res = mysqli_query($conn, $up);
								echo "<font color='white'><h4 style='width:530px;background:brown;height:30px'>1 record added</h4></font>";
							}
						}

						// Close the database connection
						mysqli_close($conn);
					}
					?>

				</td>
			</tr>
		</table>

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
				<td align="left"> durame city </td>
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
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>

			</tr>
			<tr>
				<td align="right"><b></b></td>
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
			<tr>
				<td align="right"><b></b></td>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
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
			<tr>
				<td align="right"><b></b></td>
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