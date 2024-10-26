<?php

// Initialize session
session_start();

// Check if the username session is NOT set, then redirect to the login page
if (!isset($_SESSION['username'])) {
	header('Location: filter.php');
	exit(); // Terminate script after redirection
} else {
	$uname = $_SESSION['username'];
}

// Include the database connection file
include "db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>File Browser</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
	<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/dataTables.bootstrap5.min.css">

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<!-- DataTables JS -->
	<script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.6/js/dataTables.bootstrap5.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function () {
			$('#dtable').DataTable({
				"lengthMenu": [[5, 10, 15, 25, 50, 100, -1], [5, 10, 15, 25, 50, 100, "All"]],
				"pageLength": 15
			});
		});
	</script>

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

<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="home.php">FileMonster</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="home.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<a class="btn btn-primary pull-right" href="logout.php" title="Click to logout"><i
							class="icon-off"></i><?= $_SESSION['username'] ?></a>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<div id="mainsection">
		<div class="main">
			<a href="addfile.php" class="btn btn-success"><i class="icon-upload icon-white"></i> Add File</a>
			<hr>
			<table id="dtable" class="table">
				<thead>
					<th>File Name</th>
					<th>File Size</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
					// Perform query based on user role
					if ($uname != 'admin') {
						$query = "SELECT * FROM upload_data WHERE UPLOADED_BY=?";
					} else {
						$query = "SELECT * FROM upload_data WHERE UPLOADED_BY='admin'";
					}

					// Prepare statement
					$stmt = $conn->prepare($query);

					if ($stmt) {
						// Bind parameters
						if ($uname != 'admin') {
							$stmt->bind_param("s", $uname);
						}

						// Execute statement
						$stmt->execute();

						// Store result
						$result = $stmt->get_result();

						// Fetch data and display rows
						while ($rs = $result->fetch_assoc()) {
							$fname = $rs['FILE_NAME'];
							$size = $rs['FILE_SIZE'];
							$path = $rs['PATH'];
					?>
							<tr>
								<td><?= $fname ?></td>
								<td><?= $size ?> KB</td>
								<td><a href="<?= $path ?>" class="btn btn-primary"><i class="icon-download-alt icon-white"></i> Download</a></td>
							</tr>
					<?php
						}

						// Close statement
						$stmt->close();
					} else {
						// Handle query error
						echo "<tr><td colspan='3'>Error fetching data.</td></tr>";
					}

					// Close database connection
					$conn->close();
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>
