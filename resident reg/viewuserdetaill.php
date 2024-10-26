<?php
session_start();
include("config.php");
//echo "User".$_SESSION['user'];
if (isset($_SESSION['Username'])) {
  $username = $_SESSION['Username'];
} else {
?>
<?php
  //echo "<script>window.location='login.php';</script>";
}
?>


<html>
<html lang="en-US" xml:lang="en-US" xmlns="" />

<head>
  <title>WCU </title>
  <link rel="stylesheet" type="text/css" href="style/home.css">
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
  <style>
    #header {
      background-color: red;
    }

    #headerz {
      background: url(img/esa.jpg);
      height: 45px;
    }

    .login {
      background: #778899;
      height: 555px;
    }

    #footer {
      background: url(img/esa.jpg);
      font-family: Lucida Calligraphy;
    }

    #content {
      background: #778899;
    }

    #body {
      width: 1400px;
      height: 790px;
      margin-left: -8px;
      background: black;
    }

    #left_colomn {
      background: #778899;
      width: 280px;
      float: left;
      height: 600px;
    }

    #right_colomn {
      background: #778899;
      width: 280px;
      float: right;
      height: 600px;
    }

    #center {
      border-radius: 30px 0px 0px 0px;
      -moz-border-radius: 20px 20px 0px 0px;
      border-color: #ccccff;
      border-style: groove;
      margin-left: 0px;
      margin-top: -125px;
      background: cyan;
      width: 140px;
      float: left;
      height: 65px;
    }

    #center img {
      border-radius: 30px 0px 0px 0px;
      -moz-border-radius: 20px 20px 0px 0px;
    }

    #zz {
      background: url(img/esa.jpg);
    }

    #yy {
      width: 267px;
      float: left;
      height: 590px;
      margin-top: 5px;
      margin-left: 10px;
      border-color: #ccccff;
      border-style: groove;
    }

    body {
      background-color: #FFFFCC;
    }
  </style>
</head>

<div id="body">
  <div id="content">





    <div class="login" style="background-color:white;">


      <?php
      $ctrl = $_REQUEST['key'];
      $query = "SELECT * FROM user where Username='{$ctrl}'";
      $result = mysqli_query($conn,$query);
      $count = mysqli_num_rows($result);
      if ($count == 1) {
        while ($row = mysqli_fetch_array($result)) {
          $row0 = $row[0];
          $row1 = $row[1];
          $row2 = $row[2];
          $row3 = $row[3];
          $row4 = $row[4];
        }
      ?>
        <br><br>
        <table valign='top' align="center" style="width:260px;background-color:cyan;height:400px;border-radius:10px;border:2px solid blue">
          <tr>
            <td></td>
            <td align="right"><a href="viewuser.php"><img src="IMG/close.PNG" title="Close"></a></td>
          </tr>


          <tr>
            <td>
              <font face="times new roman" color="#336699" size="3"><b>Name:</b>
            </td>
            <td><?php echo $row1 ?></td>
          </tr>
          </tr>
          <tr>
            <td>
              <font face="times new roman" color="#336699" size="3"><b>Position:</b>
            </td>
            <td><?php echo $row2 ?></td>
          </tr>
          <tr>
            <td>
              <font face="times new roman" color="#336699" size="3"><b>Username:</b></font>
            </td>
            <td><?php echo $row0 ?></td>
          </tr>
          <tr>
            <td>
              <font face="times new roman" color="#336699" size="3"><b>Password:</b>
            </td>
            <td><?php echo $row3 ?></td>
          </tr>
          <tr>
            <td>
              <font face="times new roman" color="#336699" size="3"><b>PhoneNumber:</b>
            </td>
            <td><?php echo $row4 ?></td>
          </tr>

          <tr>
            <td><br></td>
          </tr>
        </table>

      <?php
      }


      ?>





    </div>



    </td><!--center end-->


    <p>

      </section>


  </div>
</div>
</body>

</html>