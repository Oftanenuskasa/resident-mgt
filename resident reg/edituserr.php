<?php
session_start();
include("config.php");
//echo "User".$_SESSION['user'];
if (isset($_SESSION['Username'])) {
	$username = $_SESSION['Username'];
} else {
?>
<?php
	//echo "<script>window.location='login.php';</script>";
}
?>

<html>
<style type="text/css">
	<!--
	body {
		background-color: #FFFFCC;
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 0px;
		margin-bottom: 0px;
	}
	-->
</style>

<div id="body">
	<div id="content">


		<div class="login" style="background-color:white;">
			<?php
			$ctrl = $_REQUEST['key'];
			$query = "SELECT * FROM user where Username='{$ctrl}'";
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
				<form method="POST" action="edituser.php">
					<br><br>
					<table valign='top' align="center" style="width:270px; height:100px;border-radius:10px;background-color:cyan;border:2px solid blue">
						<tr>
							<td></td>
							<td align="right"><a href="viewuser.php"><img src="IMG/close.jpg" title="Close"></a></td>
						</tr>
						<tr>
							<td>
								<font face="times new roman" color="#336699" size="3"><b>UserID:</b>
							</td>
							<td><input type="text" name="user_id" readonly="readonly" value="<?php echo $row1 ?>" /></td>
						</tr>
						</tr>
						<tr>
							<td>
								<font face="times new roman" color="#336699" size="3"><b>Password:</b>
							</td>
							<td><input type="text" name="password" pattern="\w{4,10}" value="<?php echo $row2 ?>" /></td>
						</tr>
						<tr>
							<td>
								<font face="times new roman" color="#336699" size="3"><b>User Type:</b></font>
							</td>
							<td><input type="text" pattern="\D{5,7}" name="user_type" value="<?php echo $row0 ?>" /></td>
						</tr>
						<tr>
							<td>
								<font face="times new roman" color="#336699" size="3"><b>First Name:</b>
							</td>
							<td><input type="text" name="fname" pattern="\D{2,10}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" value="<?php echo $row3 ?>" /></td>
						</tr>
						<tr>
							<td>
								<font face="times new roman" color="#336699" size="3"><b>Last Name:</b>
							</td>
							<td><input type="text" name="lname" pattern="\D{2,10}" style="border:1px #480000 solid;width:144px;height:25px;background:#FFFFFF;border-radius:5px;" required="required" value="<?php echo $row4 ?>" /></td>
						</tr>
						<tr>
							<td>
								<font face="times new roman" color="#336699" size="3"><b>Email:</b>
							</td>
							<td><input type="text" name="mail" pattern="(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3})" value="<?php echo $row5 ?>" /></td>
						</tr>
						<tr>
							<td>
								<font face="times new roman" color="#336699" size="3"><b>Phone Number:</b>
							</td>
							<td><input type="text" name="phone" pattern="\d{10}" value="<?php echo $row6 ?>" /></td>
						</tr>
						<tr>
							<td>
								<font face="times new roman" color="#336699" size="3"><b>Block Number:</b>
							</td>
							<td><input type="text" name="block" pattern="\w{2,5}" value="<?php echo $row7 ?>" /></td>
						</tr>
						<tr>
							<td>
								<font face="times new roman" color="#336699" size="3"><b>Office Number:</b>
							</td>
							<td><input type="text" name="office" pattern="\w{2,5}" value="<?php echo $row8 ?>" /></td>
						</tr>

						<tr>
							<td colspan=2 align='center'><input type='submit' name='update' value='Update' style="color:#0f0f0f;background:#5d8aa8;">
						</tr>
						</td>
					</table>
				</form>
			<?php
			}


			?>
			<?php
			if (isset($_POST['update'])) {

				$user_type = $_POST['user_type'];
				$user_id = $_POST['user_id'];
				$password = $_POST['password'];
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$mail = $_POST['mail'];
				$phone = $_POST['phone'];
				$block = $_POST['block'];
				$office = $_POST['office'];
				$update = mysqli_query($conn, "update user set user_type='$user_type',emp_id='$user_id', password='$password',firstname='$fname', lastname='$lname' 
	,email='$mail',Phonenumber='$phone',blocknumber='$block',officenumber='$office'
  WHERE emp_id='{$user_id}'") or die(mysqli_error($conn));
				echo "<script>window.location='viewuser.php';</script>";
			}

			?>

		</div>



		</td><!--center end-->

		</section>


	</div>
</div>
</body>

</html>