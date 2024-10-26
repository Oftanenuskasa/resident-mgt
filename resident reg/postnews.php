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
			var news = document.getElementById('new');
			var subject = document.getElementById('subject');
			var content = document.getElementById('content');
			//var times=document.getElementById('times');

			// Check your input in the order that it appears in the form!
			if (isAlphanumeric(news, "Please enter your valid news id in number and alphabet")) {
				if (lengthRestriction(news, 1, 10, "for news id")) {
					if (isAlphanumeric(subject, "Please enter your valid Subject in number and alphabet")) {
						if (lengthRestriction(subject, 1, 300, "for your house number")) {
							if (isAlphanumeric(content, "please fill your content letters only")) {
								if (lengthRestriction(content, 3, 200, "for your content")) {
									//if(isAlphanumeric( times, "Please enter the time")){
									return true;
								}
							}
						}
					}
				}
			}
		}
		return false;

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
	<table border="0" width="129" cellspacing="0">
		<tr>
			<td colspan="3"><img src="image/dk.jpg" width="1299" height="60"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li><b><a href="officer.php">Home </a></li>
				<li><a href="population.php">Register Population</a></li>
				<li> <a href="house.php">Register House</a></li>
				<li><a href="postnews.php">Post News</a></li>
				<li><a href="sendrequestttt.php"><b>Send Reqst to Chairman</b></a></li>
				<li><a href="sendrequestttt.php"><b></b></a></li>
				<li><a href="sendrequestttt.php"><b></b></a></li>



				<li><a href="Logout.php">Logout</a></li>
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
										<center><b>Record Officer Page</b></center>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="officerreport.php"><b>Generate Report</b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="viewpop.php"><b>View Population Info</b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="viewhouse.php"><b>View House</b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="viewrequesttttt.php"><b>View Request from chairman</b></a></li>
									</td>
								</tr>
							</table>
						</td>
						<td width="900" height="600" valign="top" bgcolor="cyan"><br><br>
							<script language="javascript">
								function formValidat() {
									if (document.getElementById("new").value == "") {
										alert('please enter news id!!');
										document.getElementById("new").focus();
										return false;
									} else if (document.getElementById("subject").value == "") {
										alert('Please enter the subject of news!!');
										document.getElementById("subject").focus();
										return false;
									} else if (document.getElementById("content").value == "") {
										alert('Please enter news content!!');
										document.getElementById("content").focus();
										return false;
									} else if (document.getElementById("times").value == "") {
										alert('Please enter the the date!!');
										document.getElementById("times").focus();
										return false;
									}
								}
							</script>
							<div><b>Post News</b></div>
							<hr />
							<fieldset>
								<legend align="center">
									<div class="legend"><b>Please Enter News the space provided below</b></div>
								</legend>
								<br>
								<div>
									<form onsubmit='return formValidat()' action='postnews.php' method='POST'>
										<table>
											<tr>
												<td>
													<font color="red">*</font>NewsId :
												</td>
												<td><input type="text" size="22px" name="new" id="new" placeholder="Enter newsid..."></td>
												<td>
													<font color="red">*</font>Subject :
												</td>
												<td><input type="text" size="15px" name="subject" id="subject" placeholder="Enter subject..."></td>
											</tr>
											<tr>
												<td>
													<font color="red">*</font>NewsContent :
												</td>

												<td><textarea name="content" id="content" cols="21" rows="6" pattern="\D{4,50}" placeholder="Enter purpose..."></textarea></td>
												<td>
													<font color="red">*</font>TimesOfSent :
												</td>
												<td><input type="text" size="11px" name="times" id="times" class="mine_text_field_7" readonly required placeholder="Enter timesofsent...">
													<a href="javascript:NewCssCal('times','yyyymmdd')"><img src="image/cal.gif" width="20" height="21" border="0" />
												</td>
											</tr>
											<tr>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td><input type='submit' value='Post' name='sub' onClick="return check(this.form);" />
													<input type='reset' value='clear'>
												</td>
											</tr>
										</table>
									</form>
								</div>
							</fieldset>
							<?php
							if (isset($_POST['sub'])) {
								if (!$conn) {
									die('Could not connect: ' . mysqli_error($conn));
								}

								mysqli_select_db($conn,"resident");
								$sql = "INSERT INTO news (NewsId,Subject,NewsContent,TimesOfSent)
VALUES
('$_POST[new]','$_POST[subject]','$_POST[content]','$_POST[times]')";
								if (!mysqli_query($conn,$sql)) {
									die('Error: ' . mysqli_error($conn));
								} else {
									echo "Post Successfully";
								}
							}
							mysqli_close($conn)
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