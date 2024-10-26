<?php
if (isset($_GET["attempt"])) {
    $attempt = $_GET["attempt"];
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="ISO-8859-1">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/mu.css" type="text/css">
    <style type="text/css">
        body {
            background-color: #FFFFCC;
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
    <script type="text/javascript">
        var count = 0;

        function member() {
            var images = ["image/df.jpg", "image/dg.jpg", "image/dh.jpg", "image/dj.jpg"];
            document.getElementsByName('parent')[0].src = images[count];
            count = (count + 1) % images.length;
            setTimeout(member, 3000);
        }
    </script>
</head>

<body onload="member();" onpageshow="if(event.persisted) noBack();">
    <table border="0" width="1299" cellspacing="0">
        <tr>
            <td colspan="3"><img src="image/dk.jpg" width="1299" height="60" alt="Logo"></td>
        </tr>
        <tr>
            <td id="dropdown" colspan="3">
                <ul>
                    <li><b><a href="home.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="Login.php">Login</a></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><img src="image/df.jpg" width="1299" height="60" name="parent" alt="Slideshow"></td>
        </tr>
        <tr>
            <td>
                <table border="0" bgcolor="pink" cellspacing="0">
                    <tr>
                        <td width="50" height="600" valign="top">
                            <table border="0" width="50" cellspacing="0">
                                <tr>
                                    <td><br><br><img src="image/13.jpg" alt="u" width="250" height="170"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <script type="text/javascript">
                                            (function () {
                                                var Weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                                                var MonthA = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                                                var Mdays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

                                                var Today = new Date();
                                                var Date = Today.getDate();
                                                var Month = Today.getMonth();
                                                var dow = Today.getDay();
                                                var Year = Today.getFullYear();

                                                if ((Year % 400 === 0) || ((Year % 4 === 0) && (Year % 100 !== 0))) Mdays[1] = 29;

                                                var Mfirst = new Date(Year, Month, 1);
                                                var dow1 = Mfirst.getDay();

                                                document.write("Today is " + Weekday[dow] + ", " + MonthA[Month] + " " + Date + ", " + Year);

                                                document.write("<br><br><table border='1' bordercolor='indigo'><tr><th colspan='7' align='center'>" + MonthA[Month] + " " + Year + "</th></tr>");
                                                document.write("<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>");
                                                var day = 1;
                                                for (var i = 0; i < 6; i++) {
                                                    document.write("<tr>");
                                                    for (var j = 0; j < 7; j++) {
                                                        if ((i === 0 && j < dow1) || (day > Mdays[Month])) {
                                                            document.write("<td><br></td>");
                                                        } else {
                                                            if (day === Date) {
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
                                            })();
                                        </script>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="900" height="600" valign="top" bgcolor="cyan">
                            <br><br>
                            <center>
                                <div id="loginform">
                                    <h1>LOGIN FORM</h1>
                                    <script language="javascript">
                                        function check() {
                                            var username = document.getElementById("txt_username").value;
                                            var password = document.getElementById("txt_password").value;

                                            if (username === "") {
                                                alert('Please Enter user name !!');
                                                document.getElementById("txt_username").focus();
                                                return false;
                                            }
                                            if (password === "") {
                                                alert('Please Enter password !!');
                                                document.getElementById("txt_password").focus();
                                                return false;
                                            }

                                            return true;
                                        }
                                    </script>
                                    <form action="tologin.php" method="post" name="frm_login" id="frm_login" onsubmit="return check();">
                                        <table align="center" cellspacing="0">
                                            <tr>
                                                <td colspan="2"><img src="image/key1.png" alt="Key"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <?php if (isset($attempt)) : ?>
                                                        <div class="error">
                                                            <?php if ($attempt == "null") : ?>
                                                                Enter your username and password.
                                                            <?php elseif ($attempt == "fail") : ?>
                                                                Incorrect username or password.
                                                            <?php elseif ($attempt == "contact") : ?>
                                                                Your account is deactivated. Please contact the system administrator.
                                                            <?php endif; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Account Type:</td>
                                                <td>
                                                    <select id="acc_typ" name='account_type'>
                                                        <option>Admin</option>
                                                        <option>Chairman</option>
                                                        <option>Record Officer</option>
                                                        <option>User</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Username:</td>
                                                <td><input type="text" id='txt_username' name='username' size="25"></td>
                                            </tr>
                                            <tr>
                                                <td>Password:</td>
                                                <td><input type="password" id='txt_password' name='password' size="25"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="add">
                                                    <input type="submit" value="Login" name='submitMain' />
                                                    <a href="home.php"><input type="button" name="submit" style="cursor:pointer" value="Cancel" /></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </center>
                        </td>
                        <td width="50" height="600" valign="top">
                            <table border="0" bgcolor="pink" width="50" height="600" cellspacing="0">
                                <tr bgcolor="black">
                                    <td align="center">
                                        <h3><u><font color="purple">Advertisement</font></u></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td bgcolor="white">
                                        <img src="image/df.jpg" width="200" height="170" alt="Ad 1"><br>
                                        <img src="image/dg.jpg" width="200" height="170" alt="Ad 2"><br>
                                        <img src="image/dh.jpg" width="200" height="170" alt="Ad 3">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" height="25">
                <table border="0" align="center" width="100%" bgcolor="orange" cellspacing="0">
                    <tr>
                        <td>
                            <a href="http://www.facebook.com" target="_blank"><img src="image/facebook.png" title="Facebook" width="40" height="30" alt="Facebook"></a>
                            <a href="http://www.google.com" target="_blank"><img src="image/google-map.png" title="Google" width="30" height="25" alt="Google"></a>
                            <a href="http://twitter.com" target="_blank"><img src="image/twitter.gif" title="Twitter" width="40" height="30" alt="Twitter"></a>
                            <a href="youtube.html" target="_blank"><img src="image/youtube.png" title="YouTube" width="40" height="30" alt="YouTube"></a>
                        </td>
                        <td>
                            <font face="Times New Roman" color="black"><b>DURAME CITY RESIDENCE RECORD MANAGEMENT SYSTEM &copy; 2024 COPY RIGHT RESERVED !!!</b></font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
