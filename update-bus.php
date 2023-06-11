<?php
include "connection.php";
$bus_id = $_GET["bus_id"];

if (isset($_POST["submit"])) {
  $model_number = $_POST['model_number'];
  $licence_number = $_POST['licence_number'];
  $mileage = $_POST['mileage'];
  $bus_type = $_POST['bus_type'];
  $total_seat = $_POST['total_seat'];

  $sql = "UPDATE `bus` SET `model_number`='$model_number',`licence_number`='$licence_number',`mileage`='$mileage',`bus_type`='$bus_type', `total_seat`='$total_seat' WHERE bus_id = $bus_id";

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
          <li class="active">
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
            <a class="nav-link" href="./typography.html">
              <i class="fa fa-road" aria-hidden="true"></i>
              <p>Route</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="./icons.html">
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
            <a class="nav-link active" href="">
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
          <a class="navbar-brand" href="#"> Update Bus</a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">

        <!--main body-->
        <div class="container-fluid">

          <div class="d-flex justify-content-around">
            <a href="bus.php" class="btn btn-primary">Add New Bus</a>
            <a href="show-bus.php" class="btn btn-success">View Bus</a>
          </div>

          <br>

          <?php
          $sql = "SELECT * FROM `bus` WHERE bus_id = $bus_id";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          ?>

          <form action="" method="post">
            <div class="form-group">
              <label class="form-label">Model Number</label>
              <input type="text" class="form-control" name="model_number" value="<?php echo $row['model_number'] ?>"
                placeholder="Enter Bus Model Number">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Licence Number</label>
              <input type="text" class="form-control" name="licence_number" value="<?php echo $row['licence_number'] ?>"
                placeholder="Enter Bus Licence Number">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Mileage</label>
              <input type="text" class="form-control" name="mileage" value="<?php echo $row['mileage'] ?>"
                placeholder="Enter total distance travelled">
            </div>

            <div class="form-group">
              <label>Bus Type:</label>
              &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;
              <input type="radio" class="form-check-input" name="bus_type" id="AC" value="AC" <?php echo ($row["bus_type"] == 'AC') ? "checked" : ""; ?>>
              <label for="male" class="form-input-label">AC</label>
              &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;
              &nbsp;
              <input type="radio" class="form-check-input" name="bus_type" id="NON-AC" value="NON-AC" <?php echo ($row["bus_type"] == 'NON-AC') ? "checked" : ""; ?>>
              <label for="female" class="form-input-label">NON-AC</label>
            </div>

            <div class="form-group">
              <label for="total_seat">Total Seat</label>
              <input type="text" class="form-control" name="total_seat" value="<?php echo $row['total_seat'] ?>"
                placeholder="Enter total number of seat">
            </div>
            <div>
              <button type="submit" class="btn btn-success" name="submit">Save</button>
              <a href="./show-bus.php" class="btn btn-danger">Cancel</a>
            </div>
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