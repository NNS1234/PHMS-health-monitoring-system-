<?php

include './includes/connect.php';

if(isset($_POST['name']) && $_POST['name']!='')
{
  $medicine_name=$_POST['name'];
  $doctor_name=$_POST['drname'];
  $start_date=$_POST['startdate'];
  $end_date=$_POST['enddate'];
  $daily_dose=$_POST['dose'];
  $sql="insert into `addmedication` (medicine_name, doctor_name, start_date, end_date, daily_dose) values ('$medicine_name','$doctor_name','$start_date','$end_date','$daily_dose')";
 

  $result=mysqli_query($con,$sql);

  if(!$result)
{
  die(mysqli_error($con));
} else {
  unset($_POST);
  echo '<script>header("Location:addmedicine.php")</script>';
}



}

session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['hmmsuid'] == 0)) {
  header('location:logout.php');
} else {


?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" type="text/css" href="./assets/css/medicinestyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
  <title>Personal Health Monitoring Management System</title>

  <style>
    .panel-primary>.panel-heading {
    color: #fff;
    background-color: rgb(6,57,112);
    border-color: rgb(6,57,112);
}
  </style>
</head>

<body>
<div class="main-wrapper">
      
  
<div class="page-wrapper">
        <div class="content">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark1 fixed-top">
      <a class="navbar-brand" href="#"><b>PHMS</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link " href="dashboard.php">My Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li> -->
        </ul>
      </div>
    </nav>
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

                      <h3 style="text-align: center;color: #063970;font-family: Sans-serif, serif;">Your medications Section, <?php echo $row->FullName; ?></h3>
                  <?php $cnt = $cnt + 1;
                    }
                  } ?>
                </div>
              </div>
            </div>



          </div>
    <br>
<form method="post" action="">
  <div class="row ">
    <div class="col-xs-12 ">
      <div class="row justify-content-center">
        <div class="col-xs-6 col-xs-offset-1">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="panel-title">
                Add Medication
              </div>
            </div>
            <div class="panel-body">
              <div class="form">
                <div class="row fieldRow">
                  <div class="col-xs-2">
                    <label for="name" class="fieldLabel">
                      Medicine Name:
                    </label>
                  </div>
                  <div class="col-xs-6" id="nameContainer">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Drug Name (ex. Advil) " required/>
                  </div>
                
                </div>
                <div class="row fieldRow">
                  <div class="col-xs-2">
                    <label for="drname" class="fieldLabel">
                      Doctor Name:
                    </label>
                  </div>
                  <div class="col-xs-6" id="nameContainer">
                    <input type="text" id="drname" name="drname" class="form-control" placeholder="Prescribed Doctor Name " required/>
                  </div>
                
                </div>
                <div class="row fieldRow">
                  <div class="col-xs-2">
                    <label for="startdate" class="fieldLabel">
                      Start Date:
                    </label>
                  </div>
                  <div class="col-xs-10">
                        <input type="date" id="startdate" name="startdate" value="date" checked required/> 
                      </label>
                  </div>
                </div>
                <div class="row fieldRow">
                  <div class="col-xs-2">
                    <label for="enddate" class="fieldLabel">
                      End Date:
                    </label>
                  </div>
                  <div class="col-xs-10">
                        <input type="date" id="enddate" name="enddate" value="date" checked required /> 
                      </label>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-2">
                    <label for="weight" class="fieldLabel">
                      Daily Dose:
                    </label>
                  </div>
                  <div class="form">
                    <div class="col-xs-3 dose">
                      <label>
                        <input type="checkbox" id="morning" name="dose" value="morning" checked /> Morning
                      </label>
                    </div>
                    <div class="col-xs-3 dose">
                      <label>
                        <input type="checkbox" id="noon" name="dose" value="noon" /> Noon
                      </label>
                    </div>
                                      <div class="col-xs-3 dose">
                      <label>
                        <input type="checkbox" id="night" name="dose" value="night" /> Night
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row fieldRow center">
                <div class="col-xs-10 col-xs-offset-2">
                  <input type="submit" id="addPersonBtn" name="addMedicineBtn" class="btn bg-dark1 pull-left" value="Add Medicine" />
                  <!-- <input type="button" id="resetFormBtn" name="resetFormBtn" class="btn btn-danger" value="Reset" /> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
      <div class="row justify-content-center" id="peopleList">
        <div class="col-xs-112 col-xs-offset-1">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="panel-title">
                MEDICATION HISTORY
              </div>
            </div>
            <div class="panel-body">
              <table class="table table-responsive table-bordered table-hover table-stripped">
                <thead>
                  <tr>
                    <th colspan="6">
                      Medicine List
                    </th>
                  </tr>
                  <tr>
                    <th>
                      Medicine Name
                    </th>
                    <th>
                      Doctor Name
                    </th>
                    <th>
                      Start Date
                    </th>
                    <th>
                      End Date
                    </th>
                    <th>
                      Daily Dose
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $sqlget = "SELECT * FROM addmedication";
                      $exec=mysqli_query($con,$sqlget);
                      
                      while($res=mysqli_fetch_array($exec))
                      {
                        $val1 = $res['medicine_name'];
                        $val2 = $res['doctor_name'];
                        $val3 = $res['start_date'];
                        $val4 = $res['end_date'];
                        $val5 = $res['daily_dose'];
                        

                        echo '<tr><td>'.$val1.'</td><td>'.$val2.'</td><td>'.$val3.'</td><td>'.$val4.'</td><td>'.$val5.'</td></tr>';
                      }
                      
                  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
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

                    </body> <?php }  ?>
