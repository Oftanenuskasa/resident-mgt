<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style><?php
include('config.php');
$ctrl=$_REQUEST['key1'];
$result=mysqli_query($conn,"delete from comment where  Comment = '$ctrl'");
echo "<script>location.href='viewcomment.php'</script>"

?> 