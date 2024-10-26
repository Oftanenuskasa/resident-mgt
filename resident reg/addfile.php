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
	<script type="text/JavaScript">

		var count = 0;
  function member() {
    if (parent.count ==0) {
       document.parent.src = "image/dj.jpg";
	 title="evahotel build";
       count = 1;
    }
     else if (parent.count ==1) {

       document.parent.src = "image/df.jpg";
       count = 2;
    }
 else if(parent.count ==2) {
       document.parent.src = "image/dg.jpg";
       count = 3;
    }
 else {
 document.parent.src = "image/dh.jpg";
       count = 0;

}
    setTimeout("member()", 3000);
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
				<li><a href="filter.php"><b><i>UPLOAD</i></b></a></li>
				<li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</li>


				<li><a href="indexs.php"><b><i>DOWNLOAD</i></b></a></li>

			</td>
		</tr>
		<tr>
			<td>
				<table border="0" bgcolor="#0B0B0B" cellspacing="0">
					<tr>
						<td width="50" height="600" valign="top">
							<table border="0" width="50" cellspacing="0">
								<tr>
									<td bgcolor="purple">
										<center><b>HOME PAGE</b></center>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="cashier.php"><b><i>HOME</i></b></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="comment.php"><i>COMMENT</i></a></li>
									</td>
								</tr>
								<tr>
									<td id="topnav">
										<li><a href="sendrequest.php"><i>SEND REQUEST</i></a></li>
									</td>
								</tr>

								<tr>
									<td id="topnav">
										<li><a href="new.php"><i>RESPONSE</i></a></li>

									</td>
								</tr>


								<tr>
									<td id="topnav">
										<li><a href="Logout.php"><b><i>LOGOUT</i></b></a></li>
									</td>
								</tr>
								<td>
									<br><br>
								</td>
								<tr>
									<td>

									</td>
								</tr>
							</table>
						</td>
						<td width="900" height="600" valign="top" bgcolor="cyan"><br><br>
							<script language="javascript">
								function formValidator() {
									if (document.getElementById("first").value == "") {
										alert('please enter the first name!!');
										document.getElementById("first").focus();
										return false;
									} else if (document.getElementById("date").value == "") {
										alert('Please enter the date!!');
										document.getElementById("date").focus();
										return false;
									} else if (document.getElementById("com").value == "") {
										alert('Please enter the your comment!!');
										document.getElementById("com").focus();
										return false;
									}
								}
							</script>

							<hr />
							<fieldset>
								<legend align="center">
									<div class="legend"><b><i>PLEASE ENTER YOUR COMMENT THE SPACE PROVIDED BELOW</i></b></div>
								</legend>
								<br>
								<div>

									<?php

									// Inialize session
									session_start();

									// Check, if username session is NOT set then this page will jump to login page
									if (!isset($_SESSION['username'])) {
										header('Location: filter.php');
									} else {
										$uname = $_SESSION['username'];
										$desired_dir = "user_data/$uname/";
									}
									?>
									<!DOCTYPE html>
									<html lang="en">

									<body>

										<div id="mainsection">
											<div class="main">
												<button class="btn btn-success"><i class="icon-upload icon-white"></i><a href="addfile.php"><i>ADD FILE</i></a></button>
												<hr>
												<div id="container">
													<div class="form_head">Add File Form</div>
													<hr>
													<div class="control-group">
														<label class="control-label">Name</label>
														<div class="controls">
															<input type="text" name="uploader" value="<?= $uname ?>" readonly />
														</div>
													</div>
													<div class="control-group">
														<?php
														if (isset($_POST['categ'])) {
															$filter = $_POST['categ'];
															if ($filter == 'audio/*') {
																$filtername = "Music";
															} else if ($filter == 'image/*') {
																$filtername = "Images";
															} else if ($filter == 'video/*') {
																$filtername = "Videos";
															} else if ($filter == 'application/*') {
																$filtername = "Documents";
															} else {
																$filtername = "Text Files";
															}
														}
														?>
														<label class="control-label">Category</label>
														<div class="controls">
															<form action="" method="post">
																<select name="categ" id="categ" onChange="this.form.submit();" required>
																	<option value="<?= $filter ?>"><?= $filtername ?></option>
																	<option value=""></option>
																	<option value="audio/*">Music</option>
																	<option value="image/*">Images</option>
																	<option value="video/*">Videos</option>
																	<option value="application/*">Documents</option>
																	<option value="text/*">Text Files</option>
																</select>
															</form>
														</div>
													</div>
													<form method="post" action="addfile.php?cat=<?= $filtername ?>" enctype="multipart/form-data">
														<div class="control-group">
															<label class="control-label">Select Files</label>
															<input type="file" name="files[]" accept="<?= $filter ?>" multiple required />
														</div>
														<hr>
														<div class="controls">
															<input type="submit" class="btn btn-primary" value="UPLOAD">
															<a href="home1.php" type="reset" class="btn btn-warning"><i class="icon-remove icon-white"></i>CANCEL</a>
														</div>
													</form>
													<?php
													if (isset($_FILES['files'])) {
														$cat_name = $_GET['cat'];
														if ($cat_name == "") {
															echo "Category Required";
															header('Refresh: 1;url=addfile.php');
														} else {
															$count = 0;

															foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
																$file_name = $key . $_FILES['files']['name'][$key];
																$size = $_FILES['files']['size'][$key];
																$file_f = $size / 1024;
																$file_size = round($file_f);
																$file_tmp = $_FILES['files']['tmp_name'][$key];
																$file_type = $_FILES['files']['type'][$key];
																$path = "user_data/$uname/$file_name";


																if ($size == 0) {
																	echo "<h6 style='color:red'>$file_name Exeeds upload limit</h6>";
																} else {
																	include "config.php";

																	if (file_exists("$desired_dir" . $file_name)) {
																		echo "<h6 style='color:red'>" . $file_name . " already exists.</h6>";
																	} else {
																		$query = "INSERT into upload_data VALUES('$file_name','$file_size','$file_type','$cat_name','$uname','$path')";
																		if (mysqli_query($conn, $query)) {
																			move_uploaded_file($file_tmp, "$desired_dir" . $file_name);
																			//echo "<p style='color:blue'>$file_name Uploaded</p";
																			$count = $count + 1;
																		} else {
																			echo "Error in adding Files";
																		}
																	}
																}
															}
															echo "<h6 style='color:blue'>" . "$count Files Uploaded<h6>";
															header('Refresh: 2;url=addfile.php');
														}
													}
													?>
													<a href="home.php"><img src="image/b.PNG" alt="k"></a>
						</td>
						</div>
						</div>
						</div>
</body>

</html>


<td width="50" height="600" valign="top" bgcolor="pink">

	</table>
</td>
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
					<font face="Times New Roman" color="black"><b>
							<marquee> DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</marquee>
						</b>
					</font>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
</body>

</html>