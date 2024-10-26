<?php
session_start();
error_reporting(0);
include "config.php";
?>
<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script type="text/JavaScript">

		var count = 0;
  function member() {
    if (parent.count ==0) {
       document.parent.src = "image/df.jpg";
	 title="evahotel build";
       count = 1;
    }
     else if (parent.count ==1) {

       document.parent.src = "image/dg.jpg";
       count = 2;
    }
 else if(parent.count ==2) {
       document.parent.src = "image/dh.jpg";
       count = 3;
    }
 else {
 document.parent.src = "image/dj.jpg";
       count = 0;

}
    setTimeout("member()", 3000);
  }
</script>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style type="text/css">
		<!--
		body {
                background: url(image/backgr.avif) repeat;
                margin-left: 300px;
            }
		-->
	</style>
	<title>Durame city resident record managemnet system</title>
</head>

<body onload="parent.member()" onload="noBack();" onpageshow="if(event.persisted) noBack(); ">
	<br>
	<table border="0" border-clolor:#eee width="92.8%" cellspacing="0">
		<tr>
		<td colspan="3"><img src="image/f.gif" width="15%" height="150"><img src="image/dk.jpg" width="70%" height="150"><img src="image/Flag_of_Southern_Ethiopia.png" width="15%" height="150"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<font size="2.75">
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					</li>
					<li><b><a href="home.php"><em><img src="image/home.PNG" width="20" height="20">Home</em></a></li>
					<li><b><a href="services.php"><img src="image/bel/se.jpg" width="20" height="20"><em>Service</em></a></li>
					<li><a href="about.php"><img src="image/bel/a.jpg" width="20" height="20"><em>About us </em></a></li>
					<li><a href="contact.php"><img src="image/ph.jpg" width="20" height="20"><em>Contact us </em></a></li>
					<li><a href="help.php"><em><img src="image/bel/im.png" width="20" height="20">Help</em></a></li>
					<li>
						<?php
						$a = date('Y-m-d', strtotime($date . '- 7 days'));
						$b = date('Y-m-d');
						$sql = "SELECT * FROM `newnoti` WHERE date BETWEEN '$a' AND '$b'";
						$res = mysqli_query($conn,$sql);
						$con = mysqli_num_rows($res);
						?>
					<li>
						<font size="2.75"><a href="register_noti.php"><img src="image/mail.png" width="20" height="20"><em><strong>Dashboard<font color='red'>(<?php echo $con; ?>)</font></strong></em></a>
					</li>
					<li>
						<font size="2.75"><a href="register.php"><em><strong><img src="image/bel/reg.jpg" width="20" height="20">New register</strong></em></a>
					</li>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="#F0F8FF" cellspacing="0" id="mele">
					<tr>
						<td width=252 height="500" valign="top">
							<table border="0" width="50" cellspacing="0">
								<tr>
									<td><img src="pic/DSC06368.jpg" width="250" height="200" name="parent" /></td>
								</tr>
								<tr>
									<td bgcolor="grean" height="10" align="right"><strong>
											<font color='blue'><b>Calender<b>
										</strong></font>
									</td>
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
						<td width="100%" height="380" valign="top" bgcolor="WHITE"><br>
							<?php

							$a = date('Y-m-d', strtotime($date . '- 7 days'));
							$b = date('Y-m-d');
							$sql = "SELECT * FROM `newnoti` WHERE date BETWEEN '$a' AND '$b'";
							$res = mysqli_query($conn,$sql);
							$con = mysqli_num_rows($res);
							if ($con > 0) {
								echo "<h4 style='width:550px;height:40px;background:brown;'><font color='white'>You have <font color=''> " . $con . "</font> new notifcation for responce to registration request.</font></h4>";

								echo "<table border=0 >";

								$i = 1;
								while ($row = mysqli_fetch_array($res)) {
									$co = $row['id'];

									$content = $row['purpose'];
									$acc = $row['send'];
									$send = $row['Sender_name'];
									$da = $row['date'];
									echo "<tr><td colspan='4'><h3 align='center'><font color='blue'>Notifcation (" . $i . ")</font></h3></td></tr>";
									echo "<tr><th>From</th><th>applicant code</th><th>Content</th><th colspan=3 width=10%>  date</th></tr>";
									echo "<tr><td width=10% align='center'> $send </td><td width=15% bgcolor='#eee'>$co </td><td width=60%>$content  </td>" .

										"<td width=10% align = 'center' > $da</td></tr>";
									$i = $i + 1;
								}
								echo "</table>";
							} else {
								echo "<h4>............................................................................................................</h4>";
								echo "<h4><font color='red'>You have no new notifcation for approval of register</font></h4>";
								echo "<h4>.......................................................................................................</h4>";
							}

							?>

							</pre>
							</th>
						<td width="100%" height="400" valign="top">
							<table border="0" bgcolor="white" width="257" height="490" cellspacing="0" cellpadding="5">
								<form action="home.php" method="post" name="frm_login" id="frm_login">
									<tr>
										<td bgcolor="#708090" colspan="3"><img src="image/login.png" width="25"> Login</td>
									</tr>
									<tr>
										<td bgcolor="white" align="left">
											Role</td>
										<td><select id='acc_type' name="acc_type" style="width:160px; height:30px;background:#eee; " margin-left="2px" required="">

												<option>Select Role</option>
												<option>chairman</option>
												<option>Record Officer</option>
												<option>Administrator</option>
												<option>Resident</option>
												</font>

											</select></td>
									</tr>
									<tr>
										<td align="left">Username</td>
										<td><input type="textbox" name="txt_userid" id="txt_userid" maxlength="22" style="border:1px #480000 solid;width:160px;height:30px;background:#eee;border-radius:5px;" placeholder="Enter Username" required="" /></td>
									</tr>
									<tr>
										<td align="left">Password</td>
										<td><input type="password" name="txt_password" id="txt_password" maxlength="22" style="border:1px #480000 solid;width:160px;height:30px;background:#eee;border-radius:5px;" placeholder="Enter password" required="" /></td>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" id="submitMain" name="submitMain" value="Login" title="Click here to login" Onclick="return check(this.form);" style="width: 70;height: 30;background: #eee" />

						</td>
					</tr>
					<tr>
						<td align="center" colspan="3"><a href="reset.php"><em><b>
										<font color="blue">Forget Password</font></em></a></td>
					</tr>
					</form>
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


					<?php
					if (isset($_POST['submitMain'])) {

						$account_type = $_POST['acc_type'];
						$userid = $_POST['txt_userid'];
						$_SESSION['txt_userid'] = $userid;
						$password = md5($_POST['txt_password']);
						$query = "SELECT * FROM user WHERE Position = '{$account_type}' AND Username = '{$userid}' AND Password = '{$password}' ;";
						$result_set = mysqli_query($conn,$query);
						if (!$result_set) {
							die("query is failed" . mysqli_error($conn));
						}
						$row = mysqli_fetch_array($result_set);
						$stat = $row['status'];
						if (mysqli_num_rows($result_set) > 0) {
							if ($stat == 1) {
								if ($account_type == "chairman") {
									$_SESSION['Username'] = $row['Username'];
									echo "<script>window.location='charman.php';</script>";
								} else if ($account_type == "Record Officer") {
									$_SESSION['Username'] = $row['Username'];
									echo "<script>window.location='officer.php';</script>";
								} else if ($account_type == "Administrator") {
									$_SESSION['Username'] = $row['Username'];
									echo "<script>window.location='admin.php';</script>";
								} else if ($account_type == "vital_registrar") {
									$_SESSION['Username'] = $row['Username'];
									echo "<script>window.location='vital_registrar.php';</script>";
								} else if ($account_type == "Resident") {
									$_SESSION['Username'] = $row['Username'];
									echo "<script>window.location='resident.php';</script>";
								}
								//else 
								//{
								//$_SESSION['validuser']=$user;
								//echo "<script>window.location='#.php';</script>";
								//}
							} else {
								print "<img src='IMG/info.jpg' align='center' width='35px' height='25px'><I><font face='arial' color='red' size='3'> Your Account is Deactivated Please Contact the Administrator !!</font></I>";
							}
						} else {
							echo '<div align="center"><strong><font color="red"> Account Type, User Name & Password not match !!</font></Strong></div>';
						}
					}


					?>
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
		</tr>
	</table>
	</td>
	</tr>
	<tr>
		<td colspan="3" height="25">
			<table border="0" align="center" width="100%" bgcolor="#CCCCCC" cellspacing="0">
				<tr>
					<td align="center">
						<font face="Times New Roman" color="black"><b>DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b></font>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
</body>

</html>