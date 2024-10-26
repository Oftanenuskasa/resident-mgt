<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style><?php
include('config.php');
$ctr3=$_REQUEST['key3'];
$result=mysqli_query($conn,"delete from sendreq where  purpose = '$ctr3'");
echo "<script>location.href='View_req.php'</script>"

?> 