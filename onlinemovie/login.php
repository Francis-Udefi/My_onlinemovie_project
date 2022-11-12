<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NeonFlix</title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
          <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <div class="d-flex">
              <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
              <span class="navbar-text">NeonFlix</span>
            </div>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="test.php" class="nav-link"> Sign-Up</a> </li>
              <li class="nav-item"> <a href="user-login.php" class="nav-link"> Sign-In</a> </li>
            </ul>

          </nav>

          <div class="container">
            <div class="jumbotron">
              <h1>Watch Anywhere, <br><br> Watch Anytime... </h1>
            </div>
          </div>

        </div>
      </header>

    <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href=""></a>
      </div>
    </footer>


  </body>
</html>
