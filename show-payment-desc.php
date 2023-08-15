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
          <li class="nav-item active">
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
          <a class="navbar-brand" href="#">Payment Details</a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">

        <!--main body-->
        <div class="container-fluid">

          <div class="d-flex justify-content-around">
            <a href="./payment.php" class="btn btn-primary">New Payment</a>
            <a href="./show-payment.php" class="btn btn-success">Payment Details</a>
            <p>Sort by</p>
            <a href="./show-payment-asc.php" class="btn btn-primary">Ascending</a>
            <a href="./show-payment-desc.php" class="btn btn-success">Descending</a>
          </div>
          <p></p>

          <!--from here-->
          <form action="" method="GET">
            <div class="input-group mb-3">
              <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                echo $_GET['search'];
              } ?>" class="form-control" placeholder="Search data">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </form>



          <!--to here-->

          <br>


          <table class="table table-hover text-center">
            <thead class="table-dark">
              <tr>
                <th scope="col">Payment ID</th>
                <th scope="col">Driver ID</th>
                <th scope="col">Paid(৳)</th>
                <th scope="col">Month</th>
                <th scope="col">Year</th>
                <th scope="col">Action</th>
                <th scope="col">Invoice</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (isset($_GET['search'])) {
                $filtervalues = $_GET['search'];
                $query = "SELECT * FROM `payment` WHERE driver_id LIKE '%$filtervalues%' ";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {
                  while ($items = mysqli_fetch_assoc($query_run)) {
                    ?>
                    <tr>
                      <td>
                        <?= $items['id']; ?>
                      </td>
                      <td>
                        <?= $items['driver_id']; ?>
                      </td>
                      <td>
                        ৳
                        <?= $items['salary']; ?>
                      </td>
                      <td>
                        <?= $items['month']; ?>
                      </td>
                      <td>
                        <?= $items['year']; ?>
                      </td>
                      <td>
                        <a href="delete-payment.php?id=<?= $items['id']; ?>" class="link-dark">
                          <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                      </td>
                      <td>
                        <a href="payslip.php?id=<?php echo $items["id"]; ?>" class="btn btn-success"><i
                            class="fa fa-file-pdf-o"></i>PDF</a>
                      </td>
                    </tr>
                    <?php
                  }
                } else {
                  ?>
                  <tr>
                    <td colspan="7">No Record Found</td>
                  </tr>
                  <?php
                }
              } else {
                // Display all payment records if no search query is provided
                $sql = "SELECT * FROM `payment` order by driver_id desc";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <td>
                      <?= $row["id"] ?>
                    </td>
                    <td>
                      <?= $row["driver_id"] ?>
                    </td>
                    <td>
                      ৳
                      <?= $row["salary"] ?>
                    </td>
                    <td>
                      <?= $row["month"] ?>
                    </td>
                    <td>
                      <?= $row["year"] ?>
                    </td>
                    <td>
                      <a href="delete-payment.php?id=<?= $row["id"] ?>" class="link-dark">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </a>
                    </td>
                    <td>
                      <a href="payslip.php?id=<?php echo $row["id"]; ?>" class="btn btn-success"><i
                          class="fa fa-file-pdf-o"></i>PDF</a>
                    </td>
                  </tr>
                  <?php
                }
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