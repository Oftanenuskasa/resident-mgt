<?php require_once('config.php'); ?>

<?php
if (isset($_GET["attempt"])) {
	$attempt = $_GET["attempt"];
}
?>
<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
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
				<li><b><a href="officer.php">Home </a></li>
				<li><a href="population.php">Register Population</a></li>
				<li> <a href="house.php">Register House</a></li>
				<li><a href="postnews.php">Post News</a></li>
				<li><a href="sendrequestttt.php">send request to chairman</a></li>
				<li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
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
							<table>
								<tr>
									<td>
										<div><b>View Divorce Form</b></div>
										<hr />
										<form action="give_divorce.php" onsubmit='return formValidator()' method='POST'>
											<table>
												<tr>
													<td class="search">Enter Idnumber:</td>
													<td><input type="text" name="searchs" size="40px" placeholder="Provide Here..." /></td>
													<td><input type="submit" value="Search" name="search" style="cursor:pointer;" /></td>
												</tr>
											</table>
										</form>

										<?php
										$ctrl = $_REQUEST['key1'];
										$query = "SELECT * FROM divorce where ddrid='{$ctrl}'";
										$result = mysqli_query($conn, $query);
										$count = mysqli_num_rows($result);
										if ($count == 1) {
											while ($row = mysqli_fetch_array($result)) {
												$row0 = $row[0];
												$row1 = $row[1];
												$row2 = $row[2];
												$row3 = $row[3];
												$row4 = $row[4];
												$row5 = $row[5];
												$row6 = $row[6];
												$row7 = $row[7];
												$row8 = $row[8];
											}
										?>
											<form action='eDit_divorc.php' method='POST'>
												<table valign='top' align="center" style="width:250px; margin-top:-110px; margin-top:-220px; height:150px;border-radius:16px;border:2px solid #686868">
													<tr>
														<td>ddrid:</td>
														<td><input type='text' name='drid' readonly value="<?php echo $row0 ?>"></td>
													</tr><br />
													<tr>
														<td>mrid:</td>
														<td><input type='text' name='mrid' readonly value="<?php echo $row1 ?>"></td>
													</tr><br />
													<tr>
														<td>reasonofdivorce:</td>
														<td><input type='text' name='reasonofdivorce' value="<?php echo $row2 ?>"></td>
													</tr><br />
													<tr>
														<td>reasonofdivorce:</td>
														<td><input type='text' name='nameofcourt' value="<?php echo $row3 ?>"></td>
													</tr><br />
													<tr>
														<td>numberofchildren:</td>
														<td><input type='text' name='numberofchildren' value="<?php echo $row4 ?>"></td>
													</tr><br />
													<tr>
														<td>registrarname:</td>
														<td><input type='text' name='registrarname' value="<?php echo $row5 ?>">
													</tr>
									</td><br />
								<tr>
									<td>placeofdivorce:</td>
									<td><input type='text' name='placeofdivorce' value="<?php echo $row6 ?>"></td>
								</tr><br />
								<tr>
									<td>date:</td>
									<td><input type='text' name='date' value="<?php echo $row7 ?>"></td>
								</tr><br />
								<tr>
									<td>register:</td>
									<td><input type='text' name='register' value="<?php echo $row8 ?>"></td>
								</tr><br />
								<tr>
									<td><input type='submit' name='update' value='update'>
								</tr>
						</td>
				</table>
				</form>
			<?php
										}


			?>

			<?php
			if (isset($_POST['update'])) {
				$ddrid = $_POST['drid'];
				$mrid = $_POST['mrid'];
				$reasonofdivorce = $_POST['reasonofdivorce'];
				$nameofcourt = $_POST['nameofcourt'];
				$numberofchildren = $_POST['numberofchildren'];
				$registrarname = $_POST['registrarname'];
				$placeofdivorce = $_POST['placeofdivorce'];
				$date = $_POST['date'];
				$register = $_POST['register'];
				$update = mysqli_query($conn, "update divorce set drid='$ddrid',mrid='$mrid',reasonofdivorce='$reasonofdivorce',nameofcourt='$nameofcourt',numberofchildren='$numberofchildren',registrarname='$registrarname',placeofdivorce='$placeofdivorce',date='$date',register='$register'where ddrid='{$id}'") or die(mysqli_error($conn));
				echo "<h4><font color=green>update Sucessfully</h4></font>";
				echo "<script>window.location='give_divorce.php';</script>";
				echo "<script>alert('update Sucessfully !!');</script>";
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