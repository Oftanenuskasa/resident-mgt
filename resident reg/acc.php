<?php
require_once('config.php');
session_start();
error_reporting(0);
if (isset($_SESSION['Username'])) {
	$_username = $_SESSION['Username'];
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
?>

<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script language="javascript">
		function check() {
			if (document.getElementById("id").value == "") {
				alert('please enter the Id !!');
				document.getElementById("id").focus();
				return false;
			} else if (document.getElementById("utype_id").value == "") {
				alert('Please enter the utype_id !!');
				document.getElementById("utype_id").focus();
				return false;
			} else if (document.getElementById("name").value == "") {
				alert('Please enter the Name!!');
				document.getElementById("name").focus();
				return false;
			} else if (document.getElementById("position").value == "") {
				alert('Please enter the Position!!');
				document.getElementById("position").focus();
				return false;
			} else if (document.getElementById("username").value == "") {
				alert('Please enter the UserName!!');
				document.getElementById("username").focus();
				return false;
			} else if (document.getElementById("password").value == "") {
				alert('Please enter the Password!!');
				document.getElementById("password").focus();
				return false;
			} else if (document.getElementById("city").value == "") {
				alert('Please Enter City!!');
				document.getElementById("city").focus();
				return false;
			} else if (document.getElementById("phone").value == "") {
				alert('Please Enter PhoneNumber!!');
				document.getElementById("phone").focus();
				return false;
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
		}
	</script>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style type="text/css">
		<!--
		body {
			background-color: #eee;
			margin-left: 140px;
			margin-right: 50px;
			margin-bottom: 0px
		}
		-->
	</style>
</head>

<body onLoad="timeimgs('1');">
	<br>
	<table border="0" width="92%" cellspacing="0">
		<tr>
			<td colspan="3"><img src="image/f.gif" width="15%" height="140"><img src="image/dk.jpg" width="70%" height="140"><img src="image/Flag_of_Southern_Ethiopia.png" width="15%" height="140"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li><b><a href="admin.php">Home </a></li>
				<li><a href="account.php"><b>Create Account</b></a></li>
				<li><a href="change_password.php"><b>Change Password</b></a></li>
				<li><a href="viewuser.php"><b>Manage User</b></a></li>
				<li><a href="adminnotfication.php"><b>View Requset</b></a></li>
				<li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				<li>login as <font color='blue'><?php echo "$_username"; ?></font>
				</li>
				<li><a href="Logout.php">(Logout)</a></li>
			</td>
		</tr>
		<tr>
			<td width="252" height='300'>
				<table border="0" bgcolor="#CCCCCC" cellspacing="0" valign="top">
					<tr>
						<td width="270" height="600" valign="top">
							<table border="0" width="259" cellspacing="0">
								<tr>
									<td id="topnav" align="lefet">
										<li><b>
												<font color='red'>Calander
											</b></font>
										</li>
									</td>
								</tr>
								<td>
									<br>
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
			<th width="100%" height="300" valign="top" bgcolor="white"><br>
				<div><b>Durame City Manage Resident Form</b></div>
				<hr />
				<fieldset>
					<legend align="center">
						<div class="legend"><b>Manage below</b></div>
					</legend>
					<br>
					<div>

						<table style="margin-top:-10px" width="450px" border="0" color:#606060 cellpadding="0" cellspacing="0" background-color:#CCCCCC "><!--content table -->
                            <tr>
                                <td bgcolor=" #ffffff " valign=" top" height="150px" width="100%" margin-top="0px" border="0px" align-top="0px"><!--center -->
							<div id="pagetitle" padding-left="89"><!--enstanceBeginEditable name="pagetitle" --><b>View detail , Edit , Activate, Deactivate and Delete Residents.<br> </b><!--enstanceEndEditable --></div>
							</br>
							<div id="contentarea1">
								<table border='1' style='width:100%; height:300px;border:1px solid black;border-radius:10px;' align='left'>
									<tr>
										<th>Password</th>
										<th>User Name</th>
										<th>View<br>Detail</th>
										<th>Edit</th>
										<th>Activate <br>(Deactivate)</th>
										<th>Delete</th>
									</tr>
									<?php

									$result = mysqli_query($conn, "SELECT * FROM user");
									while ($row = mysqli_fetch_array($result)) {
										$ctrl = $row['Username'];
										$account = $row['Password'];
										$Username = $row['Username'];
										$status = $row['status'];
									?>
										<tr>
											<td><?php echo $account; ?></td>
											<td><?php echo $ctrl; ?></td>
											<td align='center' width='1'><a href='viewuserdetail.php?key=<?php echo $ctrl; ?>'><img width='25' height='23' src='https://www.facebook.com/photo/?fbid=770433641805101&set=pcb.770434608471671' title='View Detail'></img></a></td>

											<td><a href='edituser.php?key=<?php echo $ctrl; ?>'><img src='image/edit.jpg' width='32' height='32' title='Edit'></img></a></td>

											<td><?php
												if (($status) == '0') {
												?>
													<a href="status.php?status=<?php echo $row['Username']; ?>" onClick="return confirm('Really you activate (<?php echo $Username ?>)');">
														<img src="image/deactivate.png" id="view" width="16" height="16" />Deactivated </a>
												<?php
												}
												if (($status) == '1') {
												?>
													<a href="status.php?status=<?php echo $row['Username']; ?>" onClick="return confirm('Really you De-activate (<?php echo $Username ?>)');">
														<img src="image/activate.png" width="16" id="view" height="16" />Activated</a>
												<?php
												}
												?>
											</td>
											<td><a href='deleteuser.php?key=<?php echo $ctrl; ?>'><img src='image/Delete.png' width='32' height='32' title='Delete'></img></a></td>
										</tr>
									<?php
									}
									print("</table>");
									mysqli_close($conn);
									?>
							</div>
							</td><!--center end-->
							</td>
		</tr>
	</table>
	</div>
	<td width="50" height="100" valign="top">

		<table border="0" bgcolor="white" width="257" height="300" cellspacing="0" cellpadding="5">
			<tr>
				<td bgcolor="white" align="right">
					<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="57" height="50"></a>
				</td>
			</tr>
			<tr>
				<td align="right"><b> Facebook</b></td>
			</tr>
			<tr>
				<td align="right"><a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="57" height="50"></a></td>
			</tr>
			<tr>
				<td align="right"> <b>Google</b></td>
			</tr>
			<tr>
				<td align="right">
					<a href="https://www.facebook.com/visitKembata/posts/durame-a-city-flourishing-at-the-intersection-of-progress-and-natures-beauty-har/770434608471671/" target="_blank"><img src="image/twitter.gif" title="Twitter" width="57" height="60"></a>
				</td>
			</tr>
			<tr>
				<td align="right"><b> Twiter</td></b>
			</tr>
			<tr>
				<td align="right">
					<a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="57" height="60"></a>
				</td>
			</tr>
			<tr>
				<td align="right"><b>Youtube</b></td>
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
			<table border="0" align="center" width="82%" bgcolor="#CCCCCC" cellspacing="0">
				<tr>
					<td align="='center'">
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