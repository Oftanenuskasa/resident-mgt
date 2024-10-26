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
							<script type="text/javascript">
								function showDiv(prefix, chooser) {
									for (var i = 0; i < chooser.options.length; i++) {
										var div = document.getElementById(prefix + chooser.options[i].value);
										div.style.display = 'none';
									}

									var selectedOption = (chooser.options[chooser.selectedIndex].value);
									if (selectedOption == "1") {
										displayDiv(prefix, "1");
									}
									if (selectedOption == "2") {
										displayDiv(prefix, "2");
									}
									if (selectedOption == "3") {
										displayDiv(prefix, "3");
									}
									if (selectedOption == "4") {
										displayDiv(prefix, "4");
									}
									if (selectedOption == "5") {
										displayDiv(prefix, "5");
									}
								}

								function displayDiv(prefix, suffix) {
									var div = document.getElementById(prefix + suffix);
									div.style.display = 'block';
								}
							</script>
							<table id="contentbox">
								<tr>
									<td>
										<script language="javascript">
											function Clickheretoprint() {
												var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
												disp_setting += "scrollbars=yes,widtd=900, height=400, left=100, top=25";
												var content_vlue = document.getElementById("print_content").innerHTML;

												var docprint = window.open("", "", disp_setting);
												docprint.document.open();
												docprint.document.write('<html><head><title>List of Passer</title>');
												docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');
												docprint.document.write(content_vlue);
												docprint.document.write('</body></html>');
												docprint.document.close();
												docprint.focus();
											}
										</script>
										<style>
											#print_content {
												width: 434px;
												margin: 0 auto;
											}
										</style>

										<div id="print_content">
											<div style="margin-left:1%; margin-top:50px; text-align:center;">
												<strong>Marriage Report</strong><br />
												From:&nbsp;<strong><?php echo htmlspecialchars($_POST['dayfrom']); ?></strong>&nbsp;&nbsp;To:&nbsp;<strong><?php echo htmlspecialchars($_POST['dayto']); ?></strong>
											</div>

											<div style="margin-left:130%; width:50px;  text-align:center;"><a href="vital_registrar_report.php"><img src="image/btn_back.gif"></a></div>
											<br>

											<table width="635" border="1" align="center" cellpadding="0" cellspacing="0">
												<thead>
													<tr bgcolor="#cccccc" style="margin-bottom:10px;">
														<th width="120">
															<div align="center">Mrid</div>
														</th>
														<th width="115">
															<div align="center">Husband Full name</div>
														</th>
														<th width="136">
															<div align="center">Wife Full Name</div>
														</th>
														<th width="114">
															<div align="center">Type of Marriage</div>
														</th>
														<th width="114">
															<div align="center">Evidence1 Full Name</div>
														</th>
														<th width="114">
															<div align="center">Evidence2 Full Name</div>
														</th>
														<th width="114">
															<div align="center">Evidence3 Full Name</div>
														</th>
														<th width="114">
															<div align="center">Court Name</div>
														</th>
														<th width="108">
															<div align="center">Place Of Marriage</div>
														</th>
														<th width="114">
															<div align="center">Date</div>
														</th>
														<th width="113">
															<div align="center">Register</div>
														</th>
													</tr>
												</thead>
												<tbody>
													<?php

													$a = $_POST['dayfrom'];
													$b = $_POST['dayto'];


													$result3 = mysqli_query($conn, "SELECT * FROM marriage where register BETWEEN '$a' AND '$b'");


													while ($row3 = mysqli_fetch_array($result3)) {
														echo '<tr>';
														$dasd = $row3['mrid'];
														$result4 = mysqli_query($conn, "SELECT * FROM marriage where mrid='$dasd'");


														while ($row4 = mysqli_fetch_array($result4)) {
														}
														echo '<td><div align="center">' . $row3['mrid'] . '</div></td>';
														echo '<td><div align="center">' . $row3['husbandfulname'] . '</div></td>';
														echo '<td><div align="center">' . $row3['wifefulname'] . '</div></td>';
														echo '<td><div align="center">' . $row3['typeofmarriage'] . '</div></td>';
														echo '<td><div align="center">' . $row3['evidence1fulname'] . '</div></td>';
														echo '<td><div align="center">' . $row3['evidence2fulname'] . '</div></td>';
														echo '<td><div align="center">' . $row3['evidence3fulname'] . '</div></td>';
														echo '<td><div align="center">' . $row3['courtname'] . '</div></td>';
														echo '<td><div align="center">' . $row3['placeofmarriage'] . '</div></td>';
														echo '<td><div align="center">' . $row3['date'] . '</div></td>';
														echo '<td><div align="center">' . $row3['register'] . '</div></td>';
														echo '</tr>';
													}

													?>

										</div>
									</td>
								</tr>
								</tbody>

							</table>
							</div><br><br>
							<div style="margin-left:90%; width:50px;  text-align:center;"> <a href="javascript:Clickheretoprint()"><img src="image/DPIC_36483.jpg" /></a></div>
						</td>
					</tr>
				</table>
			</td>
			<td width="50" height="600" valign="top" bgcolor="pink">
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