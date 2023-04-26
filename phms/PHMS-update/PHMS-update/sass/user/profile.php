<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['hmmsuid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $uid=$_SESSION['hmmsuid'];
    $AName=$_POST['fname'];
  $mobno=$_POST['mobno'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $sql="update tbluser set Email=:email, FullName =:AName, Mobilenumber=:mobno, Address =:address where ID=:uid";
   // $sql = "UPDATE tbluser SET Email=$email WHERE ID=$uid";
     $query = $dbh->prepare($sql);
     $query->bindParam(':email',$email,PDO::PARAM_STR);
     $query->bindParam(':AName',$AName,PDO::PARAM_STR);
     $query->bindParam(':mobno',$mobno,PDO::PARAM_INT);
     $query->bindParam(':address',$address,PDO::PARAM_STR);
     $query->bindParam(':uid',$uid,PDO::PARAM_STR);

$query->execute();

        echo '<script>alert("Profile has been updated")</script>';
echo "<script>window.location.href ='profile.php'</script>";

     

  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Health Monitoring Management System - Profile</title>
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   
</head>

<body>
    <div class="main-wrapper">
       
        <?php include_once('includes/header.php');?>
        
        <div class="page-wrapper">
            <div class="content">
            
            
      <div class="row">
          <div class="container">
                    <div class="col-lg-15">
                        
                        
                       <h5 class="page-title" style="text-align:center;color: #063970">My Profile Dashboard</h5>
                        <h3 class="page-title" style="text-align:center;color: #063970">Welcome "<?php echo $row->FullName; ?>"</h3></br>
</div></div></div>
                   
               
                        
                <div class="container">
                   
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="card-box">
                      
                                   
                       
                            <form method="post">
                                <?php
$uid=$_SESSION['hmmsuid'];
$sql="SELECT * from  tbluser where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>              <div class="container">
                                <div class="from-group row">
                                <i class="large material-icons">account_circle</i>
                                    <div class="col-md-10">
                                    <h4 class="page-title">Profile Information</h4></br>
                                </div>  
                                </div>
</div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php  echo $row->FullName;?>" name="fname" required="true" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="int" name="mobno" class="form-control" required="true" maxlength="10" pattern="[0-9]+" value="<?php  echo $row->Mobilenumber;?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" value="<?php  echo $row->Email;?>" name="email" required="true" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php  echo $row->Address;?>" name="address" required="true" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Gender</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php  echo $row->Gender;?>" name="Gender" required="true" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php  echo $row->DOB;?>" name="DOB" required="true" class="form-control" readonly></br>
                                    </div>
                                </div>

                                
                                <?php $cnt=$cnt+1;}} ?>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button></br>
                                </div>
                            </form>
                        </div>
                   
                    </div>
                </div>
</div>

            </div>
           
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- form-basic-inputs23:59-->
</html><?php }  ?>