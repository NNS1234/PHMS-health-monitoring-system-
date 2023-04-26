<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['login'])) {
  $emailormob = $_POST['emailormob'];
  $password = md5($_POST['password']);
  $sql = "SELECT ID FROM tbluser WHERE Email=:emailormob || MobileNumber=:emailormob and Password=:password";
  $query = $dbh->prepare($sql);
  $query->bindParam(':emailormob', $emailormob, PDO::PARAM_STR);
  $query->bindParam(':password', $password, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  if ($query->rowCount() > 0) {
    foreach ($results as $result) {
      $_SESSION['hmmsuid'] = $result->ID;
    }
    $_SESSION['login'] = $_POST['emailormob'];
    echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
  } else {
    echo "<script>alert('Invalid Details');</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- login-->

<head>
  <title>Personal Health Monitoring Management System || Login Page</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">

</head>

<body class="bg-red">
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark1 fixed-top">
      <a class="navbar-brand" href="#"><b>PHMS</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
        </ul>

      </div>
    </nav>
    <!-- <p style="padding-top: 20px;padding-left: 20px"><a href="../index.php"><i class="fa fa-home" aria-hidden="true" style="font-size: 30px;padding-right: 10px"></i>Back Home!!!</a></p> -->

    <div class="modal-dialog text-center ">
      <div class=" col-sm-8 main-section ">
        <div class="modal-content">
          <div class="col-12 ">
            <br>
            <br>
          </div>

          <form class="form-signin col-12" method="post">
            <h2 class="title">LOGIN</h2>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="&#xf2bd; Email or Phone" style="font-family:Arial, FontAwesome" required="true" value="" name="emailormob" />
            </div>
            <div class="">
              <input type="password" class="form-control" placeholder="Password" required="true" value="" name="password" />
            </div>
            <br>
            <button type="submit" class="btn account-btn" name="login">
              <i class="fas fa-sign-in-alt"></i>Login
            </button>
          </form>
          <div class="col-12 forgot">
            <a href="forgot-password.php">Forgot Password?</a>
          </div>
          <div class="forgot">
            <a href="register.php">Create an Account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/app.js"></script>

</body>

</html>