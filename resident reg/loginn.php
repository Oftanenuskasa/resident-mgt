<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/mu.css" type="text/css">
    <script type="text/javascript">
        var count = 0;

        function member() {
            if (count == 0) {
                document.images['parent'].src = "image/df.jpg";
                count = 1;
            } else if (count == 1) {
                document.images['parent'].src = "image/dg.jpg";
                count = 2;
            } else if (count == 2) {
                document.images['parent'].src = "image/dh.jpg";
                count = 3;
            } else {
                document.images['parent'].src = "image/dj.jpg";
                count = 0;
            }
            setTimeout(member, 3000);
        }
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <style type="text/css">
        body {
            background-color: #FFFFCC;
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
</head>

<body onload="member();">
    <table border="0" width="1000" cellspacing="0">
        <tr>
            <td colspan="3"><img src="image/dk.jpg" width="1000" height="80"></td>
        </tr>
        <tr>
            <td id="dropdown" colspan="3">
                <li><b><a href="home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="loginn.php">Login</a></li>
            </td>
        </tr>
        <tr>
            <td><img src="pic/DSC06368.jpg" width="1000" height="200" name="parent" /></td>
        </tr>
        <tr>
            <td>
                <table border="0" bgcolor="#0B0B0B" cellspacing="0">
                    <tr>
                        <td width="200" height="600" valign="top">
                            <table border="0" width="200" cellspacing="0">
                                <tr>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td>
                                        <script type="text/javascript">
                                            var Weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                                            var MonthA = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                                            var Mdays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

                                            var Today = new Date();
                                            var Date = Today.getDate();
                                            var Month = Today.getMonth();
                                            var dow = Today.getDay();
                                            var Year = Today.getFullYear();

                                            if ((Year % 400 == 0) || ((Year % 4 == 0) && (Year % 100 != 0))) Mdays[1] = 29;

                                            var Mfirst = new Date(Year, Month, 1);
                                            var dow1 = Mfirst.getDay();

                                            document.write("Today is " + Weekday[dow] + ", " + MonthA[Month] + " " + Date + ", " + Year);

                                            var day = 1;
                                            var i, j;

                                            document.write("<br><br><table border='1' bordercolor='INDIGO'><tr><th colspan='7' align='center'>" + MonthA[Month] + " " + Year + "</th></tr>");
                                            document.write("<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>");

                                            for (i = 0; i < 6; i++) {
                                                document.write("<tr>");
                                                for (j = 0; j < 7; j++) {
                                                    if ((i == 0 && j < dow1) || (day > Mdays[Month])) {
                                                        document.write("<td><br></td>");
                                                    } else {
                                                        if (day == Date) {
                                                            document.write("<td><font color='red'>" + day + "</font></td>");
                                                        } else {
                                                            document.write("<td>" + day + "</td>");
                                                        }
                                                        day++;
                                                    }
                                                }
                                                document.write("</tr>");
                                                if (day > Mdays[Month]) break;
                                            }
                                            document.write("</table>");
                                        </script>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="600" height="600" valign="top" bgcolor="#FFF8DC"><br><br>
                            <center>
                                <table style="margin-top:-12px" width="500px" border="0" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">
                                    <tr>
                                        <td valign="top" align="left" bgcolor="#ffffff" width="380px" height="150px">
                                            <div id="mainContent">
                                                <div id="pagetitle">
                                                    <b>DURAME CITY RESIDENT RECORD MANAGEMENT SYSTEM</b>
                                                </div>
                                                <div id="mainContent1">
                                                    <br>
                                                    <div id="middletxtheadermain" align="left"><br />
                                                        <center><img src="image/key1.png" width="140px" height="110px" valign="top" /></center>
                                                    </div>
                                                    <div id="middletxt">
                                                        <form action="tologin.php" method="post" name="frm_login" id="frm_login">
                                                            <table border="1" style="width:325px;border:1px solid black;border-radius:10px;" align="center">
                                                                <tr>
                                                                    <td height="22" width="325px">
                                                                        <table width="325px" border="0">
                                                                            <tr>
                                                                                <td width="20" height="37">
                                                                                    <div align="left" style="margin-left:2px;">
                                                                                        <strong>
                                                                                            <font color="#FF0000">*</font> Position:
                                                                                        </strong>
                                                                                    </div>
                                                                                </td>
                                                                                <td align="left">
                                                                                    <select id="acc_type" name="acc_type" style="width:175px;height:20px;margin-left:2px;">
                                                                                        <option></option>
                                                                                        <option>chairman</option>
                                                                                        <option>Record Officer</option>
                                                                                        <option>Administrator</option>
                                                                                        <option>user</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="80" height="37">
                                                                                    <div align="left">
                                                                                        <strong>
                                                                                            <font color="red">*</font> Username:
                                                                                        </strong>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="80">
                                                                                    <input type="text" name="txt_userid" id="txt_userid" maxlength="22" style="border:1px solid #480000;width:176px;height:25px;background:#FFFFFF;border-radius:5px;" placeholder="Enter Username" />
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="80" height="37">
                                                                                    <div align="left">
                                                                                        <strong>
                                                                                            <font color="#FF0000">*</font> Password:
                                                                                        </strong>
                                                                                    </div>
                                                                                </td>
                                                                                <td width="80">
                                                                                    <input type="password" name="txt_password" id="txt_password" maxlength="22" style="border:1px solid #480000;width:176px;height:25px;background:#FFFFFF;border-radius:5px;" placeholder="Enter password" />
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3" align="left" style="padding-left:60px;">
                                                                                    <input type="submit" id="submitMain" name="submitMain" value="Login" title="Click here to login" />
                                                                                    <input type="reset" value="CLEAR" title="Click here to clear the text box" />
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </form>

                                                        <?php
                                                        // Database connection parameters
                                                        $host = 'localhost';
                                                        $username = 'root';
                                                        $password = 'nasis';
                                                        $dbname = 'resident';

                                                        // Create connection
                                                        $con = new mysqli($host, $username, $password, $dbname);

                                                        // Check connection
                                                        if ($con->connect_error) {
                                                            die("Connection failed: " . $con->connect_error);
                                                        }


                                                        if (isset($_POST['submitMain'])) {
                                                            $account_type = $con->real_escape_string($_POST['acc_type']);
                                                            $userid = $con->real_escape_string($_POST['txt_userid']);
                                                            $password = $con->real_escape_string($_POST['txt_password']);

                                                            $query = "SELECT * FROM user WHERE Position = '{$account_type}' AND Username = '{$userid}' AND Password = '{$password}'";
                                                            $result_set = $con->query($query);

                                                            if ($result_set->num_rows == 1) {
                                                                if ($account_type == "chairman") {
                                                                    header('location: chairman.php');
                                                                } elseif ($account_type == "Record Officer") {
                                                                    header('location: rec_officer.php');
                                                                } elseif ($account_type == "Administrator") {
                                                                    header('location: administrator.php');
                                                                } elseif ($account_type == "user") {
                                                                    header('location: user.php');
                                                                } else {
                                                                    header('location: home.php');
                                                                }
                                                            } else {
                                                                echo "<div align='center'><font color='red'>Invalid Username or Password !</font></div>";
                                                            }
                                                        }

                                                        // Close the database connection
                                                        $con->close();
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                        <td width="200" height="600" valign="top">
                            <table border="0" width="200" cellspacing="0">
                                <tr>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td><br><br></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table border="0" width="1000" cellspacing="0" height="50">
                                <tr>
                                    <td colspan="3" align="center" bgcolor="#000000">
                                        <font color="#FFFFFF" size="2px"> &copy;&nbsp;2024 All Rights Reserved. &nbsp;&nbsp;&nbsp; Maintained By Durame Town Municipality</font>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>