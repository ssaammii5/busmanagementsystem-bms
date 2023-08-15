<?php
include "connection.php";

$sql1 = "SELECT COUNT(*) AS total_rows1 FROM `bus`";
$sql2 = "SELECT COUNT(*) AS total_rows2 FROM `driver`";
$sql3 = "SELECT COUNT(*) AS total_rows3 FROM `route`";
$sql4 = "SELECT COUNT(*) AS total_rows4 FROM `schedule`";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);

$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
$row3 = mysqli_fetch_assoc($result3);
$row4 = mysqli_fetch_assoc($result4);

?>


<html lang="en">

<head>
  <meta charset="utf-8">

  <!-- Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/light-bootstrap-dashboard.css?v=2.0.1"
    rel="stylesheet">


</head>

<body>
  <div class="wrapper">
    <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="./index.php" class="simple-text">
            Bus Management System
          </a>
        </div>
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="./index.php">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="">
            <a class="nav-link" href="./bus.php">
              <i class="fa fa-bus" aria-hidden="true"></i>
              <p>Bus</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="./driver.php">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              <p>Driver</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="./route.php">
              <i class="fa fa-road" aria-hidden="true"></i>
              <p>Route</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="./bus-schedule.php">
              <i class="fa fa-clock-o" aria-hidden="true"></i>
              <p>Bus Schedule</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="./payment.php">
              <i class="fa fa-money" aria-hidden="true"></i>
              <p>Payment</p>
            </a>
          </li>
          <li class="nav-item active active-pro">
            <a class="nav-link active" href="./login.php">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class=" container-fluid  ">
          <a class="navbar-brand" href="">Dashboard</a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">

        <!--main body-->
        <div class="container-fluid">
          <br>

          <div class="card text-center">
            <div class="card-header">
            </div>
            <div class="card-body">
              <h4 class="card-title">Bus Counts </h4>
              <h2 class="card-text">
                <?php echo $row1["total_rows1"] ?>
              </h2>
              <a href="./show-bus.php" class="btn btn-primary">Go There</a>
            </div>
            <div class="card-footer text-muted">
            </div>
          </div>
          <div class="card text-center">
            <div class="card-header">
            </div>
            <div class="card-body">
              <h4 class="card-title">Driver Counts </h4>
              <h2 class="card-text">
                <?php echo $row2["total_rows2"] ?>
              </h2>
              <a href="./show-driver.php" class="btn btn-primary">Go There</a>
            </div>
            <div class="card-footer text-muted">
            </div>
          </div>
          <div class="card text-center">
            <div class="card-header">
            </div>
            <div class="card-body">
              <h4 class="card-title">Route Counts </h4>
              <h2 class="card-text">
                <?php echo $row3["total_rows3"] ?>
              </h2>
              <a href="./show-route.php" class="btn btn-primary">Go There</a>
            </div>
            <div class="card-footer text-muted">
            </div>
          </div>
          <div class="card text-center">
            <div class="card-header">
            </div>
            <div class="card-body">
              <h4 class="card-title">Bus Schedule Counts </h4>
              <h2 class="card-text">
                <?php echo $row4["total_rows4"] ?>
              </h2>
              <a href="./show-schedule.php" class="btn btn-primary">Go There</a>
            </div>
            <div class="card-footer text-muted">
            </div>
          </div>





        </div>
      </div>

    </div>
  </div>

</body>

<script src=".https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/core/jquery.3.2.1.min.js"
  type="text/javascript"></script>
<script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/core/popper.min.js"
  type="text/javascript"></script>
<script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/core/bootstrap.min.js"
  type="text/javascript"></script>
</body>

</html>