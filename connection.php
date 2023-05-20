<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

//$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_errno());
}
echo "connected Successfully $dbname";
?>