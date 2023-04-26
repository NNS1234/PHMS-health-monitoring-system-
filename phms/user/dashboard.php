<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['hmmsuid'] == 0)) {
  header('location:logout.php');
} else {

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
      <?php include_once('includes/header.php'); ?>

      <div class="page-wrapper">
        <div class="content">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-12">
              <div class="dash-widget">

                <div class="dash-widget-info text-right">
                  <?php
                  $uid = $_SESSION['hmmsuid'];
                  $sql = "SELECT FullName,Email from  tbluser where ID=:uid";
                  $query = $dbh->prepare($sql);
                  $query->bindParam(':uid', $uid, PDO::PARAM_STR);
                  $query->execute();
                  $results = $query->fetchAll(PDO::FETCH_OBJ);
                  $cnt = 1;
                  if ($query->rowCount() > 0) {
                    foreach ($results as $row) {               ?>

                      <h3 style="text-align: center;color: #063970;font-family: Times New Roman Times, serif;">Welcome to PHMS <?php echo $row->FullName; ?></h3>
                  <?php $cnt = $cnt + 1;
                    }
                  } ?>
                </div>
              </div>
            </div>



          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><span><img src="./assets/img/external-blood-pressure.png" width="10%" /></span>
                    Vital Signs
                  </h5>

                  <hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">
                  <p class="card-text"><b>Current Vitals</b></p>
                  <p class="card-text">
                  <ul>
                    <li> Blood Pressure 110/60 Normal BP <span>&#128154</span></li>
                    <li>Body Temperature 98.6°F Normal Temp <span>&#128154</span></li>
                    <li>Blood Sugar 90 mg/dl- Normal<span>&#128154</span></li>
                  </ul>
                  </p>
                  <a href="#" class="btn btn-primary">Click Here</a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><span><img src="https://png.pngtree.com/png-vector/20190115/ourlarge/pngtree-vector-diet-icon-png-image_319636.jpg" width="10%" /></span>Diet Details</h5>
                  <hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">
                  <p class="card-text"> <b>Dieting Information</b></p>
                  <p class="card-text">
                  <ul>
                    <li>Average Calories: 100 <span>&#128154;</span></li>
                    <li>Keto Diet <span>&#128308;</span></li>
                  </ul>

                  </p>
                  <a href="addDiet.php" class="btn btn-primary">Add Diet Info</a>
                  <a href="bmicalculator.php" class="btn btn-primary">Quick BMI Calculator</a>
                  <a href="diets.php" class="btn btn-primary">Diets</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><span><img src="./assets/img/MicrosoftTeams-image.png" width="10%" /></span>Doctor Appointments</h5>
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
                  <h5 class="card-title"><span><img src="./assets/img/icons8-medication-64.png" width="10%" /></span>Medication</h5>
                  <hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">
                  <p class="card-text"> <b>Medication Tips</b></p>
                  <p class="card-text">
                  <ul>
                    <li>One must take medicine on time.<span>&#128154;</span></li>
                    <li>Do not sleep after taking medicine<span>&#128308;</span></li>
                  </ul>

                  </p>
                  <a href="addmedicine.php" class="btn btn-primary">Add Medicine</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><span><img src="https://cdn1.iconfinder.com/data/icons/galaxy-open-line-color-i/200/account-sync-512.png" width="10%" /></span>Contacts</h5>
                  <hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">                  
                  <p class="card-text">
                  <ul>
                    <li>Add and Remove Important Contacts</li>                    
                  </ul>

                  </p>
                  <a href="../add_addressbook/communication.php" class="btn btn-primary">Add Contacts</a>
                  <a href="../add_addressbook/viewContacts.php" class="btn btn-primary">View Contacts</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 py-4">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title"><span><img src="./assets/img/notes.png" width="10%" /></span>Notes</h5>
                  <hr style="height:2px; color:#063970; background-color:#063970; width:70%; margin-left:0%">
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="notes.html" class="btn btn-primary">Click Here</a>
                  
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- footer starts -->
        <?php include_once('includes/footer.php'); ?>
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