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
			var ddrid = document.getElementById('id');
			var mrid = document.getElementById('rid');
			var reasonofdivorce = document.getElementById('rod');
			var naneofcourt = document.getElementById('noc');
			var numberofchildren = document.getElementById('child');
			var registrar_name = document.getElementById('rn');
			var placeofdivorce = document.getElementById('place');
			var date = document.getElementById('date');
			var registration = document.getElementById('register');

			// Check your input in the order that it appears in the form!
			if (isAlphanumeric(id, "Please enter your valid divorce id in number and alphabet")) {
				if (lengthRestriction(id, 1, 20, "for your divorce id")) {
					if (isAlphanumeric(rid, "Please enter your valid marriage id in number and alphabet")) {
						if (lengthRestriction(rid, 1, 20, "for your marriage id")) {
							if (isAlphanumeric(reason, "Please enter your valid reason of divorce in numbers and alphabet")) {
								if (lengthRestriction(reason, 1, 20, "for your reason of divorce")) {
									if (isAlphanumeric(noc, "Please enter your valid name of court in numbers and alphabet")) {
										if (lengthRestriction(noc, 1, 20, "for your name of court")) {
											if (isAlphanumeric(child, "Please enter your valid number of children in numbers and alphabet")) {
												if (lengthRestriction(child, 1, 20, "for your number of children")) {
													if (isAlphanumeric(rn, "Please enter your valid registrar name in numbers and alphabet")) {
														if (lengthRestriction(rn, 1, 20, "for your registrar name")) {
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
				<li><em><a href="charman.php"><b>HOME</b></a></em></li>
				<li><em><a href="idcard.php"><b>PREPARE IDCARD</b></a></em></li>
				<li><em><a href="viewrequest.php"><b>VIEW REQUEST</b></a></em></li>
				<li><em><a href="chairmanreport.php"><b>GENERATE REPORT</b></a></em></li>
				<li><em><a href="give_certificate.php"><b>GIVE CERTIFICATE </b></a></em></li>
				<li><em><a href="renew_id.php"><b>RENEW</b></a></em></li>
				<li><em><a href="view_certificate.php"><b>VIEW CERTIFICATE </b></a></em></li>

				<li><em><a href="Logout.php"><b>LOGOUT</b></a></em></li>
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
										<div><b>DIVORCE REGISTER Form</b></div>
										<hr />
										<fieldset>
											<legend align="center">
												<div class="legend"><b>Please fill-up the space provided below</b></div>
											</legend>
											<br>
											<div>
												<form onsubmit='return formValidation()' action='divorce.php' method='POST'>
													<table>
														<tr>
															<td>
																<font color="red">*</font>DDRId :
															</td>
															<td><input type="text" size="20px" id='id' name='id' placeholder="Enter divorce id..."></td>
															<td>
																<font color="red">*</font>MRID:
															</td>
															<td><input type="text" size="20px" id='rid' name='rid' placeholder="Enter marriage id..."></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>ReasonofDivorce :
															</td>
															<td><label>
																	<textarea name="reason" id="reason"></textarea>
																</label></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>NameofCourt :
															</td>
															<td><label>
																	<select name="noc" id="noc">
																		<option>Select types of divorce</option>
																		<option>Court</option>
																		<option>Sheria</option>
																		<option>Shimagle</option>
																	</select>
																</label></td>
															<td>
																<font color="red">*</font>NumberofChildren :
															</td>
															<td><input type="text" size="20px" id='child' name='child' pattern="\D{4,12}" placeholder="Enter number of children..."></td>


														</tr>
														<tr>
															<td>
																<font color="red">*</font>Registrar_name:
															</td>

															<td> <input type="text" size="20px" id="rn" name='rn' pattern="\D{4,12}" placeholder="Enter registrar name...">
															</td>
															<td>
																<font color="red">*</font>PlaceofDivorce:
															</td>
															<td><label>
																	<select name="place" id="place">
																		<option>maraki</option>
																		<option>kirkos</option>
																		<option>lideta</option>
																	</select>
																</label></td>
														</tr>
														<tr>
															<td>
																<font color="red">*</font>DateOfDivorce :
															</td>
															<td><input type="text" size="15px" id='date' name='date' class="mine_text_field_7" readonly required placeholder="Enter DateOfDivorce..." />
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
															<td><input type='submit' value='Save' name='divorce' onClick="return check(this.form);" />
																<input type='reset' value='clear'>
															</td>
														</tr>
													</table>
												</form>
											</div>
										</fieldset>
										<hr />
										<?php
										if (isset($_POST['divorce'])) {
											if (!$conn) {
												die('Could not connect: ' . mysqli_error($conn));
											}

											mysqli_select_db($conn,"resident");
											$sql = "INSERT INTO divorce (ddrid,mrid,reasonofdivorce,nameofcourt,numberofchildren,registrarname,placeofdivorce,date,register)
VALUES ('$_POST[id]','$_POST[rid]','$_POST[reason]','$_POST[noc]','$_POST[child]','$_POST[rn]','$_POST[place]','$_POST[date]','$_POST[register]')";
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