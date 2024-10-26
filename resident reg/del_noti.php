<?php
require_once('config.php');
session_start();
error_reporting(0);
if (isset($_SESSION['Username'])) {
	$_username = $_SESSION['Username'];
}
?>
<?php
$user = $_SESSION['Username'];
$result = mysqli_query($conn, "select * from user where Username='$user'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$accountid = $row['Username'];
$name = $row['Name'];
?>
<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">

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

<body onload="parent.member()" onload="noBack();" onpageshow="if(event.persisted) noBack(); " bgcolor='#FFFFFF'>
	<br>
	<table border="0" width="97%" cellspacing="0">
		<tr>

			<td colspan="3"><img src="image/f.gif" width="15%" height="140"><img src="image/dk.jpg" width="70%" height="140"><img src="image/Flag_of_Southern_Ethiopia.png" width="15%" height="140"></td>
		</tr>

		<tr>
			<td id="dropdown" colspan="3">
				<li><a href="resident.php"> <b>Home</b></a></li>
				<li><a href="comment.php"><b><i>Give Comment</i></b></a></li>
				<li><a href="sendclearance.php"><b>Clearance Request</b></a></li>
				<li><a href="#"><b>Idcard Request</b></a>
					<ul class="sub1">
						<li><a href="sendrequest.php"><b><i>For you Idcard</i></b></a></li>
						<li><a href="otehrrequset.php"><b><i>His/her firends Idcard</i></b></a></li>
						<li><a href="aginrequset.php"><b><i>For missing or renew</i></b></a></li>

					</ul>
				</li>
				<li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				<li><a href="news_resident.php"><b>Dashboard</b></a></li>
				<li><a href="change.php"><b>Change password</b></a></li>

				<li><a href="indexs.php"><b>Download clearance</b></a></li>
				<li><a href="Logout.php"><b>Logout</b></a></li>
			</td>
		</tr>

		<tr>
			<table border="0" bgcolor="#FFFFFF" cellspacing="0">
				<tr>
					<td width="200" height="400" valign="top">
						<table border="0" width="200" cellspacing="0">
						</table>
					<td width="83.35%" height="400" valign="top" bgcolor="#FFFFFF" <br><br>
						<?php
						$key = $_REQUEST['key'];
						$result = mysqli_query($conn,"DELETE FROM `noti` WHERE id='$key'");
						if ($result)
							header('location:resnoti.php');


						mysqli_close($conn);
						?>


					</td>

				</tr>
			</table>
			</td>
		</tr>

		<tr>
			<td colspan="3" height="25">
				<table border="0" align="center" width="100%" bgcolor="#eee" cellspacing="0">
					<tr>
						<td>
							<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30"></a>
							<a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25"></a>
							<a href="http://twitter.com" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30"></a>
							<a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="40" height="30"></a>
						</td>
						<td>
							<font face="Times New Roman" color="black"><b>DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b></font>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>

</html>