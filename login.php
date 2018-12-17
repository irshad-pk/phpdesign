
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/media/favicon.ico" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/custom.css">
  <title>Login | Al Jazeera Media</title>
</head>
<body>

  <div class="wrapper">
    <!-- Side navigation -->
    <div class="col-sm-2 nav-padding">
      <nav class="navbar navbar-default firstnav">
        <!-- Mobile - hamburger icon -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="news.html"><img src="assets/media/logo.png" alt="Logo"></a>
        </div>
        <div class="clearfix"></div>

        <!-- Menu nav -->
        <div class="sidenav collapse navbar-collapse" id="myNavbar">

          <div class="social-links">
            <ul>
              <li class="social"><i class="fa fa-facebook-f"></i></li>
              <li class="social"><i class="fa fa-twitter-square"></i></li>
              <li class="social"><i class="fa fa-instagram"></i></li>
              <li class="social"><i class="fa fa-envelope"></i></li>
            </ul>
          </div>

          <div class="language-switcher">
            <a href="#"><span class="glyphicon glyphicon-globe"></span> Language</a>
          </div>

          <div class="search-form">
            <form class="example" action="action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>

          <div class="menu-links">
            <ul class="menu-link">
              <li><a class="active" href="http://localhost/phpdesign/login.php">Login</a></li>|
              <li><a href="http://localhost/phpdesign/signup.php">Sign Up</a></li>
              <li><a href="http://localhost/phpdesign/partnership.php">Partnerships</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Our Courses</a></li>
              <li><a href="#">E-learning</a></li>
              <li><a href="http://localhost/phpdesign/news-events.php">News&Events</a></li>
              <li><a href="#">Stories</a></li>
              <li><a href="#">Journalism Magazine</a></li>
              <li><a href="#">Publications</a></li>
              <li><a href="#">Media Tips</a></li>
              <li><a href="#">Contacts</a></li>
            </ul>
          </div>
        </div>
        <footer>
          <small>  2017 Al Jazeera Media Network. <br>
            All rights reserved</small>&copy
        </footer>
      </nav>
    </div>
  </div>

  <div class="col-sm-10 bg">
    <div>
      <section id="loginform" class="outer-wrapper">
        <div class="inner-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-sm-offset-4">
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                  <div class="form-group inner-addon left-addon">
                    <i class="glyphicon glyphicon-user glyphicon-style"></i>
                    <input type="text" name="username" class="form-control inp-style" placeholder="User Name">
                  </div>
                  <div class="form-group inner-addon left-addon">
                    <i class="glyphicon glyphicon-lock glyphicon-style"></i>
                    <input type="password" name="password" class="form-control inp-style" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" class="btn-form" value="LOGIN">
                  </div>
                  <ul class="list-inline">
                    <li class="list-inline-item alignleft"><p><a class="link" href="signup.php">New Member</a></p></li>
                    <li class="list-inline-item alignright"><p><a class="link" href="#">Forgot password?</a></p></li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php

  // print_r($_POST);exit;

  if(isset($_POST['submit'])){
    include("config.php");
    $username=$_POST['username'];
    $password=$_POST['password'];

    if ( (!empty($username)) && (!empty($password)) ) {

      $results = mysqli_query($db, "SELECT * FROM users WHERE username='$username' and password='$password'");
      if (mysqli_num_rows($results) != 0)
      {
        ?>
        <p class="text-success output-overimg">Succesfully logged in</p>
        <?php
      }
      else {
        ?>
        <p class="text-danger output-overimg">Enter a valid username and password</p>
        <?php
      }
    }
    else {
      ?>
      <p class="text-danger output-overimg">Enter all the feilds.</p>
      <?php
    }
  }
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
