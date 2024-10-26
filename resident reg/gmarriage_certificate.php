<?php require_once('config.php'); ?>
<?php
//if(isset($_GET["attempt"]))
//{
//$attempt=$_GET["attempt"];
//}
//
?>
<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script language="javascript" src="datetimepicker.js"></script>
	<script type='text/javascript'>
		function formValidator() {
			//assign the fields
			var id_number = document.getElementById('id_number');
			var subject = document.getElementById('subject');
			var FirstName = document.getElementById('FirstName');
			var middleName = document.getElementById('middleName');
			var lastname = document.getElementById('LastName');
			var certify_reason = document.getElementById('certify_reason');
			// Check your input in the order that it appears in the form!
			if (isAlphanumeric(id_number, "Please enter your valid id in number and alphabet")) {
				if (lengthRestriction(id_number, 1, 20, "for your first id")) {
					if (isAlphabet(FirstName, "please fill your firstName letters only")) {
						if (lengthRestriction(firstname, 3, 15, "for your first name")) {
							if (isAlphabet(middleName, "please fill your middleName letters only")) {
								if (lengthRestriction(middleName, 3, 15, "for your middle name")) {
									if (isAlphabet(LastName, "please fill your lastName letters only")) {
										if (lengthRestriction(LastName, 3, 15, "for your last name")) {
											if (isAlphabet(certify_reason, "please fill your reason")) {
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
				<li><a href="gmarriage_certificate.php"><b>Gmarriage_certificate</b></a></li>
				<li><a href="renew_id.php"><b>Renew</b></a></li>
				<li><a href="vmarriage_certificate.php"><b>Vmarriage certificate</b></a></li>
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


										<?php
										$msg = "";
										$success = "";
										$opr = "";
										$id = "";
										$clk = "";
										$clk_info = "";
										//include("config.php");

										if (isset($_GET["opr"]))
											$opr = $_GET["opr"];

										if (isset($_GET["IdNumber"]))
											$cus_id = $_GET["IdNumber"];

										if (isset($_GET["certif_id"]))
											$cer_id = $_GET["certif_id"];

										if (isset($_GET['upd_certificate']))
											$upd = $_GET['upd_certificate'];

										if ($opr == 'give_certificate' and $cus_id != 0) {
											$query = 'SELECT * FROM marriage WHERE mrid = "' . $cus_id . '"';
											$res = mysqli_query($conn,$query);

											if ($res) {
												while ($row = mysqli_fetch_array($res)) {
													$mrid = $row['mrid'];
													$f_name = $row['husbandfulname'];
													$m_name = $row['wifefulname'];
													$l_name = $row['evidence1fulname'];
												}
											}
										} /* end of give */

										if ($opr == 'upd_certificate' and $cer_id != '') {

											$query = 'SELECT * FROM vmarriage WHERE certif_id = "' . $cer_id . '"';
											$res = mysqli_query($conn,$query);

											if ($res) {
												while ($row = mysqli_fetch_array($res)) {
													$cer_id = $row['certif_id'];
													$IdNumber = $row['IdNumber'];
													$f_name = $row['husbandfulname'];
													$m_name = $row['wifefulname'];
													$l_name = $row['evidence1fulname'];
													$subject = $row['subject'];
													$certify_reason = $row['certify_reason'];
													$certify_date = $row['certify_date'];
												}
											}
										} /* end of update */

										?>

										<?php if (isset($_POST['gmarriage_certificate_now'])) {

											$id_number = $_POST['id_number'];
											$mrid = $_GET['mrid'];
											//$cust_id = $cust_id;
											$subject = $_POST['subject'];
											$f_name = $_POST['husbandfulname'];
											$m_name = $_POST['wifefulname'];
											$l_name = $_POST['evidence1fulname'];
											$certify_reason = $_POST['certify_reason'];

											if ($id_number != "" and $subject != "" and $f_name != "" and $m_name != "" and $l_name != "" and $certify_reason != "") {

												$sql = 'INSERT INTO vmarriage
					(certif_id, IdNumber, husbandfulname, wifefulname, evidence1fulname, subject, certify_reason,certify_date)
					VALUES
					( 
					"' . $id_number . '",											
					"' . $mrid . '",
					"' . $f_name . '",
					"' . $m_name . '",
					"' . $l_name . '",
					"' . $subject . '",	
					"' . $certify_reason . '",
					"' . date(' d M Y') . '"
					
					)';

												if ($sql) {
													mysqli_query($conn,$sql) or die("Unable to insert vmarriage sssssss" . mysqli_error($conn));
													$success = 'You have successfully given 1 vmarriage !!';


													$IdNumber = "";
													$f_name = "";
													$m_name = "";
													$l_name = "";
												} else $msg = 'You did not Give !';
											} else
												echo "<script>
				alert('You have an empty field(s) !!');
	        	</script>";
										}

										if (isset($_POST['upd_certificate_now'])) {

											$id_number = $_POST['id_number'];
											//$cust_id = $_GET['cust_id'];
											$cer_id = $_GET['certif_id'];
											$subject = $_POST['subject'];
											$f_name = $_POST['husbandfulname'];
											$m_name = $_POST['wifefulname'];
											$l_name = $_POST['evidence1fulname'];
											$certify_reason = $_POST['certify_reason'];
											$date = date(' d M Y');

											if ($id_number != "" and $subject != "" and $f_name != "" and $m_name != "" and $l_name != "" and $certify_reason != "") {

												$sql = "UPDATE  vmarriage SET 
								IdNumber = '$IdNumber', 
								husbandfulname = '$f_name', 
								wifefulname = '$m_name', 
								evidence1fulname = '$l_name', 
								subject = '$subject', 
								certify_reason = '$certify_reason',
								certify_date = '$date'
								WHERE certif_id = '$cer_id'";
												if ($sql) {
													$result = mysqli_query($conn,$sql) or die("Unable to insert marriage " . mysqli_error($conn));
													if ($result == true)
														$success = 'You have successfully updated the certificate!';
												} else $msg = 'Query not correct !';
											} else
												echo "<script>
				alert('You have an empty field(s) !!');
	        	</script>";
										}
										?>

										<html>

										<head>
											<title></title>
										</head>

										<body>


											<h3> Give Certificate for Residents</h3>
											<form method="post">
												<br /><b style="margin-left:40px;"> Enter a name to search<br />
													<span style="width:140px;">
														<input style="float:left;" class="form-input" type="text" name="searchtxt" title="Enter name for search " />

														<input class="btn" type="submit" name="btnsearch" value="Search" id="button-search" title="Search Resident" />
													</span>
												</b>
											</form><br />
											<?php


											if (!isset($_GET['opr']) and !isset($_GET['IdNumber'])) {





												$key = "";
												if (isset($_POST['searchtxt']))
													$key = $_POST['searchtxt'];

												if ($key != "")
													$result = mysqli_query($conn,"SElECT * FROM marriage WHERE husbandfulname  like '%$key%' or wifefulname like '%$key%'");
												else
													$result = mysqli_query($conn,"SELECT * FROM marriage");

												if ($result) {
													echo '<div style="overflow:auto; width:620px; height:500px; margin-left:50px">';
													echo '<table style="" border=5 class="table table-striped table-hover table-condensed table-bordered">';
													echo '<tr>';
													echo '<th> ID</th>';
													echo '<th>FulN </th>';
													echo '<th>Type Of Marriage </th>';
													echo '<th> place of marriage</th>';
													echo '<th> DOM</th>';
													echo '<th> register</th>';
													echo '<th colspan="2">Operation</th>';
													echo '</tr>';
													while ($run = mysqli_fetch_array($result)) {
														$mrid = $run['mrid'];
														$f_name = $run['husbandfulname'];
														$m_name = $run['wifefulname'];
														$l_name = $run['evidence1fulname'];
														$typeofmarriage = $run['typeofmarriage'];
														$placeofmarriage = $run['placeofmarriage'];
														$date = $run['date'];
														$register = $run['register'];

														echo '<tr>';

														echo '<td>' . $mrid . '</td>';

														echo '<td>' . $f_name . " " . $m_name . " " . $l_name . '</td>';
														echo '<td>' . $typeofmarriage . '</td>';
														echo '<td>' . $placeofmarriage . '</td>';
														echo '<td>' . $date . '</td>';
														echo '<td>' . $register . '</td>';
														echo '<td><a href="gmarriage_certificate.php?pg=gmarri&opr=gmarriage_certificate&mrid=' . $mrid . '">
						<input type="submit" name="hit_gmarriage_certificate" value="Give Certificate" /></a></td>';

														echo '</tr>';
													}
													echo '</table>';
													echo '</div>';
												}
											} else {

											?>
												<br />


												<h3> Give Certification for Residents </h3>
												<b style="margin-left:100px; font-size:16px; color:#009900; "> <?php echo $success; ?></b> <br /> <br />
												<form onsubmit='return formValidator()' action="" method="post" style="  width:90%; margin:0px auto 0px 20px; color:#000000;">
													<fieldset>
														<legend style="color:#0000CC;"><b>Certification Form </b></legend>
														<table>
															<tr>
																<td> IDNumber:*</td>
																<td></td>
																<td>
																	<input class="form-input" type="text" name="id_number" value="<?php /*if($opr == "gmarriage")echo $IdNumber;
							else if ($opr == "upd_certificate") echo $cer_id;*/
																																	?>" />
																</td>
															</tr>
															<tr>
																<td>Subject:*</td>
																<td></td>
																<td><select name="subject" style="width:220px; height:30px; ">
																		<option value="birth certificate">Birth certificate</option>
																		<option value="mirage certificate">Marriage certificate</option>
																		<option value="Death_certificate">Death_certificate</option>
																		<option value="Divorce_certificate">Divorce_certificate</option>
																	</select>
																</td>
															</tr>
															<tr>
																<td>Husband Full Name:*</td>
																<td></td>
																<td><input class="form-input" type="text" name="husbandfulname" id="husbandfulname" required pattern="[aA-zZ]{1,}" title="enter only character" /></td>
															</tr>
															<tr>
																<td>Wife Full Name:*</td>
																<td></td>
																<td><input class="form-input" type="text" name="wifefulname" id="wifefulname" required pattern="[aA-zZ]{1,}" title="enter only character" /></td>
															</tr>
															<tr>
																<td>Evidence one full Name:*</td>
																<td></td>
																<td><input class="form-input" type="text" name="evidence1fulname" id="evidence1fulname" required pattern="[aA-zZ]{1,}" title="enter only character" /></td>
															</tr>
															<tr>
																<td>Reason to Certify:*</td>
																<td></td>
																<td>
																	<textarea style="width:223px;" rows="7" name="certify_reason">
					<?php if ($opr == "upd_certificate") echo $certify_reason; ?>
				</textarea>
																</td>
															</tr>
															<tr>
																<td></td>
																<td></td>
																<td><br />
																	<input class="btn" type="button" value="Clear" id="reset" />
																	<?php if ($opr == "gmarriage_certificate") {
																	?>
																		<input class="btn" type="submit" name="gmarriage_certificate_now" value="Gmarriage Certificate" /> <br /> <br />
																	<?php } elseif ($opr == "upd_certificate") {

																	?>
																		<input class="btn" type="submit" name="upd_certificate_now" value="Update Certificate" /> <br /> <br />
																	<?php }  ?>
																</td>
															</tr>
														</table>
													</fieldset>
												</form>


											<?php } ?>
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

</body>

</html>

</table>
</fieldset>
</form>