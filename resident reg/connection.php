<?php
// CSS styles
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
// Database connection using mysqli
$servername = "localhost";
$username = "root";
$password = "nasis";
$database = "resident";

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Select the database
$db_select = $conn->select_db($database);
if (!$db_select) {
    die("Database selection failed: " . $conn->error);
}
?>
