<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>

  <link rel="stylesheet" href="./css/adminpanel.css">
  <!--Material icon cdn -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" />

</head>

<body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="./asset/logo.png" alt="">
          <h2>BMS</h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-symbols-sharp">
            close
          </span>
        </div>
      </div>
      <div class="sidebar">
        <a href="#">
          <span class="material-symbols-sharp">
            dashboard
          </span>
          <h3>Dashboard</h3>
        </a>
        <a href="#" class="active">
          <span class="material-symbols-sharp">
            assignment_ind
          </span>
          <h3>Driver</h3>
        </a>
        <a href="#">
          <span class="material-symbols-sharp">
            dashboard
          </span>
          <h3>Dashboard</h3>
        </a>
        <a href="#">
          <span class="material-symbols-sharp">
            dashboard
          </span>
          <h3>Dashboard</h3>
        </a>
        <a href="#">
          <span class="material-symbols-sharp">
            dashboard
          </span>
          <h3>Dashboard</h3>
        </a>
        <a href="#">
          <span class="material-symbols-sharp">
            dashboard
          </span>
          <h3>Dashboard</h3>
        </a>
        <a href="#">
          <span class="material-symbols-sharp">
            logout
          </span>
          <h3>Logout</h3>
        </a>
      </div>
    </aside>
    <!-----------------END OF ASIDE------------------->
    <main>
      <h1>Dashboard</h1>

      <div class="date">
        <input type="date">
      </div>

      <div class="insights">
        <div class="sales">
          <span class="material-icons-sharp">analytics</span>
          <div>
            <div>
              <h3>Total Sales</h3>
              <h1>$25,024</h1>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>