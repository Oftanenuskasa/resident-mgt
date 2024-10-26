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
$ful = $fname . " " . $mname;
?>
<script language="javascript" src="datetimepicker.js"></script>
<script type='text/javascript'>
	function formValidation() {
		//assign the fields
		var id = document.getElementById('id');
		var kebeleid = document.getElementById('kid');
		var placeofdeath = document.getElementById('pod');
		var placeofgrave = document.getElementById('pog');
		var reasonofdeath = document.getElementById('rod');
		var age = document.getElementById('age');
		var job = document.getElementById('job');
		var date = document.getElementById('date');
		var registration = document.getElementById('register');

		// Check your input in the order that it appears in the form!
		if (isAlphanumeric(id, "Please enter your valid id in number and alphabet")) {
			if (lengthRestriction(id, 1, 20, "for your first id")) {
				if (isAlphanumeric(kid, "Please enter your valid id number in number and alphabet")) {
					if (lengthRestriction(kid, 1, 20, "for your id number")) {
						if (isAlphanumeric(pod, "Please enter your valid place of death in number and alphabet")) {
							if (lengthRestriction(pod, 1, 20, "for your place of death")) {
								if (isAlphanumeric(pog, "Please enter your valid place of grave in number and alphabet")) {
									if (lengthRestriction(pog, 1, 20, "for your  place of grave")) {
										if (isAlphabet(rod, "please fill your reason of death letters only")) {
											if (lengthRestriction(rod, 3, 25, "for your reason of death")) {
												if (isNumeric(age, "Please enter only number for your age")) {
													if (isAlphabet(kebel, "Please enter your valid Kebele in number")) {
														if (madeSelection(job, "Please Choose a Job")) {

															return true;
														}
													}
												}
											}
										}
									}
								}
							}
						}

					}
				}
			}
		}
		return false;

	}

	function isAlphabet(elem, helperMsg) {
		var alphaExp = /^[a-zA-Z]+$/;
		if (elem.value.match(alphaExp)) {
			return true;
		} else {
			alert(helperMsg);
			elem.focus();
			return false;
		}
	}

	function phoneValidator(elem, helperMsg) {
		var phoneExp = /^\d{3}\d{3}\d{4}$/;
		if (elem.value.match(phoneExp)) {
			return true;
		} else {
			alert(helperMsg);
			elem.focus();
			return false;
		}
	}

	function lengthRestriction(elem, min, max, helperMsg) {
		var uInput = elem.value;
		if (uInput.length >= min && uInput.length <= max) {
			return true;
		} else {
			alert("Please enter between " + min + " and " + max + " characters" + helperMsg);
			elem.focus();
			return false;
		}
	}


	function ageRestriction(elem) {
		var max = "1130";
		var min = "15";
		if (elem.value < 18 || elem.value > 120) {
			alert("enter valid age");
			elem.focus();
			return false;
		} else {
			return true;
		}
	}

	function notEmpty(elem, helperMsg) {
		if (elem.value.length == 0) {
			alert(helperMsg);
			elem.focus();
			return false;
		}
		return true;
	}

	function isNumeric(elem, helperMsg) {
		var numericExpression = /^[0-9,-,/]+$/;
		if (elem.value.match(numericExpression)) {
			return true;
		} else {
			alert(helperMsg);
			elem.focus();
			return false;
		}
	}

	function isAlphanumeric(elem, helperMsg) {
		var alphaExp = /^[0-9a-zA-Z /]+$/;
		if (elem.value.match(alphaExp)) {
			return true;
		} else {
			alert(helperMsg);
			elem.focus();
			return false;
		}
	}

	function madeSelection(elem, helperMsg) {
		if (elem.value == "select...") {
			alert(helperMsg);
			elem.focus();
			return false;
		} else {
			return true;

		}
	}
</script>
<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script type="text/javascript">
		if (document.images) { // Preloaded images
			demo1 = new Image();
			demo1.src = "A.jpg";
			demo2 = new Image();
			demo2.src = "1.jpg";
			demo3 = new Image();
			demo3.src = "2.jpg";
			demo4 = new Image();
			demo4.src = "3.jpg";
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
</head>

<body onLoad="timeimgs('1');">
	<br>
	<table border="0" width="92.8%" cellspacing="0">
		<tr>
		<td colspan="3"><img src="image/f.gif" width="15%" height="150"><img src="image/dk.jpg" width="70%" height="150"><img src="image/Flag_of_Southern_Ethiopia.png" width="15%" height="150"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li><b><a href="officer.php"><em><b>Home</b></em></a></li>
				<li><a href="#"><em>Register</em></a>
					<ul class="sub1">
						<li><a href="population.php"><b><i>Population</i></b></a></li>
						<li><a href="house.php"><b><i>House</i></b></a></li>
						<li><a href="death.php"><b><i>Death resident</i></b></a></li>
						<li><a href="birth.php"><b><i>Birth resident</i></b></a></li>

					</ul>
				</li>
				<li><a href="#"><em>Generate report</em></a>
					<ul class="sub1">
						<li><a href="populationreport.php"><b><i>Population report</i></b></a></li>
						<li><a href="housereport.php"><b><i>House report</i></b></a></li>
					</ul>
				</li>
				<li><a href="#"><em>Count</em></a>
					<ul class="sub1">
						<li><a href="generate.php"><b><i> Count Population</i></b></a></li>
						<li><a href="counthouse.php"><b><i>Count house</i></b></a></li>

					</ul>
				</li>
				<li><a href="record_changepass.php"><b>Change password</b></a></li>
				<li><em><a href="officer_renewrequset.php"><b>Rnew requset </b></a></em></li>

				<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				<li>
					<b>You are logged as&nbsp;
						<font color='blue'><?php echo $ful; ?></font>
					</b>
				</li>
				<li><a href="Logout.php"><em>(Logout)</em></a></li>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="#CCCCCC" cellspacing="0">
					<tr>
						<td width="250" height="520" valign="top">
							<table border="0" width="249" cellspacing="0">
								<tr>
									<td width="314" id="topnav">
										<li><em><a href="viewpop.php"><b>View population </b></a></em></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><em><a href="viewcomment.php"><b>View comment </b></a></em></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><em><a href="viewhouse.php"><b>View house </b></a></em></li>
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
		<table>
			<tr>
				<td>
					<div align="center"><b><i>Birth Registration form</i></b></div>
					<hr />
					<fieldset>
						<legend align="center">
							<div class="legend"><b>Please fill the space provid below</b></div>
						</legend>
						<br>
						<div>
							<form onsubmit='return formValidation()' action='birth.php' method='POST'>
								<table width="500">
									<tr>
										<td>
											<font color="red"></font>Bith Id :
										</td>
										<td><input type="text" size="20px" id='id' name='id' placeholder="Enter Id number..."></td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>Father fulname:
										</td>
										<td><input type="text" size="20px" id='ffname' name='ffname' placeholder="Enter fulname..."></td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>Mother fulname :
										</td>
										<td><input type="text" size="20px" id='mfname' name='mfname' pattern="\D{3,12}" placeholder="Enter fulname..."></td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>First name :
										</td>
										<td><input type="text" size="20px" id='fname' name='fname' pattern="\D{3,12}" placeholder="Enter firstname..."></td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>Middle name :
										</td>
										<td><input type="text" size="20px" id='mname' name='mname' pattern="\D{3,12}" placeholder="Enter middlname..."></td>
									</tr>
									<tr>
										<td>
											<font color="red">*</font>Last name :
										</td>
										<td><input type="text" size="20px" id='lname' name='lname' pattern="\D{3,12}" placeholder="Enter lastname..."></td>
									</tr>

									<tr>
										<td>
											<font color="red"></font>Age :
										</td>
										<td><input type="text" size="20px" id='age' name='age' pattern="\d{1,3}" placeholder="Enter Age..."></td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>Sex :
										</td>
										<td><input type="radio" name="gender" id="optionsRadios1" value="Male" checked>
											Male<input type="radio" name="gender" id="optionsRadios2" value="Female" checked>
											Female
										</td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>Place of birth:
										</td>
										<td><label>
												<select name="place" id="place">
													<option>..please chose...</option>
													<option>maraki</option>
												</select>
											</label></td>
									</tr>
									<tr>
										<td>
											<font color="red"></font>Date Of Birth :
										</td>
										<td><input type="date" size="15px" id='date' name='date' class="mine_text_field_7" required />

									</tr>

									<tr>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td><input type='submit' value='Save' name='birth' onClick="return check(this.form);" />
											<input type='reset' value='clear'>
										</td>
									</tr>
								</table>
							</form>
						</div>
					</fieldset>
					<hr />
					<?php
					if (isset($_POST['birth'])) {
						if (!$conn) {
							die('Could not connect: ' . mysqli_error($conn));
						}

						mysqli_select_db($conn,"resident");
						$sql = "INSERT INTO birth (brid,fatherfulname,motherfulname,firstname,middlname,lastname,age,sex,placeofbirth,date,register)
VALUES ('$_POST[id]','$_POST[ffname]','$_POST[mfname]','$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[age]','$_POST[gender]','$_POST[place]','$_POST[date]','$_POST[register]')";
						if (!mysqli_query($conn,$sql)) {
							die('Error: ' . mysqli_error($conn));
						} else {
							echo "1 record added";
						}
					}
					mysqli_close($conn)
					?>

				</td>
			</tr>
		</table>
		</td>

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
					<a href="http://twitter.com" target="_blank"><img src="image/twitter.gif" title="Twitter" width="57" height="60"></a>
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
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>
			<tr>
				<td align="right"><b></b></td>
			</tr>
			</tr>

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