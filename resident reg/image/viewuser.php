<?php
if(isset($_GET["attempt"]))
{
$attempt=$_GET["attempt"];
}
?> 
<html>
<head>
<link rel="stylesheet" href="css/mu.css" type="text/css">
</head>
<body onLoad="timeimgs('1');">
<table border="0" width="1099" cellspacing="0">
 <tr> 
  <td colspan="3"><img src="image/logo.png" width="1099" height="60"></td>
 </tr>
 <tr>
  <td id="dropdown" colspan="3">	
<li><b><a href="admin.php">Home </a></li>  
<li><a href="account.php"><b>Create Account</b></a></li>
<li><a href="change_password.php"><b>Change Password</b></a></li>
<li><a href="viewuser.php"><b>Manage User</b></a></li>
<li>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</li>
<li><a href="Logout.php">Logout</a></li>
 </td>
 </tr>
 <tr>
<td>
 <table border="0" bgcolor="#0B0B0B" cellspacing="0">
   <tr>
     <td width="100" height="600" valign="top">	
	 <table border="0"  width="100" cellspacing="0">
<tr>
 <td bgcolor="#CC6633"><center><b>Admin Page</b></center></td>
 </tr>
 <tr>
<td id="topnav">
<li><a href="viewcomment.php"><b>View Comment</b></a></li>
</td>
</tr>
</table></td> 
     <td width="900"  height="600" valign="top" bgcolor="cyan"><br/><br/>
	<table>
			<tr>
				<td>
  <script language="javascript">
  function check()
  {
   if(document.getElementById("id").value =="")
   {
    alert('please enter the Id !!'); 
    document.getElementById("id").focus();
    return false;
   }
   else if(document.getElementById("utype_id").value =="")
   {
    alert('Please enter the utype_id !!');
    document.getElementById("utype_id").focus();
    return false;
   }
   else if(document.getElementById("name").value =="")
   {
    alert('Please enter the Name!!');
    document.getElementById("name").focus();
    return false;
   }
   else if(document.getElementById("position").value =="")
   {
    alert('Please enter the Position!!');
    document.getElementById("position").focus();
    return false;
   }
   else if(document.getElementById("username").value =="")
   {
    alert('Please enter the UserName!!');
    document.getElementById("username").focus();
    return false;
   }
   else if(document.getElementById("password").value =="")
   {
    alert('Please enter the Password!!');
    document.getElementById("password").focus();
    return false;
   }
   else if(document.getElementById("city").value =="")
   {
    alert('Please Enter City!!');
    document.getElementById("city").focus();
    return false;
   }
      else if(document.getElementById("phone").value =="")
   {
    alert('Please Enter PhoneNumber!!');
    document.getElementById("phone").focus();
    return false;
   }
   </script>
					<div><b>Manage Resident  Form</b></div>
					<hr />
					<fieldset>
					<legend  align="center"><div class="legend"><b>Manage below</b></div></legend>
					<br>
					<div>
						
<?php   
 session_start();
 include("config.php");
 //echo "User".$_SESSION['user'];
 if(isset($_SESSION['Username']))
 {
  $username=$_SESSION['Username'];
 } else {
 ?>
 <script>
  //alert('You Are Not Logged In !! Please Login to access this page');
  //alert(window.location='login.php');
 </script>
 <?php
 }
 ?>


<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>mange user account</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />
<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "../https@ssl.\default.htm" : "../www./default.htm");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>

<!---
<script>
  function islogout()
  {
   var d = confirm('Are you sure you want to Logout !!');
   if(!d)
   {
    alert(window.location='viewuser.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>-->


</head>
<body>







<table style="margin-top:-10px" width="450px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     

<td  bgcolor="	#ffffff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle" padding-left="89"><!--enstanceBeginEditable name="pagetitle" --><b>View detail , Edit , Activate and Deactivate Residents.<br> </b><!-- enstanceEndEditable --></div>
     	</br><div id="contentarea1">

  
<table border='1' style='width:500px;border:1px solid black;border-radius:10px;' align='left'>
<tr>
<th>Password</th>
<th>User Name</th>
<th>View<br>Detail</th>
<th>Edit</th>
<th>Activate <br>(Deactivate)</th>
</tr>  
<?php
$result = mysql_query("SELECT * FROM user");
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['Username'];
$account=$row['Password'];
$Username=$row['Username'];
$status=$row['status'];
?>
<tr>
<td><?php echo $account;?></td>
<td><?php echo $ctrl;?></td>		
<td align = 'center' width = '1'><a href = 'viewuserdetail.php?key=<?php echo $ctrl;?>'><img width='25' height='23' src = 'image/aaa.png' title='View Detail'></img></a></td>
		<td><a href = 'edituser.php?key=<?php echo $ctrl;?>'><img src = 'image/edit.jpg' width='32' height='32' title='Edit' ></img></a></td>
		<td><?php
						if(($status)=='0')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['Username'];?>" onClick="return confirm('Really you activate (<?php echo $Username?>)');">
                        		<img src="image/deactivate.png" id="view" width="16" height="16" alt="" />Deactivated </a>
                        <?php
						}
						if(($status)=='1')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['Username'];?>" onClick="return confirm('Really you De-activate (<?php echo $Username?>)');"> 
                       			 <img src="image/activate.png" width="16" id="view" height="16" alt=""  />Activated</a>
                        <?php
						}
                        ?>			  </td>

		
		
		
		</tr>
<?php
  }
 
print( "</table>");
mysql_close($conn);
?>

</div>
    


</td><!--center end-->











</td></tr></table>
</center>
</div>
</body>
</html>
</td>
	</tr>
	 </table>
</td>
</td>
     <td width="200" height="600" valign="top" bgcolor="green">
	 
	 </table>
</td>
 </tr>
 </tr>
 <tr>
 <td colspan="3" height="25"><table border="0"  align="center" width="100%" bgcolor="black" cellspacing="0">
<tr>
<td>
<a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30"></a>
<a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25"></a>
<a href="http://twitter.com/2merkato" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30"></a>
<a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="40" height="30"></a>
</td>
<td>
<font face="Times New Roman" color="white"><b> DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b>
</font>
</td>
</tr>
</table></td>
 </tr>
 </table></body></html>