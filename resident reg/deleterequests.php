<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style><?php
include('config.php');
$ctr2=$_REQUEST['key2'];
$result=mysqli_query($conn,"delete from requestc where  Purpose = '$ctr2'");
echo "<script>location.href='viewrequesttttt.php'</script>"

?> 