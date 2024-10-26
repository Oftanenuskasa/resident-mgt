<?php require_once('config.php'); ?>
<?php
if (isset($_GET["attempt"])) {
	$attempt = $_GET["attempt"];
}
?>
<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script language="javascript" src="datetimepicker.js"></script>
	<script type='text/javascript'>
		function formValidation() {
			//assign the fields
			var id = document.getElementById('id');
			var fatherfulname = document.getElementById('ffname');
			var motherfulname = document.getElementById('mfname');
			var firstname = document.getElementById('fname');
			var middlname = document.getElementById('mname');
			var lastname = document.getElementById('lname');
			var age = document.getElementById('age');
			var placeofbirth = document.getElementById('place');
			var date = document.getElementById('date');
			var registration = document.getElementById('register');

			// Check your input in the order that it appears in the form!
			if (isAlphanumeric(id, "Please enter your valid id in number and alphabet")) {
				if (lengthRestriction(id, 1, 20, "for your first id")) {
					if (isAlphabet(ffname, "Please enter your valid father ful name in alphabet")) {
						if (lengthRestriction(ffname, 1, 20, "for your father ful name")) {
							if (isAlphabet(mfname, "Please enter your valid mother ful name in alphabet")) {
								if (lengthRestriction(mfname, 1, 20, "for your mother ful name")) {
									if (isAlphabet(fname, "Please enter your valid name in alphabet")) {
										if (lengthRestriction(fname, 1, 20, "for your name")) {
											if (isAlphabet(mname, "Please enter your valid middlname name in alphabet")) {
												if (lengthRestriction(mname, 1, 20, "for your middlname")) {
													if (isAlphabet(lname, "Please enter your valid last name in alphabet")) {
														if (lengthRestriction(lname, 1, 20, "for your last name")) {
															if (isNumeric(age, "Please enter only number for your age")) {
																if (isAlphanumeric(place, "Please enter your valid place in number and alphabet")) {


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
			if (elem.value < 0.3 || elem.value > 0.9) {
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
			background-color: #FFFFCC;
			margin-left: 10px;
			margin-right: 10px;
		}
		-->
	</style>
</head>

<body onLoad="timeimgs('1');">
	<table border="0" width="1299" cellspacing="0">
		<tr>
			<td colspan="3"><img src="image/dk.jpg" width="1299" height="60"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li><a href="vital_registrar.php"><b><i>HOME</i></b></a></li>
				<li><a href="#"><i>EVENT REGISTRATION</i></a>
					<ul class="sub1">
						<li><a href="birth.php"><b><i>BIRTH REGISTERATION</i></b></a></li>
						<li><a href="death.php"><b><i>DEATH REGISTRATION</i></b></a></li>
						<li><a href="marriage.php"><b><i>MARRIAGE REGISTRATION</i></b></a></li>
						<li><a href="divorce.php"><b><i>DIVORCE REGISTRATION</i></b></a></li>
					</ul>
				</li>
				<li><a href="#"><i>GENERATE REPORT</i></a>
					<ul class="sub1">
						<li><a href="birth_report.php"><b><i>BIRTH REPORT</i></b></a></li>
						<li><a href="death_report.php"><b><i>DEATH REPORT</b></a></li>
						<li><a href="marriage_report.php"><b><i>MARRIAGE REPORT</i></b></a></li>
						<li><a href="divorce_report.php"><b><i>DIVORCE REPORT</i></b></a></li>
					</ul>
				</li>
				<li><a href="#"><i>GIVE CERTIFICATE</i></a>
					<ul class="sub1">
						<li><a href="give_birth.php"><b><i>BIRTH CERTIFICATE</i></li>
						<li><a href="Give_death.php"><b><i>DEATH CERTIFICATE</i></b></a></li>
						<li><a href="give_marriage.php"><b><i>MARRIAGE CERTIFICATE</i></b></a></li>
						<li><a href="give_divorce.php"><b><i>DIVORCE CERTIFICATE</i></b></a></li>
					</ul>
				</li>
				<li><a href="Logout.php"><b><i>LOGOUT</i></b></a></li>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="pink" cellspacing="0">
					<tr>
						<td width="50" height="600" valign="top">
							<table border="0" width="50" cellspacing="0">
								<tr>
									<td bgcolor="purple">
										<center><b>
												<marquee><i>WELCOME TO VITAL REGISTRAR PAGE</i></marquee>
											</b></center>
									</td>
								</tr>

								<tr>
									<td id="topnav">
										<li><a href="View_req.php"><b><i>VIEW REQUEST</i></b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="sendrequesttt.php"><b><i>SEND REQUEST TO RECORD OFFICER</i></b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="viewrequestttt.php"><b><i>VIEW RECORD OFFICER REQUEST</i></b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="postnew.php"><b><i>POST NEWS</i></b></a></li>
									</td>
								</tr>
							</table>
						</td>
						<td width="900" height="600" valign="top" bgcolor="cyan"><br><br>
							<table>
								<tr>
									<td>
										<script type="text/javascript">
											function changeVal(t1) {
												if (!/^[\d-'.']*$/.test(t1.value)) { //validates for numbers
													alert('Only valid numbers allowed!');
													t1.value = t1.value.replace(/[^\d-'.']/g, '');
												}
											}
										</script>
										<div></div>
										<hr />
										<fieldset>
											<legend align="center">
												<div class="legend"><b>Marriage REPORT----------------------------------------------------</b></div>
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
														if ($age > 0) {
															$count++;
															//$age=$_POST["age"];
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

										@$db = new mysqli('localhost', 'root', 'nasis', 'resident');
										if (mysqli_connect_errno()) {
											echo 'Error: Could not connect to database. Please try again later.';
											exit;
										}

										$dip = "Church";
										$ner = "Court";
										$ip = "Abduction";
										$er = "Traditional";
										//$m=maraki;
										$mnerquery = "SELECT* FROM marriage where typeofmarriage='" . $dip . "'";
										$mnerres = @$db->query($mnerquery);
										$mnernum_results = $mnerres->num_rows;
										$mnerquery = "SELECT* FROM marriage where typeofmarriage='" . $ner . "'";
										$mnerres = @$db->query($mnerquery);
										$mnernum_results = $mnerres->num_rows;
										$mnerquery = "SELECT* FROM marriage where typeofmarriage='" . $ip . "'";
										$mnerres = @$db->query($mnerquery);
										$mnernum_results = $mnerres->num_rows;
										$mdipquery = "SELECT* FROM marriage where typeofmarriage='" . $er . "'";
										$mdipres = @$db->query($mdipquery);
										$mdipnum_results = $mdipres->num_rows;
										$dipt = $mdipnum_results;
										$nert = $mnernum_results;
										$ipt = $mdipnum_results;
										$ert = $mnernum_results;
										echo '<table  border ="5";color="#fff0000" style="font-family:Times New Roman" class="tble" width="450px" >
      <tr bgcolor="#CCCC99">
	  <th >Type of marriage</th>
	
	  <th >Total</th>
	  </tr>
	   <tr align="center">
	  <td bgcolor="#996644">Church</td>
	  <td >' . ($dipt) . '</td>
	  </tr>
	  <tr align="center">
	  <td bgcolor="#996644">Abduction</td>
	  <td >' . ($nert) . '</td>
	  </tr>
	  <tr align="center">
	  <td bgcolor="#996644">Court</td>
	  <td >' . ($ipt) . '</td>
	  </tr>
	  <tr align="center">
	  <td bgcolor="#996644">Traditional</td>
	  <td >' . ($ert) . '</td>
	  </tr>
	  </tr>
	  
 
	  <tr align="center">
		  <td colspan="3" align="right" bgcolor="#CC9966">Total</td>
  <td><b>' . ($dipt + $nert + $ipt + $ert) . '</b></td>
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
					docprint.document.write('<html><head><title>Mesafint</title>');
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


				<div style="margin-left:20%; width:50px;  text-align:center;"><a href="death.php"><img src="image/btn_back.gif"></a></div>
				<br>


				<tbody>


			</div>
		</td>
	</tr>
	</tbody>

</table>
</div>
<br><br>
<div style="margin-left:2%; margin-top:-37%; width:50px;  text-align:center;"> <a href="javascript:Clickheretoprint()"><img src="image/DPIC_36483.jpg" /></a></div>

</table>
</td>
</td>

</fieldset>
<hr />
<?php
if (isset($_POST['population'])) {
	if (!$conn) {
		die('Could not connect: ' . mysqli_error($conn));
	}

	mysqli_select_db($conn,"resident");
	$sql = "INSERT INTO population (IdNumber,FirstName,HouseNumber,middleName,LastName,age,sex,Kebele,job,placeofbirth,dateofbirth,dateofregistration,nationality,UploadPicture)
VALUES
('$_POST[id]','$_POST[firstname]','$_POST[house]','$_POST[middlename]','$_POST[lastname]','$_POST[age]','$_POST[gender]','$_POST[kebele]','$_POST[job]','$_POST[place]','$_POST[date]','$_POST[registration]','$_POST[nationality]','$_POST[file]')";
	if (!mysqli_query($conn,$sql)) {
		die('Error: ' . mysqli_error($conn));
	} else {
		echo "1 record added";
	}
}
mysqli_close($conn)
?>

<?php
// function to get the characters after .!!
function getExtension($str)
{
	$i = strrpos($str, ".");
	if (!$i) {
		return "";
	}
	$len = strlen($str) - $i;
	$ext = substr($str, $i + 1, $len);
	return $ext;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (isset($_FILES['file']['name'])) {
		$imagename = $_FILES['file']['name']; //original image
		$source = $_FILES['file']['tmp_name']; //source image 
		$type = $_FILES['file']['type'];
		$size = $_FILES['file']['size'];
		if ($size > 350000) {
			echo "<script>alert('Size should not excide 350000bytes !!');</script>";
		} else {
			$extension = getExtension($imagename);
			$extension = strtolower($extension);
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
				// if file extension is not .jpg, .jpeg, .png, .gif
				echo "<script>alert('Image Extenction Should be .jpg, .jpeg, .png, .gif only !!');</script>";
			} else {
				$target = "images/ptphoto/$photoid._" . $photoid . ".jpg";
				move_uploaded_file($source, $target);


				//$imagepath = $imagename;
				$save =  "images/ptphoto/$photoid._" . $photoid . ".jpg"; //This is the new file you saving
				$file =  "images/ptphoto/$photoid._" . $photoid . ".jpg"; //This is the original file

				list($width, $height) = getimagesize($file);

				$tn = imagecreatetruecolor($width, $height);
				$image = imagecreatefromjpeg($file);
				imagecopyresampled($tn, $image, 0, 0, 0, 0, $width, $height, $width, $height);

				imagejpeg($tn, $save, 200);

				$save =  "images/ptphoto/" . $photoid . ".jpg"; //This is the new file you saving
				$file = "images/ptphoto/$photoid._" . $photoid . ".jpg"; //This is the original file

				list($width, $height) = getimagesize($file);

				$modwidth = 150;
				$modheight = 140;
				$tn = imagecreatetruecolor($modwidth, $modheight);
				$image = imagecreatefromjpeg($file);
				imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height);

				imagejpeg($tn, $save, 200);
				$imageval = $photoid . ".jpg";
				unlink("images/ptphoto/$photoid._" . $photoid . ".jpg");
			}
		}
	}
}
?>
</td>
</tr>
</table>
</td>
</td>



<td width="50" height="600" valign="top" bgcolor="#FFFFCC" id="mele">

	</table>
</td>
</tr>
</tr>
<tr>
	<td colspan="3" height="25">
		<table border="0" align="center" width="100%" bgcolor="orange" cellspacing="0">
			<tr>
				<td>
					<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30"></a>
					<a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25"></a>
					<a href="http://twitter.com" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30"></a>
					<a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="40" height="30"></a>
				</td>
				<td>
					<font face="Times New Roman" color="orange"><b>DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b>
					</font>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
</body>

</html>