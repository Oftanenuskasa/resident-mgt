
<?php
require_once('config.php');
session_start();
error_reporting(0);
if (isset($_SESSION['Username'])) {
	$_username = $_SESSION['Username'];
}
?>
<?php

$name = $_REQUEST['name'];
$s_id = $_REQUEST['s_id'];

$sql = "SELECT *FROM `idcard` WHERE id_number = '$s_id'";
$re = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($re)) {
	# code...
	$renw = $row['renewed_date'];
	$exp = $row['exipred_date'];
}

$dt = date('Y-m-d');
$expr = date('Y-m-d', strtotime($date . '+3 years'));
if ($dt == $renw) {
	echo "<script>alert('ID is allredy renwed!!');</script>";
	$sql = "UPDATE `requestr` SET `seen`='1' WHERE SenderidNumber='$s_id' and Purpose='renew'";
	$up = mysqli_query($conn, $sql);
	$sql2 = "INSERT INTO `noti`(`id`, `from`, `content`, `send`, `seen`, `date`, `username`) VALUES ('none','$_username','ID is allredy renwed','$name','0','$dt','none')";
	mysqli_query($conn, $sql2);
	echo "<script>window.location='viewrenew_request.php';</script>";
} else if ($dt > $renw and $dt < $exp) {
	echo "<script>alert('In this year is not allowed to renew!!');</script>";
	$sql = "UPDATE `requestr` SET `seen`='1' WHERE SenderidNumber='$s_id' and Purpose='renew'";
	$up = mysqli_query($conn, $sql);
	$sql2 = "INSERT INTO `noti`(`id`, `from`, `content`, `send`, `seen`, `date`, `username`) VALUES ('none','$_username','In this year is not allowed to renew!!','$name','0','$dt','none')";
	mysqli_query($conn, $sql2);
	echo "<script>window.location='viewrenew_request';</script>";
} else if ($dt > $exp) {
	$sql = "UPDATE  idcard SET renewed_date = '$dt',exipred_date='$expr' WHERE id_number = '$s_id'";
	$result = mysqli_query($conn, $sql) or die("Unable to renew  idcard ");
	if ($result) {
		$sql2 = "INSERT INTO `noti`(`id`, `from`, `content`, `send`, `seen`, `date`, `username`) VALUES ('none','$_username','The id card is renwed you can came and take.','$name','0','$dt','none')";
		if (mysqli_query($conn, $sql2)) {
			$sql = "UPDATE `requestr` SET `seen`='1' WHERE SenderidNumber='$s_id' and Purpose='renew'";
			$up = mysqli_query($conn, $sql);
			echo "<script>alert('You have successfully renewed the idcard!!');</script>";
			echo "<script>window.location='viewrenew_request.php'</script>";
		} else
			echo "<script>alert('not Sucessfully !!');</script>";
	} else
		echo 'Query not correct !';
}
?>
