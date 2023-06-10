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
          <span class="material-symbols-sharp">
            analytics
          </span>
          <div class="middle">
            <div class="left">
              <h3>Total Sales</h3>
              <h1>$25,024</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>81%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Last 24 Hours</small>
        </div>
        <!-------------END OF SALES-------------->
        <div class="expenses">
          <span class="material-symbols-sharp">
            bar_chart
          </span>
          <div class="middle">
            <div class="left">
              <h3>Total Expenses</h3>
              <h1>$14,160</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>62%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Last 24 Hours</small>
        </div>
        <!-------------END OF EXPENSES-------------->
        <div class="income">
          <span class="material-symbols-sharp">
            stacked_line_chart
          </span>
          <div class="middle">
            <div class="left">
              <h3>Total Income</h3>
              <h1>$10,864</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>44%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Last 24 Hours</small>
        </div>
        <!-------------END OF INCOME-------------->
      </div>
    </main>
  </div>
</body>

</html>