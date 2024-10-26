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
						<td width="250" height="680" valign="top">
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
			function showDiv(prefix, chooser) {
				for (var i = 0; i < chooser.options.length; i++) {
					var div = document.getElementById(prefix + chooser.options[i].value);
					div.style.display = 'none';
				}

				var selectedOption = (chooser.options[chooser.selectedIndex].value);
				if (selectedOption == "1") {
					displayDiv(prefix, "1");
				}
				if (selectedOption == "2") {
					displayDiv(prefix, "2");
				}
				if (selectedOption == "3") {
					displayDiv(prefix, "3");
				}
				if (selectedOption == "4") {
					displayDiv(prefix, "4");
				}
				if (selectedOption == "5") {
					displayDiv(prefix, "5");
				}
			}

			function displayDiv(prefix, suffix) {
				var div = document.getElementById(prefix + suffix);
				div.style.display = 'block';
			}
		</script>
		<div style="margin-left:80%; width:50px;  text-align:center;"> <a href="javascript:Clickheretoprint()"><img src="image/DPIC_36483.jpg" /></a></div>

		<table id="contentbox" border="1" width="100%">
			<tr>
				<td>
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

					<div id="print_content">
						<div align="center" style="margin-top:10px;"><strong><img src="image/p.jpg" width="100%" height="80" align="center">
								<p align='center'><strong>The number of resident(population) in durame city.
									</strong></div>
						</p>

						<?php

						//$level=$_POST['searchtype'];
						//$salary=$_POST['searchterm'];

						@$db = new mysqli('localhost', 'root', 'nasis', 'resident');
						if (mysqli_connect_errno()) {
							echo 'Error: Could not connect to database. Please try again later.';
							exit;
						}
						$p = "Farmer";
						$dip = "Doctor";
						$deg = "Phd";
						$Mas = "Master";
						$doc = "Teacher";
						$ner = "Student";
						$ab = "Other";
						$m = "Male";
						$f = "Female";


						$mdeathdoc = "SELECT* FROM death where job='" . $doc . "' AND sex='" . $m . "'";
						$mdocdathres = @$db->query($mdeathdoc);
						$mdocdathnum_results = $mdocdathres->num_rows;
						$mdocquery = "SELECT* FROM population where Job='" . $doc . "' AND Sex='" . $m . "'";
						$mdocres = @$db->query($mdocquery);
						$mdocnum_results = $mdocres->num_rows;
						$cl = "SELECT* FROM clearance where job='" . $doc . "' AND Sex='" . $m . "'";
						$mcera = @$db->query($cl);
						$mcera_results = $mcera->num_rows;
						$mteacher = $mdocnum_results - $mcera_results - $mdocdathnum_results; // total male techer

						$fdocquery = "SELECT* FROM population where Job='" . $doc . "' AND Sex='" . $f . "'";
						$fdocres = @$db->query($fdocquery);
						$fdocnum_results = $fdocres->num_rows;
						$cl = "SELECT* FROM clearance where job='" . $doc . "' AND Sex='" . $f . "'";
						$fcera = @$db->query($cl);
						$fcera_results = $fcera->num_rows;
						$fdeathdoc = "SELECT* FROM death where job='" . $doc . "' AND sex='" . $f . "'";
						$fdocdathres = @$db->query($fdeathdoc);
						$fdocdathnum_results = $fdocdathres->num_rows;
						$fteacher = $fdocnum_results - $fcera_results - $$fdocdathnum_results; //final resulet of female techer

						$mnerquery = "SELECT* FROM population where Job='" . $ner . "' AND Sex='" . $m . "'";
						$mnerres = @$db->query($mnerquery);
						$mnernum_results = $mnerres->num_rows;
						$malecle = "SELECT* FROM clearance where job='" . $ner . "' AND Sex='" . $m . "'"; //count clerance
						$mcle = @$db->query($malecle);
						$resu = $mcle->num_rows;
						$mdeathner = "SELECT* FROM death where job='" . $ner . "' AND sex='" . $m . "'";
						$mnerdathres = @$db->query($mdeathner);
						$mnerdathnum_results = $mnerdathres->num_rows;
						$result = $mnernum_results - $resu - $mnerdathnum_results; //total male studentfinal resulet
						$fnerquery = "SELECT* FROM population where Job='" . $ner . "' AND Sex='" . $f . "'";
						$fnerres = @$db->query($fnerquery);
						$fnernum_results = $fnerres->num_rows;
						$fstucl = "SELECT* FROM clearance where job='" . $ner . "' AND Sex='" . $f . "'";
						$fstucera = @$db->query($fstucl);
						$fstucera_results = $fstucera->num_rows;
						$fdeathner = "SELECT* FROM death where job='" . $ner . "' AND sex='" . $f . "'";
						$fnerdathres = @$db->query($fdeathner);
						$fnerdathnum_results = $fnerdathres->num_rows;
						$fstu = $fnernum_results - $fstucera_results - $fnerdathnum_results; //female total student//final result
						$mp = "SELECT* FROM population where Job='" . $p . "' AND Sex='" . $m . "'";
						$mpres = @$db->query($mp);
						$mpnum_results = $mpres->num_rows;
						$mdecl = "SELECT* FROM clearance where job='" . $p . "' AND Sex='" . $m . "'";
						$mdecera = @$db->query($mdecl);
						$mdecera_results = $mdecera->num_rows;
						$mdeathp = "SELECT* FROM death where job='" . $p . "' AND sex='" . $m . "'";
						$mpdathres = @$db->query($mdeathp);
						$mpdathnum_results = $mpdathres->num_rows;
						$mde = $mpnum_results - $mdecera_results - $mpdathnum_results; //final resulet

						$fpquery = "SELECT* FROM population where Job='" . $p . "' AND Sex='" . $f . "'";
						$fpres = @$db->query($fpquery);
						$fpnum_results = $fpres->num_rows;
						$fdecl = "SELECT* FROM clearance where job='" . $p . "' AND Sex='" . $f . "'";
						$fdecera = @$db->query($fdecl);
						$fdecera_results = $fdecera->num_rows;
						$fdeathp = "SELECT* FROM death where job='" . $p . "' AND sex='" . $f . "'";
						$fpdathres = @$db->query($fdeathp);
						$fpdathnum_results = $fpdathres->num_rows;
						$fde = $fpnum_results - $fdecera_results - $fpdathnum_results; // total final resulet
						$mdegquery = "SELECT* FROM population where Job='" . $deg . "' AND Sex='" . $m . "'";
						$mdegres = @$db->query($mdegquery);
						$mdegnum_results = $mdegres->num_rows;
						$mbsccl = "SELECT* FROM clearance where job='" . $deg . "' AND Sex='" . $m . "'";
						$mbaccera = @$db->query($mbsccl);
						$mbsccera_results = $mbaccera->num_rows;
						$mdeathdeg = "SELECT* FROM death where job='" . $deg . "' AND sex='" . $m . "'";
						$mdegdathres = @$db->query($mdeathdeg);
						$mdegdathnum_results = $mdegdathres->num_rows;
						$mbsc = $mdegnum_results - $mbsccera_results - $mdegdathnum_results; //final result

						$fdegquery = "SELECT* FROM population where Job='" . $deg . "' AND Sex='" . $f . "'";
						$fdegres = @$db->query($fdegquery);
						$fdegnum_results = $fdegres->num_rows;
						$fbsccl = "SELECT* FROM clearance where job='" . $deg . "' AND Sex='" . $f . "'";
						$fbaccera = @$db->query($fbsccl);
						$fbsccera_results = $fbaccera->num_rows;
						$fdeathdeg = "SELECT* FROM death where job='" . $deg . "' AND sex='" . $f . "'";
						$fdegdathres = @$db->query($fdeathdeg);
						$fdegdathnum_results = $fdegdathres->num_rows;
						$fbsc = $fdegnum_results - $fbsccera_results - $fdegdathnum_results; //final result

						$mMasquery = "SELECT* FROM population where Job='" . $Mas . "' AND Sex='" . $m . "'";
						$mMasres = @$db->query($mMasquery);
						$mMasnum_results = $mMasres->num_rows;
						$mmascl = "SELECT* FROM clearance where job='" . $Mas . "' AND Sex='" . $m . "'";
						$mmascera = @$db->query($mmascl);
						$mmascera_results = $mmascera->num_rows;
						$mdeathmas = "SELECT* FROM death where job='" . $Mas . "' AND sex='" . $m . "'";
						$mmasdathres = @$db->query($mdeathmas);
						$mmasdathnum_results = $mmasdathres->num_rows;
						$mmas = $mMasnum_results - $mmascera_results - $mmasdathnum_results; //final result

						$fMasquery = "SELECT* FROM population where Job='" . $Mas . "' AND Sex='" . $f . "'";
						$fMasres = @$db->query($fMasquery);
						$fMasnum_results = $fMasres->num_rows;
						$fmascl = "SELECT* FROM clearance where job='" . $Mas . "' AND Sex='" . $f . "'";
						$fmascera = @$db->query($fmascl);
						$fmascera_results = $fmascera->num_rows;
						$fdeathmas = "SELECT* FROM death where job='" . $Mas . "' AND sex='" . $f . "'";
						$fmasdathres = @$db->query($fdeathmas);
						$fmasdathnum_results = $fmasdathres->num_rows;
						$fmas = $fMasnum_results - $fmascera_results - $fmasdathnum_results; //final result
						$fM = "SELECT* FROM population where Job='" . $ab . "' AND Sex='" . $m . "'";
						$fMa = @$db->query($fM);
						$fabnum_results = $fMa->num_rows;
						$mabcl = "SELECT* FROM clearance where job='" . $ab . "' AND Sex='" . $m . "'";
						$mabcera = @$db->query($mabcl);
						$mabcera_results = $mabcera->num_rows;
						$mdeathab = "SELECT* FROM death where job='" . $ab . "' AND sex='" . $m . "'";
						$mabdathres = @$db->query($mdeathab);
						$mabdathnum_results = $mabdathres->num_rows;
						$mab = $fabnum_results - $mabcera_results - $mabdathnum_results; //final result
						$mM = "SELECT* FROM population where Job='" . $ab . "' AND Sex='" . $f . "'";
						$mMa = @$db->query($mM);
						$mabnum_results = $mMa->num_rows;
						$fabcl = "SELECT* FROM clearance where job='" . $ab . "' AND Sex='" . $f . "'";
						$fabcera = @$db->query($fabcl);
						$fabcera_results = $fabcera->num_rows;
						$fdeathab = "SELECT* FROM death where job='" . $ab . "' AND sex='" . $f . "'";
						$fabdathres = @$db->query($fdeathab);
						$fabdathnum_results = $fabdathres->num_rows;
						$fab = $mabnum_results - $fabcera_results - $fabdathnum_results; //final result
						$mdipquery = "SELECT* FROM population where Job='" . $dip . "' AND Sex='" . $m . "'";
						$mdipres = @$db->query($mdipquery);
						$mdipnum_results = $mdipres->num_rows;
						$mdipcl = "SELECT* FROM clearance where job='" . $dip . "' AND Sex='" . $m . "'";
						$mdipcera = @$db->query($mdipcl);
						$mdipcera_results = $mdipcera->num_rows;
						$mdeathdip = "SELECT* FROM death where job='" . $dip . "' AND sex='" . $m . "'";
						$mdipdathres = @$db->query($mdeathdip);
						$mdipdathnum_results = $mdipdathres->num_rows;
						$mdip = $mdipnum_results - $mdipcera_results - $mdipdathnum_results; //final result
						$fdipquery = "SELECT* FROM population where Job='" . $dip . "' AND Sex='" . $f . "'";
						$fdipres = @$db->query($fdipquery);
						$fdipnum_results = $fdipres->num_rows;
						$fdipcl = "SELECT* FROM clearance where job='" . $dip . "' AND Sex='" . $f . "'";
						$fdipcera = @$db->query($fdipcl);
						$fdipcera_results = $fdipcera->num_rows;
						$fdeathdip = "SELECT* FROM death where job='" . $dip . "' AND sex='" . $f . "'";
						$fdipdathres = @$db->query($fdeathdip);
						$fdipdathnum_results = $fdipdathres->num_rows;
						$fdip = $fdipnum_results - $fdipcera_results - $fdipdathnum_results; //final result
						$mbirth = "SELECT* FROM birth where sex='" . $m . "'";
						$mbirthre = @$db->query($mbirth);
						$mbirthresult = $mbirthre->num_rows; //male bitrh
						$fbirth = "SELECT* FROM birth where sex='" . $f . "'";
						$fbirthre = @$db->query($fbirth);
						$fbirthresult = $fbirthre->num_rows; // fmale total
						$totalbitrh = $mbirthresult + $fbirthresult;

						$dipt = $mteacher + $fteacher;
						$doct = $result + $fstu;
						$nert = $mde + $fde;

						$degt = $mbsc + $fbsc;
						$mast = $mmas = $fmas;
						$pt = $mab + $fab;
						$abc = $mdip + $fdip;

						// male total
						$mtotal = $mbirthresult + $mteacher + $result + $mde + $mbsc + $mmas + $mab + $mdip;
						//fmale total
						$ftotal = $fbirthresult + $fteacher + $fstu + $fde + $fbsc + $fmas + $fab + $fdip;
						$total = $mtotal + $ftotal;

						echo '<table  border ="0.5";color="#fff0000" style="font-family:Times New Roman" class="tble" width="100%" >
      <tr bgcolor="white">
	  <th >Job</th>
	  <th >Male</th>
	  <th>Female</th>
	  <th >Total</th>
	  </tr>
	   <tr align="center">
	  <td bgcolor="white">Student</td>
	  <td >' . $result . '</td>
	  <td  >' . $fstu . '</td>
	  <td >' . ($doct) . '</td>
	  </tr>
	  </tr>
	  <tr align="center">
	  <td  bgcolor="white">Phd</td>
	  <td  >' . $mbsc . '</td>
	  <td  >' . $fbsc . '</td>
	  <td  >' . ($degt) . '</td>
	  </tr>
	  <tr align="center">
	  <td bgcolor="white">Doctor</td>
	  <td >' . $mdip . '</td>
	  <td >' . $fdip . '</td>
	  <td >' . ($abc) . '</td>
	  </tr>
  <tr align="center">
	  <td bgcolor="white">Master</td>
	  <td>' . $mmas . '</td>
	  <td>' . $fmas . '</td><td>' . ($mast) . '</td>
	  </tr>
	  <tr align="center">
	  <td bgcolor="white">Farmer</td>
	  <td>' . $mde . '</td>
	  <td>' . $fde . '</td>
	  <td>' . ($nert) . '</td>
	  </tr><tr align="center">
	  <td bgcolor="white">teacher</td>
	  <td >' . $mteacher . '</td>
	  <td >' . $fteacher . '</td>
	  <td >' . ($dipt) . '</td>
	  </tr>
	  
	  <tr align="center">
	  <td bgcolor="white">Other</td>
	  <td>' . $mab . '</td>
	  <td>' . $fab . '</td>
	  <td>' . ($pt) . '</td>
	  </tr>
	  <tr align="center">
	  <td bgcolor="white">birth</td>
	  <td>' . $mbirthresult . '</td>
	  <td>' . $fbirthresult . '</td>
	  <td>' . ($totalbitrh) . '</td>
	  </tr>
	  <tr align="center">
	  <td bgcolor="white">Total</td>
	  <td>' . $mtotal . '</td>
	  <td>' . $ftotal . '</td>
	  <td>' . ($total) . '</td>
	  </tr>
	  <tr align="center">
		  <td colspan="3" align="right" bgcolor="white">Total number of resident</td>
  <td><b>' . ($mast + $degt + $dipt + $pt + $nert + $doct + $abc + $totalbitrh) . '</b></td>
	  </tr>
	  </table>';

						//COUNT (*)=Male;

						//$num_result = $result2->num_rows;
						//echo "<p>Number of employees found: ".$num_results."</p>";


						$db->close();

						?>
						<p>Prepared by:<?php echo $ful; ?> &nbsp;&nbsp;&nbsp;&nbsp;
							Signature:________________</p>
					</div><br><br>


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
				<td align="left"> the durame city.</td>
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