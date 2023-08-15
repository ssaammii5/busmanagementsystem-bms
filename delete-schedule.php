<?php
include "connection.php";
$id = $_GET["id"];
$sql = "DELETE FROM `schedule` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (!$result) {
  die('Error: ' . mysqli_error($conn));
}
?>