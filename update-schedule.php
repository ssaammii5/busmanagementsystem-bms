<?php include "logincheck.php"; ?>

<?php
include "connection.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $departure = $_POST['departure'];
  $arrival = $_POST['arrival'];
  $route_id = $_POST['route_id'];
  $driver_id = $_POST['driver_id'];
  $bus_id = $_POST['bus_id'];



  $sql = "UPDATE `schedule` SET `departure`='$departure',`arrival`='$arrival',`route_id`='$route_id',`driver_id`='$driver_id', `bus_id`='$bus_id' WHERE id = $id";

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
          <li class="nav-item">
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
          <li class="nav-item active">
            <a class="nav-link" href="./bus-schedule.php">
              <i class="fa fa-clock-o" aria-hidden="true"></i>
              <p>Bus Schedule</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="./maps.html">
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
          <a class="navbar-brand" href="">Add Bus Schedule</a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">

        <!--main body-->
        <div class="container-fluid">

          <div class="d-flex justify-content-around">
            <a class="btn btn-primary" href="./bus-schedule.php" role="button">Add New Schedule</a>
            <a class="btn btn-success" href="./show-schedule.php" role="button">View Schedule</a>
          </div>

          <br>


          <?php
          $sql = "SELECT * FROM `schedule` WHERE id = $id";
          $result = mysqli_query($conn, $sql);
          $row_root = mysqli_fetch_assoc($result);
          ?>


          <form action="" method="post">

            <div class="form-group mb-3">
              <label for="">Departure Time</label>
              <input type="datetime-local" name="departure" class="form-control"
                value="<?php echo $row_root['departure'] ?>">
            </div>
        </div>
        <div class="col">
          <div class="form-group mb-3">
            <label for="">Arrival Time</label>
            <input type="datetime-local" name="arrival" class="form-control" value="<?php echo $row_root['arrival'] ?>">
          </div>


          <div class="form-group">
            <label for="exampleFormControlInput1">Route ID</label>
            <select name="route_id" class="form-control">
              <option value="" disabled selected>Select</option>
              <?php
              $sql = "SELECT * FROM `route`";
              $result = mysqli_query($conn, $sql);

              if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="' . $row["id"] . '">' . $row["id"] . ' ~> ' . $row["source"] . ' to ' . $row["destination"] . '</option>';
                }
              } else {
                echo '<option value="" disabled>No options available</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Driver ID</label>
            <select name="driver_id" class="form-control">
              <option value="" disabled selected>Select</option>
              <?php
              $sql = "SELECT * FROM `driver`";
              $result = mysqli_query($conn, $sql);

              if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="' . $row["driver_id"] . '">' . $row["driver_id"] . ' ~> ' . $row["driver_name"] . '</option>';
                }
              } else {
                echo '<option value="" disabled>No options available</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Bus ID</label>
            <select name="bus_id" class="form-control">
              <option value="" disabled selected>Select</option>
              <?php
              $sql = "SELECT * FROM `bus`";
              $result = mysqli_query($conn, $sql);

              if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="' . $row["bus_id"] . '">' . $row["bus_id"] . '</option>';
                }
              } else {
                echo '<option value="" disabled>No options available</option>';
              }
              ?>
            </select>
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