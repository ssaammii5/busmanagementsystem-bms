<?php
include "connection.php";
$driver_id = $_GET["driver_id"];
$sql = "DELETE FROM `driver` WHERE driver_id = $driver_id";
$result = mysqli_query($conn, $sql);

if (!$result) {
  die('Error: ' . mysqli_error($conn));
}
?>