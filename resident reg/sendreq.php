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
				<li><b><a href="officer.php">Home </a></li>
				<li><a href="population.php">Register Population</a></li>
				<li> <a href="house.php">Register House</a></li>
				<li><a href="postnews.php">Post News</a></li>
				<li><a href="sendrequestttt.php"><b>Send Reqst to Chairman</b></a></li>
				<li><a href="postnews.php"></a></li>
				<li><a href="sendrequestttt.php"><b></b></a></li>


				<li><a href="Logout.php">Logout</a></li>
			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="pink" cellspacing="0">
					<tr>
						<td width="50" height="400" valign="top">
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
										<li><a href="View_req.php"><b>View Request from chairman</b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="sendreq_req.php"><b>Send Responce to user </b></a></li>
									</td>
								</tr>
							</table>
						</td>
						<td>
							<br><br>
						</td>

						<td width="900" height="600" valign="top" bgcolor="cyan"><br><br>
							<script language="javascript">
								function check() {
									if (document.getElementById("first").value == "") {
										alert('please enter the house number!!');
										document.getElementById("first").focus();
										return false;
									} else if (document.getElementById("em").value == "") {
										alert('Please enter the date!!');
										document.getElementById("em").focus();
										return false;
									} else if (document.getElementById("com").value == "") {
										alert('Please enter the news content!!');
										document.getElementById("com").focus();
										return false;
									}
								}
							</script>
							<div><b>Request Form</b></div>
							<hr />
							<fieldset>
								<legend align="center">
									<div class="legend"><b>Please Enter Your request the space provided below</b></div>
								</legend>
								<br>
								<div>
									<form name="request" onsubmit='return check()' action='sendreq.php' method='POST'>

										<table>
											<tr>
												<td>Fulname :</td>
												<td><input type="text" size="15px" name="fulname" id="fulname" placeholder="Enter id..."></td>
											<tr>
												<td>Kebele_ID :</td>
												<td><input type="text" size="15px" name="id" id="id" placeholder="Enter id.. "></td>
											</tr>
											<tr>
												<td>Kebele :</td>
												<td><label>
														<select name="keb" id="keb">
															<option>Select kebele</option>
															<option>01</option>
															<option>02</option>
															<option>03</option>
															<option>o4</option>
															<option>05</option>
															<option>06</option>
															<option>07</option>
															<option>08</option>
															<option>08</option>
															<option>09</option>
															<option>10</option>
															<option>11</option>
															<option>12</option>
															<option>13</option>
															<option>14</option>
															<option>15</option>
															<option>16</option>
															<option>17</option>
															<option>01</option>
															<option>19</option>
															<option>20</option>
															<option>21</option>
														</select>
													</label></td>
											</tr>
											<tr>
												<td>Purpose :</td>
												<td><textarea name="purp" id="purp" cols="15" rows="6" pattern="\D{4,50}" placeholder="Enter purpose..."></textarea> </td>
											</tr>
											<tr>
												<td>
													<font color="red">*</font>Date:
												</td>

												<td><input type="text" size="10px" id='date' name='date' class="mine_text_field_7" readonly required placeholder="Enter DateOfTaken..." />
													<a href="javascript:NewCssCal('date','yyyymmdd')"><img src="image/cal.gif" width="20" height="21" border="0" />
												</td>
											</tr>
											<tr>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td><input type="submit" name="submit" style="cursor:pointer" value="Send request" onClick="return         check(this.form);" />
													<input type='reset' value='clear'>
												</td>
											</tr>
										</table>
									</form>
								</div>
							</fieldset>
							<?php
							if (isset($_POST['submit'])) {
								if (!$conn) {
									die('Could not connect: ' . mysqli_error($conn));
								}

								mysqli_select_db($conn,"resident");
								$sql = "INSERT INTO sendreq (fulname,kebele_ID,chocie,purpose,date)
VALUES
('$_POST[fulname]','$_POST[id]','$_POST[keb]','$_POST[purp]','$_POST[date]')";
								if (!mysqli_query($conn,$sql)) {
									die('Error: ' . mysqli_error($conn));
								} else {
									echo 'Request successfully sent';
								}
							}
							mysqli_close($conn)
							?>
						</td>
					</tr>
				</table>
			</td>
			</td>
			<td width="50" height="400" valign="top" bgcolor="pink">

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