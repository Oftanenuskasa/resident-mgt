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
													if (ageRestriction(age, "Please enter only number for your age")) {
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
				alert("enter valid age between 18 and 120");
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
			margin-left: 20px;
			margin-right: 10px;
		}
		-->
	</style>
</head>

<body onLoad="timeimgs('1');">
	<br>
	<table border="0" width="1298" cellspacing="0">
		<tr>
			<td colspan="3"><img src="image/get.jpg" width="1299" height="120"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li><a href="charman.php"><b>Home</b></a></li>
				<li><a href="#"><em><b>Prepare</b> </em></a>
					<ul class="sub1">
						<li><a href="clearance.php"><b><i>Clearance </i></b></a></li>
					</ul>
				</li>
				<li><a href="viewrequest.php"><strong>View request </strong></a></li>
				<li><a href="#"><em><b>Generate report</b> </em></a>
					<ul class="sub1">
						<li><a href="#"><b><i>Clearance report</i></b></a>
							<ul class="">
								<li><a href="clearancereport.php"><b><i>Daylly report</i></b></a></li>
								<li><a href="sex_report.php"><b><i> Sex Report</i></b></a></li>
						</li>
					</ul>
				<li><a href="idcardreport.php"><b><i>Idcard report</i></b></a>
					<ul class="">
						<li><a href="clearancereport.php"><b><i>Daylly report</i></b></a></li>
						<li><a href="sex_report.php"><b><i>Sex Report </i></b></a></li>
				</li>
				</ul>
				</ul>
				</li>
				<li><a href="#"><em><b>News </b></em></a>
					<ul class="sub1">
						<li><a href="postnew.php"><b><i>Post News </i></b></a></li>
						<li><a href="update_news.php"><b><i>Update news </i></b></a></li>
						<li><a href="delete_news.php"><b><i>Delete news </i></b></a></li>
					</ul>
				</li>
				<li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				<li><a href="change_pass_charman.php"><b>Change password</b></a></li>
				<li><a href="Logout.php"><b>Logout</b></a></li>
			</td>
		</tr>
		<tr>
			<td width="1282">
				<table width="1282" border="0" cellspacing="0" bgcolor="#CCCCCC">
					<tr>
						<td width="250" height="480" valign="top">
							<table border="0" width="250" cellspacing="0">
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
										<li><a href="viewcomment.php"><strong>View comment</ </a>
										</li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="viewclearance.php"><strong>View clearance </strong></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="postnew.php"><b> </b></a></li>
									</td>
								</tr>
							</table>
						</td>
						<td width="1029" height="480" valign="top" bgcolor="#FFFFFF"><br>
							<br>
							<table width="804">
								<tr>
									<td width="723" height="436">
										<center>
											<div><b>
													<h2>ID card Form
												</b></div>
										</center>
										</h2>
										<hr />
										<fieldset>
											<legend align="center">
												<div class="legend"><b>Please fill-up the space provided below</b></div>
											</legend>
											<br>
											<div>
												<form onsubmit='return formValidation()' action='idcard.php' method='POST'>
													<table width="753">
														<tr>
															<td width="90">
																<font color=""></font>IdNumber :
															</td>
															<td width="139"><input type="text" size="30px" id='id' name='id' placeholder="Enter Id number..."></td>
															<td width="109">
																<font color="red"></font>HouseNumber:
															</td>
															<td width="277"><input type="text" size="30px" id='house' name='house' placeholder="Enter house..."></td>
														</tr>
														<tr>
															<td>
																<font color="red"></font>FirstName :
															</td>
															<td><input type="text" size="30px" id='firstname' name='firstname' pattern="\D{4,12}" placeholder="Enter firstname..."></td>
															<td>
																<font color="red"></font>MiddleName :
															</td>
															<td><input type="text" size="30px" id='middlename' name='middlename' pattern="\D{4,12}" placeholder="Enter middlename..."></td>
														</tr>
														<tr>
															<td>
																<font color="red"></font>LastName :
															</td>
															<td><input type="text" size="30px" id='lastname' name='lastname' pattern="\D{4,12}" placeholder="Enter lastname..."></td>
															<td>
																<font color="red"></font>Age :
															</td>
															<td><input type="text" size="30px" id='age' name='age' pattern="\d{1,3}" placeholder="Enter Age..."></td>
														</tr>
														<tr>
															<td>
																<font color="red"></font>Sex :
															</td>
															<td><input type="radio" name="gender" id="optionsRadios1" value="Male" checked>
																Male<input type="radio" name="gender" id="optionsRadios2" value="Female" checked>
																Female
															</td>
															<td>
																<font color="red"></font>Kebele:
															</td>
															<td><label>
																	<select name="kebele" id="kebele">
																		<option>01</option>
																	</select>
																</label></td>
														</tr>
														<tr>
															<td>
																<font color="red"></font>Job :
															</td>
															<td><select id='job' name='job'>
																	<option>Please Choose</option>
																	<option>Farmer</option>
																	<option>Student</option>
																	<option>Teacher</option>
																	<option>Doctor</option>
																	<option>Guard</option>
																	<option>Other</option>
																</select></td>
															<td>
																<font color="red"></font>PlaceOfBirth:
															</td>
															<td><input type="text" size="30px" id='place' name='place' pattern="\D{4,12}" placeholder="Enter place of..."></td>
														</tr>
														<tr>
															<td>
																<font color="red"></font>DateOfBirth :
															</td>
															<td><input type="text" size="20px" id='date' name='date' class="mine_text_field_7" readonly required placeholder="Enter DateOfBirth..." />
																<a href="javascript:NewCssCal('date','yyyymmdd')"><img src="image/cal.gif" width="20" height="21" border="0" />
															</td>
															<td>
																<font color="red"></font>DateOfTaken:
															</td>
															<td><input type="text" size="25px" id='taken' name='taken' class="mine_text_field_7" readonly required placeholder="Enter DateOfTaken..." />
																<a href="javascript:NewCssCal('taken','yyyymmdd')"><img src="image/cal.gif" width="20" height="21" border="0" />
															</td>
														</tr>
														<tr>
															<td>
																<font color="red"></font>Nationality:
															</td>
															<td><select id='nationality' name='nationality'>
																	<option>Ethiopia</option>
																</select></td>
															<td><label for="file">
																	<font color="red">*</font>UploadPicture:
																</label></td>
															<td><input type="file" size="25px" name="file" id="file" maxlength="50" value="" style="width:176px;" onchange=" document.getElementById('file').value=trim(this.value);" /></td>
														</tr>
														<tr>
															<td></td>
														</tr>
														<tr>
															<td></td>
															<td><input type='submit' value='Save' name='idcard' onClick="return check(this.form);" />
																<input type='reset' value='clear'>
															</td>
														</tr>
													</table>
												</form>
											</div>
										</fieldset>
										<hr />
										<?php
										if (isset($_POST['idcard'])) {
											if (!$conn) {
												die('Could not connect: ' . mysqli_error($conn));
											}

											mysqli_select_db($conn,"resident");
											$sql = "INSERT INTO idcard (id_number,HouseNumber,FirstName,middleName,LastName,age,sex,Kebele,job,PlaceOfBirth,DateOfBirth,DateOfTaken,Nationality,UploadPicture)
VALUES ('$_POST[id]','$_POST[house]','$_POST[firstname]','$_POST[middlename]','$_POST[lastname]','$_POST[age]','$_POST[gender]','$_POST[kebele]','$_POST[job]','$_POST[place]','$_POST[date]','$_POST[taken]','$_POST[nationality]','$_POST[file]')";
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
					</tr>
				</table>
			</td>
			<td width="0"></td>
			<td width="10" height="482" valign="top" bgcolor="white">
	</table>
	</td>
	<td colspan="3" height="25">
		<table border="0" align="center" width="99%" bgcolor="#ccc" cellspacing="0">
			<tr>
				<td>
					<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30"></a>
					<a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25"></a>
					<a href="http://twitter.com" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30"></a>
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