<?php
require_once('config.php'); 
session_start();
error_reporting(0);
if(isset($_SESSION['Username'])){
	$_username=$_SESSION['Username'];
}
?>

 <?php
   $username=$_REQUEST['name'];
   $da=date('Y-m-d');
$sql1="UPDATE `clearance_requset` SET `seen`=1 WHERE send='$username'";
$ress=mysqli_query($conn,$sql1);
if($ress){
	$query1="INSERT INTO `noti`(`id`, `from`, `content`, `send`, `seen`, `date`, `username`) VALUES ('none','$_username','clerance request is not accepted ','".$username."','0','$da','none')";
	$ress=mysqli_query($conn,$query1);
	if($ress)
	{
 echo "<script>alert('You have successfully reject the request!!');</script>";
 echo "<script>window.location='viewclerance_request.php';</script>";	}
}

mysqli_close($conn);?>