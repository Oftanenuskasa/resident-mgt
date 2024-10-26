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
	<title>DC RRMS record officer page</title>
</head>

<body onLoad="timeimgs('1');">
	<br>
	<table border="0" width="92.8%" cellspacing="0">
		<tr>
		<td colspan="3"><img src="image/f.gif" width="15%" height="150"><img src="image/dk.jpg" width="70%" height="150"><img src="image/Flag_of_Southern_Ethiopia.png" width="15%" height="150"></td>
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
						<li><a href="totalpopreport.php"><b><i>Total population report</i></b></a></li>
						<li><a href="totalhousereport.php"><b><i>Total house report</i></b></a></li>


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
						<td width="250" height="700" valign="top">
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
			function changeVal(t1) {
				if (!/^[\d-'.']*$/.test(t1.value)) { //validates for numbers
					alert('Only valid numbers allowed!');
					t1.value = t1.value.replace(/[^\d-'.']/g, '');
				}
			}
		</script>
		<div><b>
				<center>Population Registeration Form</center>
			</b></div>
		<hr />
		<fieldset>
			<legend align="center">
				<div class="legend"><b>Please fill-up the space provided below</b></div>
			</legend>
			<br>
			<div>
				<form onsubmit='return formValidation()' action='population.php' method='POST' enctype="multipart/form-data">
					<table cellpadding="3" cellspacing="5">

						<tr>
							<td> Register Id :</td>
							<td><input type="text" size="20px" id='id' name='id' placeholder="Enter rigister id..." style="width: 200;height: 30; background:#eee;" pattern="[0-9/ ]+" required title="Enter only number"></td>
						</tr>
						<tr>
							<td>House Number :</td>
							<?Php
							echo "<td>" . "<select id='job' name='house' style=\"width: 200;height: 30; background:#eee;\">";
							echo "<option>Choose house number</option>";

							$sql = "SELECT * FROM `house`";
							$res = mysqli_query($conn,$sql);
							while ($row = mysqli_fetch_array($res)) {
								# code...
								$house_num = $row['HouseNumber'];
								echo "<option> $house_num</option>";
							}
							echo "</td>" . "</select>";
							?>
						</tr>
						<tr>
							<td>First Name :</td>
							<td><input type="text" size="20px" id='firstname' name='firstname' placeholder="Enter firstname..." style="width: 200;height: 30; background:#eee;" pattern="[a-zA-Z ]+" required title="Enter only alphabet"></td>
						</tr>
						<tr>
							<td>middle Name :</td>
							<td><input type="text" size="20px" id='middlename' name='middlename' placeholder="Enter middlename..." pattern="[a-zA-Z ]+" required title="Enter only alphabet" style="width: 200;height: 30; background:#eee;"></td>
						</tr>
						<tr>
							<td>Last Name :</td>
							<td><input type="text" size="20px" id='lastname' name='lastname' placeholder="Enter lastname..." pattern="[a-zA-Z ]+" required title="Enter only alphabet" style="width: 200;height: 30; background:#eee;"></td>
						</tr>
						<tr>
							<td>age :</td>
							<td><input type="text" size="20px" id='age' name='age' onKeyUp="changeVal(this)" placeholder="Enter age..." pattern="[0-9 ]+" required title="Enter only positeve number" style="width: 200;height: 30; background:#eee;" maxlength="2"></td>
						</tr>
						<tr>
							<td>Sex :</td>
							<td><input type="radio" name="gender" id="optionsRadios1" value="Male" checked>
								Male<input type="radio" name="gender" id="optionsRadios2" value="Female" checked>
								Female
							</td>
						</tr>
						<tr>
							<td>Kebele:</td>
							<td> <select id='kebele' name='kebele' style="width: 200;height: 30; background:#eee;">
									<option>Please Choose kebele</option>
									<option>01</option>
								</select> </td>
						</tr>
						<tr>
							<td>Job :</td>
							<td><select id='job' name='job' style="width: 200;height: 30; background:#eee;">
									<option>Please Choose job of resident</option>
									<option>Farmer</option>
									<option>Student</option>
									<option>Teacher</option>
									<option>Doctor</option>
									<option>Phd</option>
									<option>Master</option>
									<option>Other</option>
								</select></td>
						</tr>
						<!--			<td><input type="text"  size="20px" id='job' name='job' pattern="\D{4,12}" placeholder="Enter job..."></td> -->
						<tr>
							<td>Place Of Birth:</td>
							<td><input type="text" size="20px" id='place' name='place' pattern="\D{3,12}" placeholder="Enter place..." pattern="[a-zA-Z ]+" required title="Enter only alphabet" style="width: 200;height: 30; background:#eee;"></td>
						</tr>
						<tr>
							<td>Date Of Birth :</td>
							<td><input type="date" size="20px" id='date' name='date' class="mine_text_field_7" required="required" placeholder="Enter DateOfBirth..." style="width: 200;height: 30; background:#eee;" /></td>
						</tr>
						<tr>
							<td>Nationality:</td>
							<td><select id='nationality' name='nationality' style="width: 200;height: 30; background:#eee;">
									<option>Please Choose nationality</option>
									<option>Ethiopia</option>
								</select></td>
						</tr>
						<!--<td><input type=="text" size="20px" id='nationality' name='nationality' pattern="\D{4,12}" placeholder="Enter nationality..."></td> -->

						<tr>
							<td><label for="file">Upload Picture:</label></td>
							<td><input type="file" size="10px" name="pho" </td>
						</tr>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='submit' value='Submit' name='population' onClick="return check(this.form);" />
								<input type='reset' value='clear'>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</fieldset>
		<hr />
		<?php
		if (isset($_POST['population'])) {
			if (!$conn) {
				die('Could not connect: ' . mysqli_error($conn));
			}
			$da = date('Y-m-d');
			$photo = $_FILES['pho']['name'];
			$temp_pho = $_FILES["pho"]["tmp_name"]; // for clerance
			move_uploaded_file($temp_pho, "downlod/photo/$photo");

			mysqli_select_db($conn,"resident");
			$date1 = date('y-m-d');
			$sql = "INSERT INTO population(id,HouseNumber,FirstName,middleName,LastName,age,sex,Kebele,job,placeofbirth,dateofbirth,dateofregistration,nationality,UploadPicture,`status`)
VALUES
('$_POST[id]','$_POST[house]','$_POST[firstname]','$_POST[middlename]','$_POST[lastname]','$_POST[age]','$_POST[gender]','$_POST[kebele]','$_POST[job]','$_POST[place]','$_POST[date]','$da','$_POST[nationality]','" . $photo . "','0')";
			if (!mysqli_query($conn,$sql)) {
				die('Error: ' . mysqli_error($conn));
			} else {

				$sql1 = "INSERT INTO `registernoti`(`id`, `sendto`, `from`, `content`, `HouseNumber`, `date`,`seen`) VALUES ('$_POST[id]','admin','$_username','please creat account for $_POST[firstname]','$_POST[house]','$date1','0')";
				$ress = mysqli_query($conn,$sql1);
				if ($ress)
					echo "<h4 style='width:530px;height:30px; background:brown;'><font color='white'>Population Registered Sucssfully</font</h4>";
			}
		}

		mysqli_close($conn)
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