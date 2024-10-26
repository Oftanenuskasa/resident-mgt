<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style><?php
include('config.php');
$ctrl=$_REQUEST['key1'];
$result=mysqli_query($conn,"delete from idcard where  id_number = '$ctrl'");
echo "<script>location.href='giveidcard.php'</script>"
 

?> 