<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style><?php
include('config.php');
$ctr2=$_REQUEST['key2'];
$result=mysqli_query($conn,"delete from comment where  Comment = '$ctr2'");
echo "<script>you Delete the Record 
successfuly</script>";
echo "<script>location.href='viewadmincomment.php'</script>"

?> 