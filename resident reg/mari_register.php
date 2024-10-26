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
				<li><a href="charman.php"><b>Home</b></a></li>
				<li><a href="idcard.php"><b>Prepare IdCard</b></a></li>
				<li><a href="viewrequest.php"><b>View Request</b></a></li>
				<li><a href="chairmanreport.php"><b>Generate Report</b></a></li>
				<li><a href="give_certificate.php"><b>Give certificate</b></a></li>
				<li><a href="renew_id.php"><b>Renew</b></a></li>
				<li><a href="view_certificate.php"><b>view certificate</b></a></li>

				<li><a href="Logout.php"><b>Logout</b></a></li>
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
										<center><b>Chairman Page</b></center>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="giveidcard.php"><b>View IdCard</b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="clearance.php"><b>Prepare Clearance</b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="viewclearance.php"><b>View Clearance</b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="sendrequesttt.php"><b>Send Requestto RecordOfficer</b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="viewrequestttt.php"><b>View RecordOficer Request</b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="postnew.php"><b>post new</b></a></li>
									</td>
								</tr>
							</table>
						</td>
						<td width="900" height="600" valign="top" bgcolor="cyan"><br><br>
							<table>
								<tr>
									<td>
										<div><b>ID card Form</b></div>
										<hr />
										<fieldset>
											<legend align="center">
												<div class="legend"><b>Please fill-up the space provided below</b></div>
											</legend>
											<br>
											<div>
												<form onsubmit='return formValidation()' action='idcard.php' method='POST'>
													<table>
														<tr>
															<td>
																<font color="red">*</font>IdNumber :
															</td>
															<td><input type="text" size="20px" id='id' name='id' placeholder="Enter Id number..."></td>
															<td>
																<font color="red">*</font>HouseNumber:
															</td>
															<td><input type="text" size="20px" id='house' name='house' placeholder="Enter house..."></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>FirstName :
															</td>
															<td><input type="text" size="20px" id='firstname' name='firstname' pattern="\D{4,12}" placeholder="Enter firstname..."></td>
															<td>
																<font color="red">*</font>MiddleName :
															</td>
															<td><input type="text" size="20px" id='middlename' name='middlename' pattern="\D{4,12}" placeholder="Enter middlename..."></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>LastName :
															</td>
															<td><input type="text" size="20px" id='lastname' name='lastname' pattern="\D{4,12}" placeholder="Enter lastname..."></td>
															<td>
																<font color="red">*</font>Age :
															</td>
															<td><input type="text" size="20px" id='age' name='age' pattern="\d{1,3}" placeholder="Enter Age..."></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>Sex :
															</td>
															<td><input type="radio" name="gender" id="optionsRadios1" value="Male" checked>
																Male<input type="radio" name="gender" id="optionsRadios2" value="Female" checked>
																Female
															</td>
															<td>
																<font color="red">*</font>Kebele:
															</td>
															<td><input type="text" size="20px" id='kebele' name='kebele' pattern="\d{2}" placeholder="Enter kebele..."></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>Job :
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
																<font color="red">*</font>PlaceOfBirth:
															</td>
															<td><input type="text" size="20px" id='place' name='place' pattern="\D{4,12}" placeholder="Enter place of..."></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>DateOfBirth :
															</td>
															<td><input type="text" size="15px" id='date' name='date' class="mine_text_field_7" readonly required placeholder="Enter DateOfBirth..." />
																<a href="javascript:NewCssCal('date','yyyymmdd')"><img src="image/cal.gif" width="20" height="21" border="0" />
															</td>
															<td>
																<font color="red">*</font>DateOfTaken:
															</td>
															<td><input type="text" size="15px" id='taken' name='taken' class="mine_text_field_7" readonly required placeholder="Enter DateOfTaken..." />
																<a href="javascript:NewCssCal('taken','yyyymmdd')"><img src="image/cal.gif" width="20" height="21" border="0" />
															</td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>Nationality:
															</td>
															<td><select id='nationality' name='nationality'>
																	<option>Please Choose</option>
																	<option>Ethiopia</option>
																	<option>Kenya</option>
																	<option>Sudan</option>
																	<option>German</option>
																	<option>China</option>
																	<option>India</option>
																	<option>France</option>
																	<option>Other</option>
																</select></td>
															<td><label for="file">
																	<font color="red">*</font>UploadPicture:
																</label></td>
															<td><input type="file" size="10px" name="file" id="file" maxlength="50" value="" style="width:176px;" onchange=" document.getElementById('file').value=trim(this.value);" /></td>
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
			</td>
			<td width="50" height="600" valign="top" bgcolor="pink">

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