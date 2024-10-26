<?php require_once('config.php'); ?>
<?php
if (isset($_GET["attempt"])) {
	$attempt = $_GET["attempt"];
}
?><style type="text/css">
	<!--
	body {
		background-color: #FFFFCC;
		margin-left: 10px;
		margin-top: 0px;
		margin-right: 10px;
		margin-bottom: 0px;
	}
	-->
</style>
<div id="content">
	<br><br>
	<h3 style="text-align: center;">General report about all data. </h3>
	<?php
	$connection = mysqli_connect('localhost', 'root', 'nasis');
	$database = mysqli_select_db($conn, 'resident');
	$id = $_SESSION['id'];
	if (!$connection) {
		echo "not connected to server" . mysqli_error($conn);
	}
	if (!$database) {
		echo "database is not selected!" . mysqli_error($conn);
	}
	//$id=$_SESSION['id'];
	$birth = mysqli_query($conn, "select * from birth where brid='$id'");
	$birth_num = mysqli_num_rows($birth);
	$death = mysqli_query($conn, "select * from death Where drid='$id'");
	$death_num = mysqli_num_rows($death);
	$marriage = mysqli_query($conn, "select * from marriage Where mrid='$id'");
	$marriage_num = mysqli_num_rows($marriage);
	$divorce = mysqli_query($conn, "select * from divorce Where ddrid='$id'");
	$divorce_num = mysqli_num_rows($divorce);
	?>
	<table style="width:90%;margin-left: 50px;text-align: center;">
		<thead>
			<tr>
				<th>Services</th>
				<th>Number of People</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Number of Child registered</td>
				<td style="text-align: center;"><?php echo $birth_num; ?></td>
			</tr>
			<tr>
				<td>Number of Deathed Person</td>
				<td style="text-align: center;"><?php echo $death_num; ?></td>
			</tr>
			<tr>
				<td>Number of Married person</td>
				<td style="text-align: center;"><?php echo $marriage_num; ?></td>
			</tr>
			<tr>
				<td>Number of Divorced person</td>
				<td style="text-align: center;"><?php echo $divorce_num; ?></td>
			</tr>
		</tbody>
	</table>
	<!-- <a href="report_type.php" style="margin-left: 750px;color: red;">Generate Report</a> -->
</div>