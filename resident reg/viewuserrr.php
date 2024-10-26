<?php
session_start();
include("config.php");
//echo "User".$_SESSION['user'];
if (isset($_SESSION['Username'])) {
  $username = $_SESSION['Username'];
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
<html lang="en-US" xml:lang="en-US" xmlns="" />

<head>
  <title>Wachemo University Durame Campus College Of Engineering and Technology </title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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


  <style type="text/css">
    <!--
    body {
      background-color: #FFFFCC;
    }
    -->
  </style>
</head>

<body>







  <table style="margin-top:-12px" width="950px" border="0" color:#606060 cellpadding="0" cellspacing="0" background-color:#606060 "  ><!--content table -->
<tr >
     <td class=" left_container" height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">
    <br> <br><br><br><br><br>

    </td>

    <td bgcolor="	#ffffff " valign="top" height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->



      <div id="pagetitle" padding-left="89"><!-- InstanceBeginEditable name="pagetitle" --><b>View detail , Edit , Activate and Deactivate Users.<br> </b><!-- InstanceEndEditable --></div>
      </br>
      <div id="contentarea1">


        <table border='1' style='width:500px;border:1px solid black;border-radius:10px;' align='left'>
          <tr>
            <th>Account Type</th>
            <th>User ID</th>
            <th>View<br>Detail</th>
            <th>Edit</th>
            <th>Activate <br>(Deactivate)</th>
          </tr>
          <?php
          $result = mysqli_query($conn,"SELECT * FROM user");
          while ($row = mysqli_fetch_array($result)) {
            $ctrl = $row['Username'];
            $account = $row['Password'];
            $Username = $row['Username'];
            $status = $row['status'];
          ?>
            <tr>
              <td><?php echo $account; ?></td>
              <td><?php echo $ctrl; ?></td>
              <td align='center' width='1'><a href='viewuserdetail.php?key=<?php echo $ctrl; ?>'><img width='25px' height='25px' src='image/aaa.png' title='View Detail'></img></a></td>
              <td><a href='edituser.php?key=<?php echo $ctrl; ?>'><img src='image/edit.jpg' width='25px' height='25px' title='Edit'></img></a></td>
              <td><?php
                  if (($status) == '0') {
                  ?>
                  <a href="status.php?status=<?php echo $row['Username']; ?>" onClick="return confirm('Really you activate (<?php echo $Username ?>)');">
                    <img src="image/deactivate.png" id="view" width="16" height="16" alt="" />Deactivated </a>
                <?php
                  }
                  if (($status) == '1') {
                ?>
                  <a href="status.php?status=<?php echo $row['Username']; ?>" onClick="return confirm('Really you De-activate (<?php echo $Username ?>)');">
                    <img src="image/activate.png" width="16" id="view" height="16" alt="" />Activated</a>
                <?php
                  }
                ?>
              </td>




            </tr>
          <?php
          }

          print("</table>");
          mysqli_close($conn);
          ?>

      </div>



    </td><!--center end-->






    <td class="right_container" valign="top" height="100" width="100px">

      <table class="right" style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

        <tr>
          <td class="right" height="100px" width="100px" border="1px" valign="top" align="center" bgcolor="#c0c0c0 " border="1px">
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <!--<marquee direction="down">


<img src="image/laptop.jpg"  height="60px" width="80px" border="1px"/><br>
<img src="image/dell.jpg" align="center" height="60px" width="80px" alt="DBU Inventory" bgcolor="#606060  "border="1px">
</marquee>--><br /><br>


            <br /><br /><br /><br /><br /><br /><br /><br><br /><br /><br>
          </td>
        </tr>
      </table>
    </td>
    </tr>
  </table><!--content table end-->






  </td>
  </tr>
  </table>
  </center>
</body>

</html>