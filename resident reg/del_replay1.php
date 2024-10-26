<?php
require_once('config.php'); 
	$id =$_REQUEST['key'];

	mysqli_query($conn,"DELETE FROM replay WHERE content= '$id'")
	or die(mysqli_error($conn));  
 echo "<script>alert('delete feedback succefully')</script>";	
	
	header("Location: new.php");
?>