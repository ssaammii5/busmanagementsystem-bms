<?php
include "connection.php";
$bus_id = $_GET["bus_id"];
$sql = "DELETE FROM `bus` WHERE bus_id = $bus_id";
$result = mysqli_query($conn, $sql);
?>