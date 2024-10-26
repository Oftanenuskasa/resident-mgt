<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style><?php
include('config.php');
$ctrl=$_REQUEST['key1'];
$result=mysqli_query($conn,"delete from upload_data where FILE_NAME='$ctrl'");
echo "<script>location.href='indexs.php'</script>";
?> 
