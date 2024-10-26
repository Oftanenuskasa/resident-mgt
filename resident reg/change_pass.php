<?php require_once('config.php'); ?>
<?php
if (isset($_GET["attempt"])) {
	$attempt = $_GET["attempt"];
}
?>
<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script>
		function validatePassword() {
			var currentPassword, newPassword, confirmPassword, output = true;

			currentPassword = document.frmChange.currentPassword;
			newPassword = document.frmChange.newPassword;
			confirmPassword = document.frmChange.confirmPassword;

			if (!currentPassword.value) {
				currentPassword.focus();
				document.getElementById("currentPassword").innerHTML = "required";
				output = false;
			} else if (!newPassword.value) {
				newPassword.focus();
				document.getElementById("newPassword").innerHTML = "required";
				output = false;
			} else if (!confirmPassword.value) {
				confirmPassword.focus();
				document.getElementById("confirmPassword").innerHTML = "required";
				output = false;
			}
			if (newPassword.value != confirmPassword.value) {
				newPassword.value = "";
				confirmPassword.value = "";
				newPassword.focus();
				document.getElementById("confirmPassword").innerHTML = "not same";
				output = false;
			}
			return output;
		}
	</script>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style type="text/css">
		<!--
		body {
			background-color: #FFFFFF;
			margin-left: 10px;
			margin-right: 10px;
		}
		-->
	</style>
</head>

<body onLoad="timeimgs('1');">
	<table border="1" width="1299" cellspacing="0">
		<tr>
			<td colspan="3"><img src="image/dk.jpg" width="1299" height="100"></td>
		</tr>
		<tr>
			<td id="dropdown" colspan="3">
				<li><b><a href="officer.php"><em><b>Home</b></em></a></li>
				<li><a href="#"><em>Register</em></a>
					<ul class="sub1">
						<li><a href="population.php"><b><i>Population</i></b></a></li>
						<li><a href="house.php"><b><i>House</i></b></a></li>
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
						<li><a href="counthouse.php"><b><i>count house</i></b></a></li>
					</ul>
				</li>
				<li><a href="#"><em>Send request</em></a>
					<ul class="sub1">
						<li><a href="sendrequestttt.php"><b><i>To chairman </i></b></a></li>
						<li><a href="sendrequestttt.php"><b><i> To administrator</i></b></a></li>
					</ul>
				</li>
				<li><a href="sendrequestttt.php"><b></b></a></li>
				<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li><a href="change_password.php"><b>Change password</b></a></li>
				<li><a href="Logout.php"><em>Logout</em></a></li>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="#CCCCCC" cellspacing="0">
					<tr>
						<td width="200" height="436" valign="top">
							<table border="0" width="316" cellspacing="0">
								<tr>
									<td width="314" id="topnav">
										<li><em><a href="viewpop.php"><b>View population </b></a></em></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><em><a href="viewhouse.php"><b>View house </b></a></em></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><em><a href="viewrequesttttt.php"><b>View request from chairman </b></a></em></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><em><a href="viewrequesttttt.php"><b>View request from resident </b></a></em></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><em><a href="viewrequesttttt.php"><b>View comment </b></a></em></li>
									</td>
								</tr>

							</table>
						</td>
						<td width="900" height="400" valign="top" bgcolor="white"><br /><br />
							<div><b>Change Password Form</b></div>
							<hr />
							<fieldset>
								<legend align="center">
									<div class="legend"><b>Please fill-up the space provided below</b></div>
								</legend>
								<br>
								<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
									<div style="width:500px;">
										<div class="message"><?php if (isset($message)) {
																	echo $message;
																} ?></div>
										<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
											<tr>
												<td width="40%"><label>
														<font color="red">*</font>Current Password:
													</label></td>
												<td width="60%"><input type="password" required name="oldpassword" id="oldpassword"></td>
											</tr>
											<tr>
												<td><label>
														<font color="red">*</font>New Password:
													</label></td>
												<td><input type="password" required name="newpassword" id="newPassword"></td>
											</tr>
											<td><label>
													<font color="red">*</font>Confirm Password:
												</label></td>
											<td><input type="password" required name="cnewpassword" id="cnewpassword"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="change" value="Change" class="btnSubmit">
							<input type="reset" name="reset" value="reset" class="btnSubmit">
						</td>
					</tr>
				</table>
				</div>
				</form>
				</fieldset>
				<hr />
				<?php
				if (isset($_POST['change'])) {
					// Validate new password length
					if (strlen($_POST['newpassword']) < 6 || strlen($_POST['newpassword']) > 25) {
						echo "<font color='red'>Please enter a new password between 6 and 25 characters.</font>";
					} elseif (strlen($_POST['cnewpassword']) < 6 || strlen($_POST['cnewpassword']) > 25) {
						echo "<font color='red'>Please enter the confirm new password between 6 and 25 characters.</font>";
					} elseif ($_POST['newpassword'] != $_POST['cnewpassword']) {
						echo "<font color='red'>The new password and confirm new password must be equal.</font>";
					} else {
						// Connect to the database
						$con = mysqli_connect("localhost", "root", "nasis", "resident");
						if (!$con) {
							die("Connection failed: " . mysqli_connect_error());
						}

						// Sanitize inputs
						$oldpassword = mysqli_real_escape_string($con, $_POST['oldpassword']);
						$newpassword = mysqli_real_escape_string($con, md5($_POST['newpassword'])); // Hash the new password

						// Check if the old password is correct
						$sql = "SELECT * FROM user WHERE password='$oldpassword'";
						$result = mysqli_query($con, $sql);
						if (mysqli_num_rows($result) > 0) {
							// Update the password
							$update_sql = "UPDATE user SET password='$newpassword' WHERE password='$oldpassword'";
							if (mysqli_query($con, $update_sql)) {
								echo "Password is successfully changed.<br>";
							} else {
								echo "Error updating password: " . mysqli_error($con);
							}
						} else {
							echo "<font color='red'>Please enter the correct old password.</font>";
						}

						// Close the database connection
						mysqli_close($con);
					}
				}
				?>

			</td>
		</tr>
	</table>
	</td>
	</td>
	<td width="300" height="400" valign="top" bgcolor="#CCCCCC">

		</table>
	</td>
	</tr>
	</tr>
	<tr>
		<td colspan="3" height="25">
			<table border="0" align="center" width="100%" bgcolor="#666666" cellspacing="0">
				<tr>
					<td>
						<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30"></a>
						<a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25"></a>
						<a href="http://twitter.com" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30"></a>
						<a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="40" height="30"></a>
					</td>
					<td>
						<font face="Times New Roman" color="black"><b> DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b>
						</font>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
</body>

</html>