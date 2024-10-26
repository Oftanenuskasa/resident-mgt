<?php require_once('config.php'); ?>
<?php
if (isset($_GET["attempt"])) {
	$attempt = $_GET["attempt"];
}
?>
<html>

<head>
	<link rel="stylesheet" href="css/mu.css" type="text/css">
	<script type="text/javascript">
		if (document.images) { // Preloaded images
			demo1 = new Image();
			demo1.src = "image/A.png";
			demo2 = new Image();
			demo2.src = "image/1.png";
			demo3 = new Image();
			demo3.src = "image/2.png";
			demo4 = new Image();
			demo4.src = "image/3.png";
		}

		function timeimgs(numb) { // Reusable timer
			thetimer = setTimeout("imgturn('" + numb + "')", 1500);
		}

		function imgturn(numb) { // Reusable image turner
			if (document.images) {

				if (numb == "4") { // This will loop the image
					document["im"].src = eval("demo4.src");
					timeimgs('1');
				} else {
					document["im"].src = eval("im" + numb + ".src");

					timeimgs(numb = ++numb);
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
				<li><b><a href="officer.php"><b>Home</b> </a></li>
				<li><a href="population.php"><b>Register Population</b></a></li>
				<li> <a href="house.php"><b>Register House</b></a></li>
				<li><a href="postnews.php"><b>Post News</b></a></li>
				<li><a href="sendrequestttt.php"><b>Send Reqst to Chairman</b></a></li>
				<li><b><a href="officer.php"><b></b> </a></li>
				<li><a href="population.php"><b></b></a></li>
				<li> <a href="house.php"><b></b></a></li>
				<li><a href="postnews.php"><b></b></a></li>
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
										<li><a href="viewrequest1.php"><b>View Request from chairman</b></a></li>
									</td>
								</tr>
							</table>
						</td>
						<td width="900" height="500" valign="top" bgcolor="white"><br><br>
							<?php
							$con = mysqli_connect("localhost", "root", "nasis");


							mysqli_select_db($conn,"resident");

							$result = mysqli_query($conn,"select * from request");

							echo "<br>";
							echo "<table border=5 >";

							echo "<tr><th>Sender House Number</th><th>Date</th><th>Purpose</th><th colspan=2 width=10%>Action</th></tr>";

							while ($row = mysqli_fetch_array($result)) {
								$ctr2 = $row['Purpose'];
								echo "<tr><td width=5%> $row[0] </td><td width=15%> $row[1] </td><td width=15%> $row[2] </td>" .

									"<td width=4% align = 'center' > <a href='deletereq1.php?key2=" . $ctr2 . "'>
	 <img src='image/Delete.png'  alt='delete'></a></td></tr>";
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