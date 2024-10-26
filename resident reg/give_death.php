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
										<li><a href="give_birth.php"><b>View bierth cer</b></a></li>
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
										<div><b>Search birth id</b></div>
										<hr />
										<form action="give_death.php" onsubmit='return formValidator()' method='POST'>
											<table>
												<tr>
													<td class="search">Enter death id:</td>
													<td><input type="text" name="searchs" size="40px" placeholder="Provide Here..." /></td>
													<td><input type="submit" value="Search" name="search" style="cursor:pointer;" /></td>
												</tr>
											</table>
										</form>
										<?php
										if (isset($_POST['search'])) {
											$id = $_POST['searchs'];
											$sql = "SELECT * FROM death WHERE drid='{$id}'";
											$result = mysqli_query($conn, $sql);
											$count = mysqli_num_rows($result);
											if ($count < 1) {
												die('<font color="red">This Id Number is not found</font>');
											} else {
												echo "<center>";
												echo "<table border='1' style='width:650px;border-radius:10px;' align='center'>
<tr>
<th width='150px'>DR_ID.</th>
<th>Names</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
												while ($row = mysqli_fetch_array($result)) {
													$ctrl = $row['drid'];
													print("<tr>");
													print("<td>" . $row['drid'] . "</td>");
													print("<td>" . $row['kebeleid'] . '&nbsp;' . $row['placeofdeath'] . '&nbsp;' . $row['placeofgrave'] . "</td>");
													print("<td align = 'center' width = '1'><a href = 'view_death.php?key1=" . $ctrl . "'><img width='25px' height='25px' src = 'image/search.png' title='View Detail'></a></td>
       <td align = 'center' width = '1'><a href = 'Edit_death.php?key1=" . $ctrl . "'><img src = 'image/Edit.png' width='25px' height='25px' title='Edit' ></a></td>
		<td align = 'center' width = '1'><a href = 'delete_death.php?key1=" . $ctrl . "'><img width='25px' height='25px' src = 'image/Delete.png' title='Delete'></img></a></td>
		");
													print("</tr>");
												}
												print("</table>");
												echo "</center>";
											}
										}
										mysqli_close($conn);
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