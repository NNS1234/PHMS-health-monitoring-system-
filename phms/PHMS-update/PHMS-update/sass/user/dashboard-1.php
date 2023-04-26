<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['hmmsuid']==0)) {
  header('location:logout.php');
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Personal Health Monitoring Management System - Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  
</head>

<body>
    <div class="main-wrapper">
         <?php include_once('includes/header.php');?>
        <!-- <?php include_once('includes/sidebar.php');?> -->
        <div class="page-wrapper">
            <div class="content">
                
<div class="row">
  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"><span><img src="./assets/img/external-blood-pressure.png"/></span>
        Blood Pressure
            </h5><hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">
            <p class="card-text"><b>SYS/DIA</b></p>
        <p class="card-text">
        <ul>
  <li>90/60 or less- Low BP<span>&#128308;</span></li>
  <li>>90/60 and <120/80- Normal BP <span>&#128154;</span></li>
  <li>>120/80 and <140/90- Little High BP <span>&#128992;</span></li>
  <li> 140/90>- High BP <span>&#128308;</span></li>
</ul>
        </p>
        <a href="#" class="btn btn-primary">Click Here</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"><span><img src="./assets/img/thermometer-medical.png"/></span>Body Temperature</h5>
        <hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">
        <p class="card-text"> <b>Body Temperature</b></p>
        <p class="card-text">
        <ul>
  <li>98.6°F-97 °F - Normal Temp <span>&#128154;</span></li>
  <li>> 98.6°F -High Temp<span>&#128308;</span></li>
</ul>

        </p>
        <a href="#" class="btn btn-primary">Click Here</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"><span class="card-title1111"><img src="./assets/img/diabetes.png"/></span>Blood Sugar</h5>
        <hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">
        <p class="card-text"><b>Fasting Blood Sugar</b></p>
        <p class="card-text">
        <ul>
  <li>>70-100 mg/dl- Normal<span>&#128154;</span></li>
  <li>>101-125 mg/dl - Prediabetes<span>&#128992;</span></li>
  <li>125 mg/dl and above - Diabetes <span>&#128308;</span></li>
</ul>
        </p>
        <p class="card-text"><b> Post Meal Blood Sugar</b></p>
        <p class="card-text">
        <ul>
  <li>>70-140 mg/dl - Normal<span>&#128154;</span></li>
  <li>141-200 mg/dl - Prediabetes <span>&#128992;</span></li>
  <li>200 mg/dl and above - Diabetes<span>&#128308;</span></li>
</ul>

        </p>
        <a href="#" class="btn btn-primary">Click Here</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"><span><img src="./assets/img/thermometer-medical.png"/></span>Diet Details</h5>
        <hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">
        <p class="card-text"> <b>Dieting Information</b></p>
        <p class="card-text">
        <ul>
  <li>Average Calories: 100 <span>&#128154;</span></li>
  <li>Keto Diet <span>&#128308;</span></li>
</ul>

        </p>
        <a href="#" class="btn btn-primary">Click Here</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"><span><img src="./assets/img/thermometer-medical.png"/></span>Doctor Appointments</h5>
        <hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">
        <p class="card-text"> <b>Upcoming Appointments</b></p>
        <p class="card-text">
        <ul>
  <li>03/01/2022 - Diabetician <span>&#128154;</span></li>
  <li>03/18/2022 - Regular Heart Checkup<span>&#128308;</span></li>
</ul>

        </p>
        <a href="#" class="btn btn-primary">Click Here</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"><span><img src="./assets/img/notes.png"/></span>Notes</h5>
        <hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">
        <p class="card-text">All your saved content in one place</p>
        <a href="#" class="btn btn-primary">Click Here</a>
      </div>
    </div>
  </div>
</div>


            </div>
            <!-- footer starts -->
            <?php include_once('includes/footer.php');?>
            <!-- footer ends -->
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    </div>




    
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>
    

</body>
</html><?php }  ?>