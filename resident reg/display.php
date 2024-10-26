<html>

<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<title>Download Files</title>
	<style type="text/css">
		#wrapper {
			margin: 0 auto;
			float: none;
			width: 70%;
		}

		.header {
			padding: 10px 0;
			border-bottom: 1px solid #CCC;
		}

		.title {
			padding: 0 5px 0 0;
			float: left;
			margin: 0;
		}

		.container form input {
			height: 30px;
		}

		body {

			font-size: 14;
			font-weight: bold;
		}
	</style>
</head>

<body align="center">

	<br>
	<div class="container home">
		<font face="comic sans ms">
			<h3>
				<center> List of Files that can be download and delete </center>
			</h3>
		</font>

		<table class="table table-bordered">
			<thead>
				<table border='1' style='width:500px; height:300px;border:1px solid black;border-radius:10px;' align='center'>
					<tr>
						<th>
							<font face="comic sans ms">Subject</font>
						</th>
						<th>
							<font face="comic sans ms">Topic </font>
						</th>
						<th>
							<font face="comic sans ms">Download Files </font>
						</th>
						<th>
							<font face="comic sans ms">Delete </font>
						</th>
					</tr>
				</table>
			</thead>
			<tbody>
				<?php

				$link = mysqli_connect("localhost", "root", "nasis");
				mysqli_select_db($link, "resident");
				$q = "select count(*) \"total\"  from upload";
				$ros = mysqli_query($link, $q);
				$row = (mysqli_fetch_array($ros));
				$total = $row['total'];
				$dis = 3;
				$total_page = ceil($total / $dis);
				$page_cur = (isset($_GET['page'])) ? $_GET['page'] : 1;
				$k = ($page_cur - 1) * $dis;
				$q = "SELECT * FROM upload ORDER BY subject ASC limit $k,$dis";
				$ros = mysqli_query($link, $q);

				while ($row = mysqli_fetch_array($ros)) {
					echo '<tr>';
					echo '<td align=center>' . $row['subject'];
					echo '<td align=center>' . $row['topic'];
					echo "<td align=center><a title='Click here to download in file.' 
		     href='download.php?id={$row['file']}'>{$row['file']} </a>";
					echo "<td align=center><a title='Click here to delete in file.' 
		     href='deleteById.php?id={$row['file']}'>{$row['file']} </a>";
					echo '</tr>';
				}
				echo '</table>';
				echo  '</tbody>';
				echo '<br/>';
				if ($page_cur > 1) {
					echo '<a href="display.php?page=' . ($page_cur - 1) . '" style="cursor:pointer;color:DeepSkyBlue ;" ><input style="cursor:pointer;background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Previous "></a> ';
				} else {

					echo '<input style="background-color:DeepSkyBlue;border:1px black solid;border-radius:5px;width:120px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value=" Previous "> ';
				}
				for ($i = 1; $i < $total_page; $i++) {
					if ($page_cur == $i) {

						echo '<input style="background-color:DeepSkyBlue ;border:2px black solid;border-radius:5px;width:30px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="' . $i . '"> ';
					} else {
						echo '<a href="display.php?page=' . $i . '"> <input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="' . $i . '"> </a> ';
					}
				}
				if ($page_cur < $total_page) {

					echo '<a href="display.php?page=' . ($page_cur + 1) . '"><input style="cursor:pointer;background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Next "></a>';
				} else {

					echo '<input style="background-color:DeepSkyBlue ;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   Next "> ';
				}

				?>

	</div>
</body>

</html>