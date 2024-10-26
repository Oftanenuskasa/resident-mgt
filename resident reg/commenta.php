<?php require_once('config.php');?>
<?php
if(isset($_GET["attempt"]))
{
$attempt=$_GET["attempt"];
}
?>
<html>
<head>
<link rel="stylesheet" href="css/mu.css" type="text/css">
<script language="javascript" src="datetimepicker.js"></script>
<script type="text/JavaScript">

 var count = 0;
  function member() {
    if (parent.count ==0) {
       document.parent.src = "image/df.jpg";
	 title="evahotel build";
       count = 1;
    }
     else if (parent.count ==1) {

       document.parent.src = "image/dg.jpg";
       count = 2;
    }
 else if(parent.count ==2) {
       document.parent.src = "image/dh.jpg";
       count = 3;
    }

 else {
 document.parent.src = "image/dj.jpg";
       count = 0;

}
    setTimeout("member()", 3000);
  }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #FFFFCC;
	margin-left: 10px;
	margin-right: 10px;
}
-->
</style></head>

<body onLoad="timeimgs('1');">
<table border="0" width="1299" cellspacing="0">
 <tr> 
  <td colspan="3"><img src="image/dk.jpg" width="1299" height="60"></td>
 </tr>
 <tr>
  <td id="dropdown" colspan="3">
<li><a href="filter.php"><b>Upload</b></a></li>
<li>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
	

<li><a href="indexs.php"><b>Download</b></a></li>

 </td>
 </tr>
 <tr>
<td>
 <table border="0" bgcolor="pink" cellspacing="0">
   <tr>
     <td width="50" height="600" valign="top">	
	 <table border="0"  width="50" cellspacing="0">
<tr>
 <td bgcolor="purple"><center><b>Home Page</b></center></td>
 </tr>
<tr>
<td id="topnav">
<li><a href="cashier.php"><b>Home</b></a></li>
</td>
</tr>
 <tr>
<td id="topnav">
<li><a href="comment.php">Comment</a></li>
</td>
</tr>
 <tr>
<td id="topnav">
<li><a href="sendrequest.php">Send Request</a></li>
</td>
</tr>

 <tr>
<td id="topnav">
<li><a href="new.php">response</a></li>

</td>
</tr>


<tr>
<td id="topnav">
<li><a href="Logout.php"><b>Logout</b></a></li>
</td>
</tr>
<td>
<br><br>
</td>
<tr>
<td>

</td>
</tr>
</table></td> 
     <td width="900"  height="600" valign="top" bgcolor="cyan"><br><br>
	 	 <script language="javascript">

  function formValidator()
  {
   if(document.getElementById("fname").value =="")
   {
    alert('please write your fulname before go to Next!!'); 
    document.getElementById("fname").focus();
    return false;
   }
   else if(document.getElementById("date").value =="")
   {
    alert('Please enter the date before go to Next!!');
    document.getElementById("date").focus();
    return false;
   }
   else if(document.getElementById("com").value =="")
   {
    alert('Please Write your comment before go to Submit!!');
    document.getElementById("com").focus();
    return false;
   }}
   </script>

					<hr />
	 <fieldset>
					<legend  align="center"><div class="legend"><b>Please Enter Your Comment the space provided below</b></div></legend>
					<br>
					<div>
						<form onsubmit='return formValidator()' action='comment1.php' method='POST'>
							<table>
								<tr>
									<td>FulName :</td>
									<td><input type="text" size="22px" name="fname" id="fname" placeholder="Enter fulname..." ></td>	
									<td>Date :</td>
									<td><input class="mine_text_field_7" name="date" id="date" size="20px"  readonly="readonly" required type="text" placeholder='date of registration...'/>
                                    					<a href="javascript:NewCssCal('date','yyyymmdd')"><img src="image/cal.gif" width="20" height="21" border="0" /></td>
										</tr>
								<tr>
								   <td>Comment :</td>
								   <td><textarea name="comment1" id="com" cols="16" rows="8" placeholder="Enter comment..."></textarea></td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td><input type='submit' value='Submit' name='sub' onClick="return check(this.form);"/>
									<input type='reset' value='clear'></td>
								</tr>		
							</table>		
						</form>
					</div>
				</fieldset>		
    <?php
if(isset($_POST['sub']))
{
 if(!$conn)
  {
   die('Could not connect: ' . mysqli_error($conn));
  }

mysqli_select_db($conn,"resident",);
$sql="INSERT INTO comment1 (Fulname,date,comment)
VALUES
('$_POST[fname]','$_POST[date]','$_POST[comment1]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  else
  {
echo "One comment is added now!!!";
}
}
mysqli_close($conn)
?>

</td>
     <td width="50" height="600" valign="top" bgcolor="pink"></td>
	 
	 </table>
</td>
 </tr>
 <tr>
 <td colspan="3" height="25"><table border="0"  align="center" width="100%" bgcolor="orange" cellspacing="0">
<tr>
<td>
<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30"></a>
<a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25"></a>
<a href="http://twitter.com" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30"></a>
<a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="40" height="30"></a>
</td>
<td>
<font face="Times New Roman" color="black"><b> DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b>
</font>
</td>
</tr>
</table></td>
 </tr>
 </table></body></html>