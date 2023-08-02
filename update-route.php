<?php
include "connection.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $source = $_POST['source'];
  $destination = $_POST['destination'];


  $sql = "UPDATE `route` SET `source`='$source',`destination`='$destination' WHERE id = $id";

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
          <a class="navbar-brand" href="#">Update Driver</a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">

        <!--main body-->
        <div class="container-fluid">

          <div class="d-flex justify-content-around">
            <a class="btn btn-primary" href="./driver.php" role="button">Add New Route</a>
            <a class="btn btn-success" href="./show-route.php" role="button">View Route</a>
          </div>

          <br>


          <?php
          $sql = "SELECT * FROM `route` WHERE id = $id";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          ?>


          <form action="" method="post">

            <div class="form-group">
              <label for="exampleFormControlInput1">Source</label>
              <select name="source" class="form-control">
                <option value="" disabled>Select</option>
                <option value="Barisal" <?php if ($row['source'] === 'Barisal')
                  echo ' selected'; ?>>Barisal</option>
                <option value="Barguna" <?php if ($row['source'] === 'Barguna')
                  echo ' selected'; ?>>Barguna</option>
                <option value="Bhola" <?php if ($row['source'] === 'Bhola')
                  echo ' selected'; ?>>Bhola</option>
                <option value="Jhalokati" <?php if ($row['source'] === 'Jhalokati')
                  echo ' selected'; ?>>Jhalokati
                </option>
                <option value="Patuakhali" <?php if ($row['source'] === 'Patuakhali')
                  echo ' selected'; ?>>Patuakhali
                </option>
                <option value="Pirojpur" <?php if ($row['source'] === 'Pirojpur')
                  echo ' selected'; ?>>Pirojpur</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Destination</label>
              <select name="destination" class="form-control">
                <option value="" disabled>Select</option>
                <option value="Barisal" <?php if ($row['destination'] === 'Barisal')
                  echo ' selected'; ?>>Barisal</option>
                <option value="Barguna" <?php if ($row['destination'] === 'Barguna')
                  echo ' selected'; ?>>Barguna</option>
                <option value="Bhola" <?php if ($row['destination'] === 'Bhola')
                  echo ' selected'; ?>>Bhola</option>
                <option value="Jhalokati" <?php if ($row['destination'] === 'Jhalokati')
                  echo ' selected'; ?>>Jhalokati
                </option>
                <option value="Patuakhali" <?php if ($row['destination'] === 'Patuakhali')
                  echo ' selected'; ?>>Patuakhali
                </option>
                <option value="Pirojpur" <?php if ($row['destination'] === 'Pirojpur')
                  echo ' selected'; ?>>Pirojpur
                </option>
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