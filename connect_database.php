<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "rentbook";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
mysqli_query($conn, "SET NAMES UTF8");


?>
