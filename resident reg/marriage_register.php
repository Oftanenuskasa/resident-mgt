<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style><?php
$con=mysqli_connect("localhost","root","nasis","resident");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="INSERT INTO marri (mid, hid, wid,Select, ekid, dm)
VALUES
('$_POST[mid]','$_POST[hid]','$_POST[wid]','$_POST[Select]','$_POST[ekid]','$_POST[dm]')";

if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($conn));
}
echo "1 record added in to student table!!";
mysqli_close($con);
?>
