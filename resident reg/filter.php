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
                                    <div class="legend"><b>Please Enter Your Username and Password For Upload</b></div>
                                </legend>
                                <br>
                                <div>
                                    <?php
                                    session_start();
                                    ?>
                                    <!DOCTYPE html>

                                    <head>
                                        <meta charset="UTF-8" />
                                        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
                                        <title>FileMonster Login</title>
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <!--<link rel="shortcut icon" href="../favicon.ico">-->
                                        <link rel="stylesheet" type="text/css" href="css/login.css" />
                                        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
                                    </head>

                                    <body>
                                        <div class="container">
                                            <section>
                                                <div id="container_demo">
                                                    <a class="hiddenanchor" id="toregister"></a>
                                                    <a class="hiddenanchor" id="tologin"></a>
                                                    <div id="wrapper">
                                                        <div id="login" class="animate form">
                                                            <form action="filter.php" autocomplete="on" method="post">
                                                                <h1></h1>
                                                                <p>
                                                                    <label for="username" class="uname" data-icon="u">Username </label>
                                                                    <input id="username" name="username" required="required" type="text" placeholder="melaku" />
                                                                </p>
                                                                <p>
                                                                    <label for="password" class="youpasswd" data-icon="p">Password </label>
                                                                    <input id="password" name="password" required="required" type="password" placeholder="secret" />
                                                                </p>

                                                                <p class="login button">
                                                                    <input type="submit" value="Login" />
                                                                </p>

                                                            </form>
                                                        </div>

                                                        <div id="register" class="animate form">
                                                            <form action="filter.php" autocomplete="on" method="post">
                                                                <h1> Register Here </h1>
                                                                <p>
                                                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="john" />
                                                                </p>
                                                                <p>
                                                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="secret01" />
                                                                </p>
                                                                <p class="signin button">
                                                                    <input type="submit" value="Sign up" />
                                                                </p>
                                                                <p class="change_link">
                                                                    Already a member ?
                                                                    <a href="#tologin" class="to_register"> Go and log in </a>
                                                                </p>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <?php
                                        include "config.php"; // Make sure this file contains the correct database connection details

                                        function register($id, $uname, $pass)
                                        {
                                            global $conn; // Use the global connection from config.php

                                            // Hash the password for security
                                            $pass_hash = password_hash($pass, PASSWORD_BCRYPT);

                                            // Prepare and bind
                                            $stmt = $conn->prepare("INSERT INTO users (id, username, password) VALUES (?, ?, ?)");
                                            $stmt->bind_param("iss", $id, $uname, $pass_hash);

                                            // Set the id to null to use auto_increment
                                            $id = null;

                                            // Execute the query
                                            if ($stmt->execute()) {
                                                mkdir($uname, 0700);
                                                echo "<script language='javascript'>
                alert('User Registered');
                window.location = 'filter.php';
              </script>";
                                            } else {
                                                echo "<script language='javascript'>
                alert('Registration Failed Or User Already Registered');
                window.location = 'filter.php';
              </script>";
                                            }

                                            // Close the statement
                                            $stmt->close();
                                        }

                                        if (isset($_POST['usernamesignup'])) {
                                            $uname = $_POST['usernamesignup'];
                                            $pass = $_POST['passwordsignup'];

                                            register('', $uname, $pass);
                                        }

                                        if (isset($_POST['username'])) {
                                            include "config.php"; // Ensure the config file is included to establish database connection

                                            $username = $_POST['username'];
                                            $password = $_POST['password'];

                                            // Prepare and bind
                                            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
                                            $stmt->bind_param("s", $username);

                                            // Execute the query
                                            $stmt->execute();
                                            $result = $stmt->get_result();

                                            // Check username and password match
                                            if ($result->num_rows == 1) {
                                                $row = $result->fetch_assoc();

                                                if (password_verify($password, $row['password'])) {
                                                    // Set username session variable
                                                    session_start();
                                                    $_SESSION['username'] = $username;
                                                    // Redirect to secured page
                                                    header("Location: home1.php");
                                                    exit();
                                                } else {
                                                    echo "<script language='javascript'>
                    alert('Invalid Credentials');
                  </script>";
                                                }
                                            } else {
                                                echo "<script language='javascript'>
                alert('Invalid Credentials');
              </script>";
                                            }

                                            // Close the statement
                                            $stmt->close();
                                        }

                                        // Close the database connection
                                        $conn->close();
                                        ?>

                                    </body>

</html>
<td width="50" height="600" valign="top" bgcolor="#FF99FF">

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