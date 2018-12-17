<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- icon of the page -->
  <link rel="shortcut icon" href="assets/media/lock.png" type="image/vnd.microsoft.icon" />
  <!-- css for the page -->
  <link rel="stylesheet" href="assets/css/reg.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">

  <title>Registration</title>
</head>
<body>
  <h2 class="text-center top-style">Bootstrap<small class="font-weight-light small-style">Login Form</small></h2>
  <p class="text-center top-style">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
  <div class="reg-form">
    <section id="loginform" class="outer-wrapper">
      <div class="inner-wrapper">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-sm-4 form-bg">
              <div>
                <h4 class="top-style font-weight-light">Login to our site</h4>
                <p class="top-style">Enter your username and password to log on</p>
                <form role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                  <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control"  placeholder="Password">
                  </div>
                  <button type="submit" name="submit" class="btn btn-sm btn-block button-style">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="login-methods">
    <div class="container">
      <section id="loginmethods" class="outer-wrapper-bottom">
        <div class="inner-wrapper">
          <div class="row justify-content-md-center">
            <div class="col-sm-4">
              <p class="bottom-style text-center">..or log in with:</p>
              <ul class="nav nav-fill">
                <li class="nav-item"><button type="submit" class="social-button" name="submit"><i class="fa fa-facebook-f"></i> Facebook</button></li>
                <li class="nav-item"><button type="submit" class="social-button" name="submit"><i class="fa fa-twitter-square"></i> Twitter</button></li>
                <li class="nav-item"><button type="submit" class="social-button" name="submit"><i class="fa fa-google-plus"> Google Plus</i></button></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <?php
  // print_r($_POST);exit;
  if(isset($_POST['submit'])){
    include("configure.php");
    $username=$_POST['username'];
    $password=$_POST['password'];

    if ( (!empty($username)) && (!empty($password)) ) {

      $results = mysqli_query($db, "SELECT * FROM registration WHERE username='$username' and password='$password'");
      if (mysqli_num_rows($results) != 0)
      {
        ?>
        <p class="text-success">Succesfully logged in</p>
        <?php
      }
      else {
        ?>
        <p class="text-danger">Enter a valid username and password</p>
        <?php
      }
    }
    else {
      ?>
      <p class="text-danger">Enter all the feilds.</p>
      <?php
    }
  }
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
