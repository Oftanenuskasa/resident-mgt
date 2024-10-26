<?php
//Start session
session_start();

//Unset the variables stored in session
unset($_SESSION['list_no']);
unset($_SESSION['user_name']);
?>
<html>

<head>
  <title>DC RRMS:reset password</title>
  <link rel="shortcut icon" href="images/ambo1.jpg" />
  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <!--sa poip up-->
  <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage: 'src/loading.gif',
        closeImage: 'src/closelabel.png'
      })
    })
  </script>

</head>

<body>

  <div style="width:600px;height: 500px; 
margin:0 auto;
 position:relative;
 border:3px solid rgba(0,0,0,0); 
 -webkit-border-radius:5px;
 -moz-border-radius:5px;
 border-radius:5px; 
 -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
 -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

    <div style="background-color:#eee; font-family:Arial, Helvetica, sans-serif; color:black; padding:5px; height:42px;">


      <div style="float:left;">
        <center><b><strong> Forget Password Form</strong></b></center>
      </div>
      <div style="float:right; margin-right:3px; background-color:#D0090C; width:25px; text-align:center; height:32px;"><a href="home.php">X</a></div>


    </div>
    <table width="654" align="center">

      <?php
      require_once('config.php');
      //include "database.php";


      ?>

      <form name="form" method="post" action="reset.php" onsubmit="return vlidateform();">
        <table width="600" height="250" align="center">
          <tr>
            <td width="92" colspan="2" align="left">
              <div align="center">
                <font color="red" size="5">Plese fill the correct user name to forget password:</font>
              </div>
            </td>
          </tr>
          <tr>
            <td width="92">
              <div align="right">User name:</div>
            </td>
            <td width="178"><input type="text" name="user_name" / required=""></td>
          </tr>
          <tr>
            <td width="92">
              <div align="right">New Password:</div>
            </td>
            <td width="178"><input type="password" name="password" required="" /></td>
          </tr>
          <tr>
            <td width="92">
              <div align="right">Confirm Password: </div>
            </td>
            <td width="178"><input type="password" name="rpass" required="" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="178"><input type="submit" name='submit' value="Reset" /></td>
          </tr>
        </table>
      </form><?php
              require_once('config.php');
              if (isset($_POST["submit"])) //reset
              {
                $un = $_POST['user_name'];

                $pass = ($_POST['password']);
                $rept = ($_POST['rpass']);
                $crypt_pass = md5($_POST['password']);

                if ($un != '' && $pass == $rept) {
                  $qr1 = "SELECT * FROM user WHERE Username='$un'";
                  $result = mysqli_query($conn,$qr1) or die(mysqli_error($conn));
                  if (mysqli_num_rows($result) < 1) {
                    echo "<center><font color=red>  <h3>This User Name is not correct or not existed!</h3></font></center>";
                  } else {
                    $arry = mysqli_fetch_array($result) or die(mysqli_error($conn));

                    $eml = $arry['Username'];
                    if ($eml == $un) {
                      $qry5 = " UPDATE user SET Password='$crypt_pass' WHERE Username='$eml' ";
                      $res = mysqli_query($conn,$qry5) or die(mysqli_error($conn));
                      if ($res)
                        echo "<h3 align='center'><font color=red>You are succesfully chaneged your password!</font></h3>";
                      else
                        echo "<br/><h3>The value is miss match! Plese enter the correct user name</h3>";
                    }
                  }
                } else
                  echo "<br/><h3>The password  is miss match!</h3>";
              }

              ?>

    </table>

    </form>


  </div>
</body>

</html>