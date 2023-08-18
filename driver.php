<?php include "logincheck.php"; ?>

<?php
include "connection.php";

if (isset($_POST["submit"])) {
  $driver_name = $_POST['driver_name'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $nid = $_POST['nid'];
  $licence = $_POST['licence'];
  $join_date = $_POST['join_date'];
  $salary = $_POST['salary'];

  $sql = "INSERT INTO `driver`(`driver_name`, `address`, `contact`, `nid`, `licence`,`join_date`,`salary`) VALUES ('$driver_name','$address','$contact', '$nid', '$licence','$join_date','$salary')";

  $result = mysqli_query($conn, $sql);
}

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
          <li>
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
          <li class="nav-item active">
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
          <a class="navbar-brand" href="">Add New Driver</a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">

        <!--main body-->
        <div class="container-fluid">

          <div class="d-flex justify-content-around">
            <a class="btn btn-primary" href="./driver.php" role="button">Add New Driver</a>
            <a class="btn btn-success" href="./show-driver.php" role="button">View Driver</a>
          </div>

          <br>


          <form action="" method="post">
            <div class="form-group">
              <label for="exampleFormControlInput1">Driver Name</label>
              <input type="text" class="form-control" name="driver_name" placeholder="Enter driver name" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Address</label>
              <input type="text" class="form-control" name="address" placeholder="Enter driver address" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Contact Number</label>
              <input type="text" class="form-control" name="contact" placeholder="Enter driver contact number" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">National Identity Card (NID) Number</label>
              <input type="text" class="form-control" name="nid" placeholder="Enter driver NID" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">License Number</label>
              <input type="text" class="form-control" name="licence" placeholder="Enter Driver License Number" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Joining Date</label>
              <input type="date" class="form-control" name="join_date" placeholder="Enter date" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Salary</label>
              <input type="text" class="form-control" name="salary" placeholder="Enter Driver's Salary" required>
            </div>
            <input class="btn btn-primary" type="submit" name="submit">
          </form>
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