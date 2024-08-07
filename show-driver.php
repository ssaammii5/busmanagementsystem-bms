<?php
include "connection.php";
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
          <a class="navbar-brand" href="#"> View All Driver</a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">

        <!--main body-->
        <div class="container-fluid">

          <div class="d-flex justify-content-around">
            <a href="./driver.php" class="btn btn-primary">Add New Driver</a>
            <a href="./show-driver.php" class="btn btn-success">View Driver</a>
          </div>

          <br>


          <table class="table table-hover text-center">
            <thead class="table-dark">
              <tr>
                <th scope="col">Driver ID</th>
                <th scope="col">Driver Name</th>
                <th scope="col">Address</th>
                <th scope="col">Contact Number</th>
                <th scope="col">NID</th>
                <th scope="col">Licence No.</th>
                <th scope="col">Joining Date</th>
                <th scope="col">Salary(৳)</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM `driver`";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td>
                    <?php echo $row["driver_id"] ?>
                  </td>
                  <td>
                    <?php echo $row["driver_name"] ?>
                  </td>
                  <td>
                    <?php echo $row["address"] ?>
                  </td>
                  <td>
                    <?php echo $row["contact"] ?>
                  </td>
                  <td>
                    <?php echo $row["nid"] ?>
                  </td>
                  <td>
                    <?php echo $row["licence"] ?>
                  </td>
                  <td>
                    <?php echo $row["join_date"] ?>
                  </td>
                  <td>
                    ৳
                    <?php echo $row["salary"] ?>
                  </td>
                  <td>
                    <a href="update-driver.php?driver_id=<?php echo $row["driver_id"] ?>" class="link-dark"><i
                        class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="delete-driver.php?driver_id=<?php echo $row["driver_id"] ?>" class="link-dark"><i
                        class="fa fa-trash-o" aria-hidden="true"></i></a>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>

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