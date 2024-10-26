<?php require_once('config.php'); ?>
<?php
if (isset($_GET["attempt"])) {
  $attempt = $_GET["attempt"];
}
?>
<html>

<head>
  <link rel="stylesheet" href="css/mu.css" type="text/css">
  <script language="javascript" src="datetimepicker.js"></script>
  <script type='text/javascript'>
    if (document.images) { // Preloaded images
      demo1 = new Image();
      demo1.src = "image/A.png";
      demo2 = new Image();
      demo2.src = "image/1.png";
      demo3 = new Image();
      demo3.src = "image/2.png";
      demo4 = new Image();
      demo4.src = "image/3.png";
    }

    function timeimgs(numb) { // Reusable timer
      thetimer = setTimeout("imgturn('" + numb + "')", 1500);
    }

    function imgturn(numb) { // Reusable image turner
      if (document.images) {

        if (numb == "4") { // This will loop the image
          document["im"].src = eval("demo4.src");
          timeimgs('1');
        } else {
          document["im"].src = eval("im" + numb + ".src");

          timeimgs(numb = ++numb);
        }
      }
    }
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <style type="text/css">
    <!--
    body {
      background-color: #FFFFCC;
      margin-left: 10px;
      margin-right: 10px;
    }
    -->
  </style>
</head>

<body onLoad="timeimgs('1');">
  <table border="0" width="1299" cellspacing="0">
    <tr>
      <td colspan="3"><img src="image/dk.jpg" width="1299" height="60"></td>
    </tr>
    <tr>
      <td id="dropdown" colspan="3">
        <li><b><a href="officer.php"><em><b>Home</b></em></a></li>
        <li><a href="#"><em>Register</em></a>
          <ul class="sub1">
            <li><a href="population.php"><b><i>Population</i></b></a></li>
            <li><a href="house.php"><b><i>House</i></b></a></li>
          </ul>
        </li>
        <li><a href="#"><em>Generate report</em></a>
          <ul class="sub1">
            <li><a href="populationreport.php"><b><i>Population report</i></b></a></li>
            <li><a href="housereport.php"><b><i>House report</i></b></a></li>
          </ul>
        </li>
        <li><a href="#"><em>Count</em></a>
          <ul class="sub1">
            <li><a href="generate.php"><b><i> Count Population</i></b></a></li>
            <li><a href="counthouse.php"><b><i>count house</i></b></a></li>
          </ul>
        </li>
        <li><a href="#"><em>Send request</em></a>
          <ul class="sub1">
            <li><a href="sendrequestttt.php"><b><i>To chairman </i></b></a></li>
            <li><a href="sendrequestttt.php"><b><i> To administrator</i></b></a></li>
          </ul>
        </li>
        <li><a href="sendrequestttt.php"><b></b></a></li>
        <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li><a href="change_password.php"><b>Change password</b></a></li>
        <li><a href="Logout.php"><em>Logout</em></a></li>
      </td>
    </tr>
    <tr>
      <td>
        <table border="0" bgcolor="#CCCCCC" cellspacing="0">
          <tr>
            <td width="200" height="436" valign="top">
              <table border="0" width="316" cellspacing="0">
                <tr>
                  <td width="314" id="topnav">
                    <li><em><a href="viewpop.php"><b>View population </b></a></em></li>
                  </td>
                </tr>
                <tr>
                  <td id="topnav">
                    <li><em><a href="viewhouse.php"><b>View house </b></a></em></li>
                  </td>
                </tr>
                <tr>
                  <td id="topnav">
                    <li><em><a href="viewrequesttttt.php"><b>View request from chairman </b></a></em></li>
                  </td>
                </tr>
                <tr>
                  <td id="topnav">
                    <li><em><a href="viewrequesttttt.php"><b>View request from resident </b></a></em></li>
                  </td>
                </tr>
                <tr>
                  <td id="topnav">
                    <li><em><a href="viewrequesttttt.php"><b>View comment </b></a></em></li>
                  </td>
                </tr>
              </table>
            </td>
            <td>
              <br><br>
            </td>

            <td width="900" height="500" valign="top" bgcolor="white"><br><br>
              <script language="javascript">
                function check() {
                  if (document.getElementById("fulname").value == "") {
                    alert('please write your fulname!!');
                    document.getElementById("fulname").focus();
                    return false;
                  } else if (document.getElementById("id").value == "") {
                    alert('Please write your KebeleID number before go to next!!');
                    document.getElementById("id").focus();
                    return false;
                  } else if (document.getElementById("keb").value == "") {
                    alert('Please write your Kebele!!');
                    document.getElementById("keb").focus();
                    return false;
                  } else if (document.getElementById("purp").value == "") {
                    alert('Please write your purpose!!');
                    document.getElementById("purp").focus();
                    return false;
                  } else if (document.getElementById("date").value == "") {
                    alert('Please Select the Date!!');
                    document.getElementById("date").focus();
                    return false;
                  }
                }
              </script>
              <div><b>Request Form</b></div>
              <hr />
              <fieldset>
                <legend align="center">
                  <div class="legend"><b>Please Enter Your request the space provided below</b></div>
                </legend>
                <br>
                <div>
                  <form name="request" onsubmit='return check()' action='sendreq1.php' method='POST'>

                    <table>

                      <tr>
                        <td>Kebele_ID :</td>
                        <td><input type="text" size="15px" name="id" id="id" placeholder="Enter id..."></td>
                      </tr>
                      <tr>
                      <tr>
                        <td>Purpose :</td>
                        <td><textarea name="purp" id="purp" cols="15" rows="6" pattern="\D{4,50}" placeholder="Enter purpose..."></textarea> </td>
                      </tr>
                      <tr>
                        <td>
                          <font color="red">*</font>Date:
                        </td>

                        <td><input type="text" size="10px" id='date' name='date' class="mine_text_field_7" readonly required placeholder="Enter DateOfTaken..." />
                          <a href="javascript:NewCssCal('date','yyyymmdd')"><img src="image/cal.gif" width="20" height="21" border="0" />
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><input type="submit" name="submit" style="cursor:pointer" value="Send request" onClick="return         check(this.form);" />
                          <input type='reset' value='clear'>
                        </td>
                      </tr>
                    </table>
                  </form>
                </div>
              </fieldset>
              <?php
              if (isset($_POST['submit'])) {
                if (!$conn) {
                  die('Could not connect: ' . mysqli_error($conn));
                }

                mysqli_select_db($conn,"resident");
                $sql = "INSERT INTO request (kebele_ID,purpose,date)
VALUES
('$_POST[id]','$_POST[purp]','$_POST[date]')";
                if (!mysqli_query($conn,$sql)) {
                  die('Error: ' . mysqli_error($conn));
                } else {
                  echo 'Request successfully sent';
                }
              }
              mysqli_close($conn)
              ?>
            </td>
          </tr>
        </table>
      </td>
      </td>
      <td width="50" height="400" valign="top" bgcolor="pink">

  </table>
  </td>
  </tr>
  </tr>
  <tr>
    <td colspan="3" height="25">
      <table border="0" align="center" width="100%" bgcolor="orange" cellspacing="0">
        <tr>
          <td>
            <a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30"></a>
            <a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25"></a>
            <a href="http://twitter.com" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30"></a>
            <a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="40" height="30"></a>
          </td>
          <td>
            <font face="Times New Roman" color="black"><b>DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b>
            </font>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  </table>
</body>

</html>