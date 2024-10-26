<?php
// CSS Styles
?>
<style type="text/css">
<!--
body,td,th {
    color: #000000;
}
body {
    background-color: #FFFFCC;
}
-->
</style>

<?php
// Database Connection using mysqli
$servername = "localhost";
$username = "root";
$password = "nasis";
$database = "resident";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
