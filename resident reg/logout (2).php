<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style><?php
session_start();
session_destroy();
header("location:index.php");
?>
