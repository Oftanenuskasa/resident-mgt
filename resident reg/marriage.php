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
			var Husbandfulname = document.getElementById('hfname');
			var wifefulname = document.getElementById('wfname');
			var typeofmarriage = document.getElementById('type');
			var evidence1fulname = document.getElementById('ev1');
			var evidence2fulname = document.getElementById('ev2');
			var evidence3fulname = document.getElementById('ev3');
			var courtname = document.getElementById('court');
			var placeofmarriage = document.getElementById('place');
			var date = document.getElementById('date');
			var registration = document.getElementById('register');

			// Check your input in the order that it appears in the form!
			if (isAlphanumeric(id, "Please enter your valid id in number and alphabet")) {
				if (lengthRestriction(id, 1, 20, "for your first id")) {
					if (isAlphabet(hfname, "Please enter your valid husband ful name in alphabet")) {
						if (lengthRestriction(hfname, 1, 20, "for your husband ful name")) {
							if (isAlphabet(wfname, "Please enter your valid wife ful name in alphabet")) {
								if (lengthRestriction(wfname, 1, 20, "for your wife ful name")) {
									if (isAlphabet(type, "Please enter your valid type of marriage in alphabet")) {
										if (lengthRestriction(type, 1, 20, "for your type of marriage")) {
											if (isAlphabet(ev1, "Please enter your valid evidence1 ful name in alphabet")) {
												if (lengthRestriction(ev1, 1, 20, "for your evidence1 ful name")) {
													if (isAlphabet(ev2, "Please enter your valid evidence2 ful name in alphabet")) {
														if (lengthRestriction(ev2, 1, 20, "for your evidence2 ful name")) {
															if (isAlphanumeric(ev3, "Please enter your valid evidence3 ful name in number  alphabet")) {
																if (lengthRestriction(ev3, 1, 20, "for your evidence3 ful name")) {
																	if (isAlphabet(court, "Please enter your valid court marriage in alphabet")) {
																		if (lengthRestriction(court, 1, 20, "for your court of marriage")) {
																			if (isAlphanumeric(place, "Please enter your valid place of marriage in numbers and alphabet")) {
																				if (lengthRestriction(place, 1, 20, "for your place of marriage")) {


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
										<div><b>MARRIAGE REGISTER Form</b></div>
										<hr />
										<fieldset>
											<legend align="center">
												<div class="legend"><b>Please fill-up the space provided below</b></div>
											</legend>
											<br>
											<div>
												<form onsubmit='return formValidation()' action='marriage.php' method='POST'>
													<table>
														<tr>
															<td>
																<font color="red">*</font>MRId :
															</td>
															<td><input type="text" size="20px" id='id' name='id' placeholder="Enter marriage id..."></td>
															<td>
																<font color="red">*</font>Husbandfulname:
															</td>
															<td><input type="text" size="20px" id='hfname' name='hfname' placeholder="Enter husbandfulname..."></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>Wifefulname :
															</td>
															<td><input type="text" size="20px" id='wfname' name='wfname' pattern="\D{4,12}" placeholder="Enter wiifefulname..."></td>

															<td>
																<font color="red">*</font>Types of marriage :
															</td>
															<td><label>
																	<select name="type" id="type">
																		<option>Select Opitions</option>
																		<option>Traditional</option>
																		<option>Chuch</option>
																		<option>Court</option>
																		<option>Abduction</option>
																	</select>
																</label></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>Evi1_fulname :
															</td>
															<td><input type="text" size="20px" id='ev1' name='ev1' pattern="\D{4,12}" placeholder="Enter Evi1_fulname..."></td>
														<tr>
															<td>
																<font color="red">*</font>Evi2_fulname :
															</td>
															<td><input type="text" size="20px" id='ev2' name='ev2' pattern="\D{4,12}" placeholder="Enter Evi2_fulname..."></td>

															<td>
																<font color="red">*</font>Evi3_fulname :
															</td>
															<td><input type="text" size="20px" id='ev3' name='ev3' pattern="\D{4,12}" placeholder="Enter Evi3_fulname..."></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>court_name:
															</td>

															<td> <input type="text" size="20px" id="court" name='court' pattern="\D{4,12}" placeholder="Enter court name...">
															</td>
															<td>
																<font color="red">*</font>Place of Marriage:
															</td>
															<td><label>
																	<select name="place" id="place">
																		<option>Damboya</option>
																		<option>Kedida Gamela</option>
																		<option>Angacha</option>
																	</select>
																</label></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>Date Of Marriage :
															</td>
															<td><input type="text" size="15px" id='date' name='date' class="mine_text_field_7" readonly required placeholder="Enter DateOfBirth..." />
																<a href="javascript:NewCssCal('date','yyyymmdd')"><img src="image/cal.gif" width="20" height="21" border="0" />
															</td>
															<td>
																<font color="red">*</font>DateOfRegister:
															</td>
															<td><input type="text" size="15px" id='register' name='register' class="mine_text_field_7" readonly required placeholder="Enter DateOfregister..." />
																<a href="javascript:NewCssCal('register','yyyymmdd')"><img src="image/cal.gif" width="20" height="21" border="0" />
															</td>
														</tr>

														<tr>
															<td></td>
														</tr>
														<tr>
															<td></td>
															<td><input type='submit' value='Save' name='marriage' onClick="return check(this.form);" />
																<input type='reset' value='clear'>
															</td>
														</tr>
													</table>
												</form>
											</div>
										</fieldset>
										<hr />
										<?php
										if (isset($_POST['marriage'])) {
											if (!$conn) {
												die('Could not connect: ' . mysqli_error($conn));
											}

											mysqli_select_db($conn,"resident");
											$sql = "INSERT INTO marriage (mrid,husbandfulname,wifefulname,typeofmarriage,evidence1fulname,evidence2fulname,evidence3fulname,courtname,placeofmarriage,date,register)
VALUES ('$_POST[id]','$_POST[hfname]','$_POST[wfname]','$_POST[type]','$_POST[ev1]','$_POST[ev2]','$_POST[ev3]','$_POST[court]','$_POST[place]','$_POST[date]','$_POST[register]')";
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
			<td width="50" height="200" valign="top" bgcolor="pink">

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