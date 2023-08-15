<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Login</title>
</head>

<body>

  <!-- php script start -->
  <?php

  $email_err = $pass_err = $login_Err = "";
  $email = $pass = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_REQUEST["email"])) {
      $email = $_REQUEST["email"];
    }

    if (!empty($_REQUEST["password"])) {
      $pass = $_REQUEST["password"];
    }

    if (!empty($email) && !empty($pass)) {

      // database connection
      require_once "./connection.php";

      $sql_query = "SELECT * FROM admin WHERE email='$email' && password = '$pass'  ";
      $result = mysqli_query($conn, $sql_query);

      if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
          session_start();
          $_SESSION["email"] = $rows["email"];
          header("Location: index.php?login-success");
        }
      } else {
        $login_Err = "<div class='alert alert-warning alert-dismissible fade show'>
            <strong>Invalid Email/Password</strong>
            <button type='button' class='close' data-dismiss='alert' >
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
      }

    }

  }

  ?>

  <section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-white hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
      <img src="./asset/bus-login.svg" alt="" srcset="">
    </div>

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
      flex items-center justify-center">

      <div class="w-full h-100">

        <h1 class="text-2xl font-bold text-blue-600">Bus Management System</h1>

        <h1 class="text-xl md:text-lg font-bold leading-tight mt-12">Log in to your account</h1>

        <form class="mt-6" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
          <div>
            <label class="block text-gray-700">Username</label>
            <input type="text" name="email" id="" placeholder="Enter Username"
              class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
              autofocus autocomplete required>
          </div>

          <div class="mt-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" id="" placeholder="Enter Password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
              focus:bg-white focus:outline-none" required>
          </div>

          <div class="text-right mt-2">
            <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot
              Password?</a>
          </div>

          <button type="submit" class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
            px-4 py-3 mt-6" name="signin" value="Log-In">Log In</button>
        </form>

        <hr class="my-6 border-gray-300 w-full">


        <p class="mt-8">Need an account? <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">Create an
            account</a></p>

        <p class="text-sm text-gray-500 mt-12">&copy; 2023 Bus Management System - All Rights Reserved.</p>
      </div>
    </div>

  </section>
</body>

</html>