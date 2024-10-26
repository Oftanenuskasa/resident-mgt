<?php require_once('config.php'); ?>

<?php
if (isset($_GET["attempt"])) {
	$attempt = $_GET["attempt"];
}
?>

<html>

<head>
	<script language="javascript">

	</script>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script language="javascript" src="datetimepicker.js"></script>
	<script type='text/javascript'>
		function formValidation() {
			//assign the fields
			var id = document.getElementById('id');
			var housenumber = document.getElementById('house');
			var firstname = document.getElementById('firstname');
			var middlename = document.getElementById('middlename');
			var lastname = document.getElementById('lastname');
			var age = document.getElementById('age');
			var kebele = document.getElementById('kebele');
			var job = document.getElementById('job');
			var place = document.getElementById('place');
			var date = document.getElementById('date');
			var registration = document.getElementById('registration');
			var nationality = document.getElementById('nationality');

			// Check your input in the order that it appears in the form!
			if (isAlphanumeric(id, "Please enter your valid id in number and alphabet")) {
				if (lengthRestriction(id, 1, 20, "for your first id")) {
					if (isAlphanumeric(house, "Please enter your valid house number in number and alphabet")) {
						if (lengthRestriction(house, 1, 20, "for your house number")) {
							if (isAlphabet(firstname, "please fill your firstName letters only")) {
								if (lengthRestriction(firstname, 3, 15, "for your first name")) {
									if (isAlphabet(middlename, "please fill your middleName letters only")) {
										if (lengthRestriction(middlename, 3, 15, "for your middle name")) {
											if (isAlphabet(lastname, "please fill your lastName letters only")) {
												if (lengthRestriction(lastname, 3, 15, "for your last name")) {
													if (isNumeric(age, "Please enter only number for your age")) {
														if (isNumeric(kebele, "Please enter your valid Kebele in number")) {
															if (madeSelection(job, "Please Choose a Job")) {
																if (isAlphabet(place, "please fill your PlaceOfBirth")) {
																	if (lengthRestriction(place, 3, 15, "for your place of birth")) {
																		if (madeSelection(nationality, "Please Choose for nationality")) {
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
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style type="text/css">
		<!--
		body {
			background-color: #eee;
			margin-left: 60px;
			margin-right: 40px;
		}
		-->
	</style>
</head>

<body onLoad="timeimgs('1');">
	<br>
	<table border="0" width="97%" cellspacing="0">
		<tr>
			<td colspan="3"><img src="image/f.
gif" width="15%" height="140"><img src="image/get.
jpg" width="70%" height="140"><img src="pic/DSC06361.
jpg" width="15%" height="140"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li><a href="charman.php"><b>Home</b></a></li>
				<li><a href="#"><em><strong>Prepare </em></a>
					<ul class="sub1">
						<li><a href="clearance.php"><b><i>Clearance </i></b></a></li>
						<li><a href="display_residnet.php"><b><i>Idcard </i></b></a></li>
					</ul>
				</li>
				<li><a href="viewrequest.php"><strong>View request </strong></a></li>
				<li><a href="#"><em><strong>Generate report</strong> </em></a>
					<ul class="sub1">
						<li><a href="#"><b><i>Clearance report</i></b></a>
							<ul class="">
								<li><a href="clearancereport.php"><b><i>Daylly report</i></b></a></li>
						</li>
					</ul>
				<li><a href="#"><b><i>Idcard report</i></b></a>
					<ul class="">
						<li><a href="idcardreport.php"><b><i>Daylly report</i></b></a></li>
						<li><a href="sex_report.php"><b><i>Sex Report </i></b></a></li>
				</li>
				</ul>
				</ul>
				</li>
				<li><a href="#"><em>News </em></a>
					<ul class="sub1">
						<li><a href="postnew.php"><b><i>Post News </i></b></a></li>
						<li><a href="update_news.php"><b><i>Update news </i></b></a></li>
					</ul>
				</li>
				<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li><a href="change_password.php"><b>Change password</b></a></li>
				<li><a href="Logout.php"><b>Logout</b></a></li>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="#CCCCCC" cellspacing="0">
					<tr>
						<td width="270" height="436" valign="top">
							<table border="0" width="269" cellspacing="0">
								<tr>
									<td id="topnav">
										<li><a href="giveidcard.php"><strong>View id card </strong></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="view_resident.php"><strong>View resident </strong></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="viewcomment.php"><strong>View comment</strong> </a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="viewclearance.php"><strong>View clearance </strong></a></li>
									</td>
								</tr>
								<td>
									<br><br>
								</td>
								<tr>
									<td>
							</table>
						</td>
						<td width="100%" height="400" valign="top" bgcolor="white"><br><br>
							<table>
								<tr>
									<td>


										<div><b><strong>
													<center>Durame city clearance report Form</center>
												</strong></b></div>
										<hr />
										<fieldset>
											<legend align="center">
												<div class="legend"><b>clearance report----------------------------------------------------</b></div>
											</legend>
											<br>
											<div>
												<html>

												<body>

													<?php
													$con = mysqli_connect("localhost", "root", "nasis");
													mysqli_select_db($conn,"resident");
													$date = date('y-m-d');
													//$enddate;
													$age;
													$date = date('Y-m-d');
													$sql = "select * from populaion";
													$result1 = mysqli_query($conn,$sql);
													$ag12l;
													$count = 0;
													while ($result1) {
														$ag12 = $row['DateOfBirth'];
														$id = $row['id'];

														//echo $ag12;
														//$enddate=date($enddate);

														//$age=(strtotime($date)-strtotime($enddate))/(60*60*24);
														//echo $age;
														//$age=$row['age'];


														$age = date('Y-M-D') - $ag12;

														//echo $age;
														//echo$age;
														if ($age >= 60) {
															$count++;
															$age = $_POST["age"];
															/* $res=mysql_query("select count(*) from reg where id='$id' ");
$num=0;
if($row=mysql_fetch_array($res))   
$num=$row[0];
if($num > 0)
echo"<li><a  href='noti.php'>$num &nbsp; </a></li>";

else
echo"<li><a  href='noti.php'>$num &nbsp;</a></li>"; */
														}
													}
													if ($count > 0) {

														//echo"<li><a  href='noti.php'>$count &nbsp; </a></li>";
													} else {
														//echo"<li><a  href='noti.php'>$count &nbsp; </a></li>";
													}

													//}
													?>

													</ul>

											</div>
											</div>
									</td>
								</tr>

								<div id="image">
									<div id="sidebar1">

										<?php

										//$level=$_POST['searchtype'];
										//$salary=$_POST['searchterm'];

										@$db = new mysqli('localhost', 'root', '', 'kebele');
										if (mysqli_connect_errno()) {
											echo 'Error: Could not connect to database. Please try again later.';
											exit;
										}

										$dip = "Male";
										$ner = "Female";
										$m = 18;
										$mnerquery = "SELECT* FROM clearance where sex='" . $ner . "'";
										$mnerres = @$db->query($mnerquery);
										$mnernum_results = $mnerres->num_rows;
										$mdipquery = "SELECT* FROM clearance where sex='" . $dip . "'";
										$mdipres = @$db->query($mdipquery);
										$mdipnum_results = $mdipres->num_rows;
										$dipt = $mdipnum_results;
										$nert = $mnernum_results;
										echo '<table  border ="5";color="#fff0000" style="font-family:Times New Roman" class="tble" width="450px" >
      <tr bgcolor="#FFFFFF">
	  <th >Sex</th>
	
	  <th >Total</th>
	  </tr>
	   <tr align="center">
	  <td bgcolor="#FFFFFF">Male</td>
	  <td >' . ($dipt) . '</td>
	  </tr><tr align="center">
	  <td bgcolor="#FFFFFF">female</td>
	  <td >' . ($nert) . '</td>
	  </tr>
	  </tr>
	  
 
	  <tr align="center">
		  <td colspan="3" align="right" bgcolor="#FFFFFF">Total</td>
  <td><b>' . ($dipt + $nert) . '</b></td>
	  </tr>
	  </table>';

										//COUNT (*)=Male;

										//$num_result = $result2->num_rows;
										//echo "<p>Number of employees found: ".$num_results."</p>";


										$db->close();

										?>
										</center>
									</div>
									<br /><br />
								</div>

								</div>


								</div>
								<!-- row end -->
								</div>
</body>

</html>
<br><br>

<table id="contentbox">
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


				<div style="margin-left:20%; width:50px;  text-align:center;"><a href="clearancereport.php"><img src="image/btn_back.gif"></a></div>
				<br>


				<tbody>


			</div>
		</td>
	</tr>
	</tbody>

</table>
</div><br>
<div style="margin-left:50%; width:50px;  text-align:center;"> <a href="javascript:Clickheretoprint()"><img src="image/DPIC_36483.jpg" /></a></div>
</td>
</tr>

</table>
</td>
</td>

</fieldset>
<hr />

</td>
</tr>
</table>
</td>
</td>



<td width="300" height="100" valign="top" bgcolor="white">

	</table>
</td>
</tr>
</tr>
<tr>
	<td colspan="3" height="25">
		<table border="0" align="center" width="100%" bgcolor="#CCCCCC" cellspacing="0">
			<tr>
				<td>
					<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30"></a>
					<a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25"></a>
					<a href="http://twitter.com/" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30"></a>
					<a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="40" height="30"></a>
				</td>
				<td>
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