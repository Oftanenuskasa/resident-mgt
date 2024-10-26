<?php
if (isset($_GET["attempt"])) {
    $attempt = $_GET["attempt"];
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
                            <table border="0" width="50" cellspacing="0">
                                <tr>
                                    <td bgcolor="purple">
                                        <center><b>Home Page</b></center>
                                    </td>
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
                            </table>
                        </td>
                        <td width="900" height="600" valign="top" bgcolor="cyan"><br><br>
                            <script language="javascript">
                                function formValidator() {
                                    if (document.getElementById("first").value == "") {
                                        alert('please enter the first name!!');
                                        document.getElementById("first").focus();
                                        return false;
                                    } else if (document.getElementById("date").value == "") {
                                        alert('Please enter the date!!');
                                        document.getElementById("date").focus();
                                        return false;
                                    } else if (document.getElementById("com").value == "") {
                                        alert('Please enter the your comment!!');
                                        document.getElementById("com").focus();
                                        return false;
                                    }
                                }
                            </script>

                            <hr />
                            <fieldset>
                                <legend align="center">
                                    <div class="legend"><b>Please Enter Your Data To Be Uploaded</b></div>
                                </legend>
                                <br>
                                <div>

                                    <?php

                                    // Inialize session
                                    session_start();

                                    // Check, if username session is NOT set then this page will jump to login page
                                    if (!isset($_SESSION['username'])) {
                                        header('Location: filter.php');
                                    } else {
                                        $uname = $_SESSION['username'];
                                    }
                                    ?>
                                    <!DOCTYPE html>
                                    <html lang="en">

                                    <body>

                                        <div id="mainsection">
                                            <div class="main">
                                                <a href="addfile.php"><button class="btn btn-success"><i class="icon-upload icon-white"></i>Add File</button></a>
                                                <hr>
                                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                                    <div class="alert alert-info">
                                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                        <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                                                    </div>
                                                    <?php
                                                    include "config.php";
                                                    // $thelist .= '<a href="user/'.$file.'">'.$file.'</a>';
                                                    if ($uname != 'admin') {
                                                        echo "
					<thead>
					    <th>File Name</th>
					    <th>File Size</th>
					    <th>DOWNLOAD</th>
					</thead>
					<tbody>
				    ";
                                                        $query = "SELECT * FROM upload_data WHERE UPLOADED_BY='$uname'";
                                                        $result = mysqli_query($conn,$query);
                                                        while ($rs = mysqli_fetch_array($result)) {
                                                            $fname = $rs['FILE_NAME'];
                                                            $size = $rs['FILE_SIZE'];
                                                            $path = $rs['PATH'];

                                                            echo "
					 <tr>
					     <td width='70%'>$fname</td>
					     <td align='center'>$size KB</td>
					     <td align='center'><a href='$path'><button class='btn btn-primary'><i class='icon-download-alt icon-white'></button></a></td>
					 </tr>";
                                                        }
                                                    } else {
                                                        echo "
					<thead>
					    <th>File Name</th>
					    <th>File Size</th>
					    <th>DOWNLOAD</th>
					    <th>DELETE</th>
					</thead>
					<tbody>
				    ";
                                                        $query = "SELECT * FROM upload_data WHERE UPLOADED_BY='admin'";
                                                        $result = mysqli_query($conn,$query);
                                                        while ($rs = mysqli_fetch_array($result)) {
                                                            $fname = $rs['FILE_NAME'];
                                                            $size = $rs['FILE_SIZE'];
                                                            $path = $rs['PATH'];

                                                            echo "
					 <tr>
					     <td width='70%'>$fname</td>
					     <td>$size KB</td>
					     <td align='right'><a href='$path'><button class='btn btn-primary'><i class='icon-download-alt icon-white'></button></a></td>
					     <td align='right'><a href='delete.php?name=$fname' class='btn btn-danger' onclick='confirm('sure?');'><i class='icon-trash icon-white'></a></td>
					 </tr>";
                                                        }
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </body>

                                    </html>

                        <td width="50" height="600" valign="top" bgcolor="#FF9966">

                </table>
            </td>
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
                            <font face="Times New Roman" color="black"><b> DURAME CITY RESIDENCE MANAGMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b>
                            </font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>