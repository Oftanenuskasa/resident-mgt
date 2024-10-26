<?php
//session_start();
session_destroy();
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
		body,
		td,
		th {
			color: #000000;
		}

		body {
			background-color: #eee;
			margin-left: 140px;
			margin-right: 50px;
		}
	</style>
</head>

<body onload="parent.member()" onload="noBack();" onpageshow="if(event.persisted) noBack();">
	<br>
	<table border="0" width="92.8%" cellspacing="0">
		<tr>
			<td colspan="3"><img src="image/f.gif" width="15%" height="150"><img src="image/dk.jpg" width="70%" height="150"><img src="image/Flag_of_Southern_Ethiopia.png" width="15%" height="150"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<font size="2.75">
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li><b><a href="home.php"><em>Home</em></a></li>
					<li><b><a href="services.php"><em>Service</em></a></li>
					<li><a href="about.php"><em>About us </em></a></li>
					<li><a href="contact.php"><em>Contact us </em></a></li>
					<li><a href="#"><em>Advertisment</em></a></li>
				</font>
				<li><a href="help.php"><em>Help</em></a></li>
				<li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li>
					<font size="2.75"><a href="register.php"><em><strong>New register</strong></em></a>
				</li>
				<li>
					<font size="2.75"><a href="tologin.php"><em><strong>Login</em></strong></em></a>
				</li>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="white" cellspacing="0" id="mele">
					<tr>
						<td width="50" height="100" valign="top">
							<table border="0" width="50" cellspacing="0">
								<tr>
									<td><img src="image/df.jpg" width="250" height="200" name="parent" /></td>
								</tr>
								<tr>
									<td bgcolor="grean" height="10" align="right"><strong>
											<font color='blue'>Calender</font>
										</strong>
										</ td>
								</tr>

								<tr>
									<td bgcolor="#FFFFFF">
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
						<td width="900" height="400" valign="top" bgcolor="white"><br><br>

							<HTML>
							<html lang="en-US" xml:lang="en-US" xmlns="" />

							<head>
							</head>

							<body>
								<center>
									<table style="margin-top:-12px" width="500px" border="0" color:#c0c0c0" cellpadding="0" cellspacing="0" background-color:white ">
                                        <!--content table -->
                                        <tr>
                                            <td valign=" top" align="left" bgcolor="#FFFFFF" width="380px" height="150px" r><!--center -->

										<div id="mainContent">
											<div id="pagetitle">
												<b>
													<table>
														<tr>
															<td width='480px' height='60px' bgcolor="#eee" align='right'>
																<i>
																	<font color="#0033FF" size="5">login</font>
																</i><img src="image/login.jpg" width="100px" height="70px">
															</td>
														</tr>
													</table>
												</b>
											</div>
											<div id="mainContent1">
												<br>

												<div id="middletxt">
													<form action="tologin.php" method="post" name="frm_login" id="frm_login">
														<table border='0' style='width:500px; height:250px;border:0px solid black;border-radius:0px;' align='center'>

															<td height="22" width="450px">
																<table width="400px" border=0>

																	<tr>
																		<td width="30" height="37">
																			<div align="left"><strong>
																					<font color="#FF0000" size="+3">
																					</font>Position:
																				</strong></div>
																		</td>
																		<td align="left">
																			<font color="#003399">
																				<select id='acc_type' name="acc_type" style="width:200px;height:30px;">
																					<option>...Select Role...</option>
																					<option>chairman</option>
																					<option>Record Officer</option>
																					<option>Administrator</option>
																					<option>Resident</option>
																			</font>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<td width="90" height="37">
																			<div align="left"><strong>
																					<font color="red"></font>Username :
																				</strong></div>
																		</td>

																		<td width="200"><input type="textbox" name="txt_userid" id="txt_userid" maxlength="22" style="border:1px #480000 solid;width:200px;height:25px;background:#FFFFFF;border-radius:5px;" placeholder="Enter Username" /></td>
																	</tr>
																	<tr>
																		<td width="90" height="37">
																			<div align="left"><strong>
																					<font color="#FF0000"></font>
																					Password :
																				</strong></div>
																		</td>
																		<td width="200"><input type="password" name="txt_password" id="txt_password" maxlength="22" style="border:1px #480000 solid;width:200px;height:25px;background:#FFFFFF;border-radius:5px;" placeholder="Enter password" /></td>
																	</tr>
																	<tr>
																		<center>
																			<td colspan="3" align="left">
																				<input type="submit" id="submitMain" name="submitMain" value="Login" title="Click here to login" Onclick="return check(this.form);" />
																				<input type="reset" value=" Clear " onClick='focusReset()' title="Click here to clear the text box" />
																		</center>
															</td>
					</tr>
			</td>
	</table>
	</tr>
	</table>
	</form>

	<?php
	if (isset($_POST['submitMain'])) {

		$account_type = $_POST['acc_type'];
		$userid = $_POST['txt_userid'];
		$_SESSION['txt_userid'] = $userid;
		$password = $_POST['txt_password'];
		$query = "SELECT * FROM user WHERE Position = '{$account_type}' AND Username = '{$userid}' AND Password = '{$password}' ;";
		$result_set = mysqli_query($con, $query);
		if (!$result_set) {
			die("query is failed" . mysqli_error($con));
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
					header("Location: ../Admin_page/admin.php");
					exit();
				} else if ($account_type == "vital_registrar") {
					$_SESSION['Username'] = $row['Username'];
					echo "<script>window.location='vital_registrar.php';</script>";
				} else if ($account_type == "Resident") {
					$_SESSION['Username'] = $row['Username'];
					echo "<script>window.location='resident.php';</script>";
				}
			} else {
				echo '<div align="center"><strong><font color="red"> Account Type, User Name & Password not match !!</font></Strong></div>';
			}
		}
	}
	?>

	</div>
	</div>
	</div>

	</td>
	</tr>
	</table>
	</center>
</body>

</html>

</td>
<td width="40" height="100" valign="top">
	<table border="0" bgcolor="white" width="250" height="436" cellspacing="0" cellpadding="5">
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
				<a href="http://twitter.com/" target="_blank"><img src="image/twitter.gif" title="Twitter" width="57" height="60"></a>
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
			<tr>
				<td>
		</table>
	</td>
</tr>
</table>
</body>

</html>