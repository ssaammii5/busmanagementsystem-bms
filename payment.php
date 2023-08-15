<?php include "logincheck.php" ?>

<?php
include "connection.php";

if (isset($_POST["submit"])) {
  $driver_id = $_POST['driver_id'];
  $salary = $_POST['salary'];
  $month = $_POST['month'];
  $year = $_POST['year'];


  $sql = "INSERT INTO `payment`(`driver_id`, `salary`, `month`, `year`) VALUES ('$driver_id','$salary', '$month', '$year')";

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

  <script>
    function handleSelection() {
      var selectElement = document.getElementById("previousInput");
      var selectedValue = selectElement.value;


      var selectedOption = selectElement.options[selectElement.selectedIndex];
      var optionInfo = selectedOption.getAttribute("data-info");

      document.getElementById("selectedValueInput").value = optionInfo;



      // You can also display the stored value
      console.log("Stored Value:", selectedValue);
    }
  </script>

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
          <a class="navbar-brand" href="">Route</a>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">

        <!--main body-->
        <div class="container-fluid">

          <div class="d-flex justify-content-around">
            <a class="btn btn-primary" href="./payment.php" role="button">Add New Payment</a>
            <a class="btn btn-success" href="./show-payment.php" role="button">Payment Details</a>
          </div>

          <br>
          <button class="btn btn-light" onclick="handleSelection()">Show Salary</button>
          <p></p>

          <form action="" method="post">

            <div class="form-group">
              <label for="exampleFormControlInput1">Driver ID</label>
              <select name="driver_id" class="form-control" id="previousInput">
                <option value="" selected disabled>Select</option>
                <?php
                $sql = "SELECT * FROM `driver`";
                $result = mysqli_query($conn, $sql);

                if ($result->num_rows > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option data-info="' . $row["salary"] . '" value="' . $row["driver_id"] . '">' . $row["driver_id"] . ' ~> ' . $row["driver_name"] . '</option>';
                  }
                } else {
                  echo '<option value="" disabled>No options available</option>';
                }
                ?>
              </select>
            </div>

            <div class="form-group">


              <label for="exampleFormControlInput1">Salary</label>
              <input type="text" id="selectedValueInput" class="form-control" name="salary"
                placeholder="Enter Driver's Salary" value="">

            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Month</label>
              <select name="month" class="form-control">
                <option value="" selected disabled>Select</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Year</label>
              <select name="year" class="form-control">
                <option value="" selected disabled>Select</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
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