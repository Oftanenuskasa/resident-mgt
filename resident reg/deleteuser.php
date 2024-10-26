<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style><?php
include('config.php');
$ctr2=$_REQUEST['key'];
$result=mysqli_query($conn,"delete from user where  Username = '$ctr2'");
echo "<script>you Delete the Record 
successfuly</script>";
echo "<script>location.href='viewuser.php'</script>"

?> 