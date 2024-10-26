<?php
  include("config.php");  

	$id =$_REQUEST['content'];

	mysqli_query($conn,"DELETE FROM request WHERE content= '$id'")
	or die(mysqli_error($conn));  
 echo "<script>alert('delete feedback succefully')</script>";	
	
	header("Location: viewrequest.php");
?>