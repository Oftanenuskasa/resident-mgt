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
						<td width="270" height="850" valign="top">
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
	<td width="1047" height="436" valign="top" bgcolor="white"><br>
		<div><b>Update IdCard form</b></div>
		<hr />

		<?php
		$ctrl = $_REQUEST['key1'];

		$query = "SELECT * FROM idcard where id_number='{$ctrl}'";
		$result = mysqli_query($conn, $query);
		$count = mysqli_num_rows($result);
		if ($count == 1) {
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
				$row14 = $row[14];
				$row15 = $row[15];
			}
			$dob = new DateTime($row10);
			$age = $dob->diff(new DateTime);
			$ag = $age->y;
		?>
			<form action='edit_id.php' method='POST' enctype="multipart/form-data">
				<table valign='top' align="center" style="width:300px; margin-top:-110px; margin-top:-220px; height:150px;border-radius:16px;border:2px solid #686868" cellpadding="3">
					<tr>
						<td colspan="2" align="right"> <a href="giveidcard.php"><img src="image/close.png" width="30" title="Click here to back serach menu"></a></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><img src="downlod/photo/<?php echo $row14; ?> " width='120' height='80'></td>
					</tr><br />
					<tr>
						<td>Upload Picture:</td>
						<td><input type='file' name='UploadPicture' value="<?php echo $row14 ?>"> </td>
					</tr><br />
					<tr>
						<td>Id number:</td>
						<td><input type='text' name='id' readonly value="<?php echo $row0 ?>" style="width: 200;height: 30; background:#eee;"></td>
					</tr><br />
					<tr>
						<td>House Number:</td>
						<td><input type='text' name='house' value="<?php echo $row1 ?>" style="width: 200;height: 30; background:#eee;"></td>
					</tr><br />
					<tr>
						<td>Firs tName:</td>
						<td><input type='text' name='firstname' value="<?php echo $row2 ?>" style="width: 200;height: 30; background:#eee;"></td>
					</tr><br />
					<tr>
						<td>middle Name:</td>
						<td><input type='text' name='middlename' readonly="" value="<?php echo $row3 ?>" style="width: 200;height: 30; background:#eee;"></td>
					</tr><br />
					<tr>
						<td>Last Name:</td>
						<td><input type='text' name='lastname' readonly="" value="<?php echo $row4 ?>" style="width: 200;height: 30; background:#eee;"></td>
					</tr><br />
					<tr>
						<td>age:</td>
						<td><input type='text' name='age' readonly="" value="<?php echo $ag; ?>" style="width: 200;height: 30; background:#eee;">
					</tr>
	</td><br />
	<tr>
		<td>Sex:</td>
		<td><input type='text' name='Sex' readonly value="<?php echo $row6 ?>" style="width: 200;height: 30; background:#eee;"></td>
	</tr><br />
	<tr>
		<td>Kebele:</td>
		<td><input type='text' name='Kebele' readonly value="<?php echo $row7 ?>" style="width: 200;height: 30; background:#eee;"></td>
	</tr><br />
	<tr>
		<td>Job:</td>
		<td><input type='text' name='Job' value="<?php echo $row8 ?>" style="width: 200;height: 30; background:#eee;"></td>
	</tr><br />
	<tr>
		<td>Place Of Birth:</td>
		<td><input type='text' name='PlaceOfBirth' value="<?php echo $row9 ?>" style="width: 200;height: 30; background:#eee;" readonly></td>
	</tr><br />
	<tr>
		<td>Date Of Birth:</td>
		<td><input type='text' name='DateOfBirth' value="<?php echo $row10 ?>" style="width: 200;height: 30; background:#eee;" readonly></td>
	</tr><br />
	<tr>
		<td>Nationality:</td>
		<td><input type='text' name='Nationality' readonly="" value="<?php echo $row12 ?>" style="width: 200;height: 30; background:#eee;" readonly></td>
	</tr><br />

	<tr>
		<td><input type='submit' name='update' value='update'></td>
		<td>
	</tr>
	</td>
	</table>
	</form>
<?php
		}


?>

<?php
if (isset($_POST['update'])) {
	$photo = $_FILES['UploadPicture']['name'];
	$temp_pho = $_FILES["UploadPicture"]["tmp_name"]; // for clerance
	move_uploaded_file($temp_pho, "downlod/photo/$photo");
	$dat1 = date('Y-m-d');
	$expr = date('Y-m-d', strtotime($date . '+3 years'));
	$name = $_REQUEST['name'];
	$id = $_POST['id'];
	$sql = "SELECT * FROM `requestr` WHERE SenderidNumber='$id'";
	$res = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_array($res)) {
		$user1 = $row['sendername'];
		# code...
	}
	$house = $_POST['house'];
	$kebelee = $_POST['firstname'];
	$region = $_POST['middlename'];
	$housetype = $_POST['lastname'];
	$registration = $_POST['age'];
	$Sex = $_POST['Sex'];
	$Kebele = $_POST['Kebele'];
	$Job = $_POST['Job'];
	$PlaceOfBirth = $_POST['PlaceOfBirth'];
	$DateOfBirth = $_POST['DateOfBirth'];
	$Nationality = $_POST['Nationality'];
	if (!empty($photo)) {
		$update = mysqli_query($conn, "update idcard set id_number='$id',HouseNumber='$house',FirstName='$kebelee',middleName='$region',LastName='$housetype',age='$registration',Sex='$Sex',Kebele='$Kebele',Job='$Job',PlaceOfBirth='$PlaceOfBirth',DateOfBirth='$DateOfBirth',DateOfTaken='$dat1',Nationality='$Nationality',renewed_date='$dat1',UploadPicture='$photo',exipred_date='$expr' where id_number='{$id}'") or die(mysqli_error($conn));
		if ($update) {
			$sql = "INSERT INTO `noti`(`id`, `from`, `content`, `send`, `seen`, `date`, `username`) VALUES ('none','$_username','The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.','$user1','0','$dat1','none')";
			if (mysqli_query($conn, $sql)) {
				$sql = "UPDATE `requestr` SET `seen`='1' WHERE sendername='$user1' and Purpose='missing'";
				$up = mysqli_query($conn, $sql);

				echo "<h4 align='center' style='width:530px;height:30px;background:brown;><font color='white'> The data Update Sucessfully !!</h4></font>";
			}
		}
	} else {
		$update = mysqli_query($conn, "update idcard set id_number='$id',HouseNumber='$house',FirstName='$kebelee',middleName='$region',LastName='$housetype',age='$registration',Sex='$Sex',Kebele='$Kebele',Job='$Job',PlaceOfBirth='$PlaceOfBirth',DateOfBirth='$DateOfBirth',DateOfTaken='$dat1',Nationality='$Nationality',renewed_date='$dat1',exipred_date='$expr' where id_number='{$id}'") or die(mysqli_error($conn));
		if ($update) {
			$sql = "INSERT INTO `noti`(`id`, `from`, `content`, `send`, `seen`, `date`, `username`) VALUES ('none','$_username','The id card is prepared.bring your photo ether sofet copy or hard copy and pay mony.','$user1','0','$dat1','none')";
			if (mysqli_query($conn, $sql)) {
				$sql = "UPDATE `requestr` SET `seen`='1' WHERE sendername='$user1' and Purpose='missing'";
				$up = mysqli_query($conn, $sql);

				echo "<h4 align='center' style='width:530px;height:30px;background:brown;><font color='white'> The data Update Sucessfully !!</h4></font>";
			}
		}
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