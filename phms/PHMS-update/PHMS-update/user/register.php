<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $mobno = $_POST['mobno'];


    $ret = "select Email, MobileNumber from tbluser where Email=:email || MobileNumber=:mobno ";
    $query = $dbh->prepare($ret);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':mobno', $mobno, PDO::PARAM_INT);




    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() == 0) {
        $sql = "Insert Into tbluser(FullName,Email,Password,Address,Gender,DOB,MobileNumber)Values(:fname,:email,:password,:address,:gender,:dob,:mobno)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':fname', $fname, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':gender', $gender, PDO::PARAM_STR);
        $query->bindParam(':dob', $dob, PDO::PARAM_STR);
        $query->bindParam(':mobno', $mobno, PDO::PARAM_INT);

        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {

            echo "<script type='text/javascript'>alert('You have successfully registered with us'); document.location ='login.php';</script>";
        } else {

            echo "<script>alert('Something went wrong.Please try again');</script>";
        }
    } else {

        echo "<script>alert('Email-id or Mobile Number already exist. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>HMMS|| Sign up Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link href="../user/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../user/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../user/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../user/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript">
        // For Mobile availabilty
        function checkmobAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check_availability.php",
                data: 'mobile=' + $("#mobno").val(),
                type: "POST",
                success: function(data) {
                    $("#user-availability-status1").html(data);
                    $("#loaderIcon").hide();
                },
                error: function() {}
            });
        }

        // For Email availabilty
        function checkAvailability() {
            $("#loaderIcon").css('display', 'block');
            jQuery.ajax({
                url: "check_availability.php",
                data: 'emailid=' + $("#email").val(),
                type: "POST",
                success: function(data) {
                    $("#user-availability-status").html(data);
                    $("#loaderIcon").css('display', 'none');
                },
                error: function() {}
            });
        }
    </script>
</head>


<body">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="
    background-color: rgb(6, 57, 112)!important;">
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
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- <p style=" padding-top: 20px;padding-left: 20px"><a href="../index.php"><i class="fa fa-home" aria-hidden="true" style="font-size: 30px;padding-right: 10px"></i>Back Home!!!</a></p> -->
    <div class=" page-wrapper bg-red p-t-130 p-b-100 font-poppins ">
        <div class=" wrapper wrapper--w680 ">
            <div class="card card-4 ">
                <div class="card-body ">
                    <h2 class="title">Registration Form</h2>
                    <form class="form-signin" method="post">
                        <!-- <div class="account-logo">
                            <a href="register.php"><img src="assets/img/logo1.png" alt=""> </a>
                        </div> -->
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" value="" name="fname" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" value="" name="email" id="email" required="true" onBlur="return checkAvailability()">
                            <span id="user-availability-status"></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" value="" class="form-control" name="password" required="true">
                        </div>
                        <div class="form-group">
                            <label>Address </label>
                            <input class="form-control" type="text" name="address" id="address" required />
                        </div>
                        <div class="form-group">
                            <label class="label">Gender</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Male
                                    <input type="radio" checked="checked" name="gender" value="male">
                                    <span class=" checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="female">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Date of birth</label>
                            <input type="text" placeholder="YYYY-MM-DD" name="dob" id="dob" class="form-control" required="true" maxlength="10" pattern="\d{4}-\d{2}-\d{2}">

                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" name="mobno" id="mobno" class="form-control" required="true" maxlength="10" pattern="[0-9]+" onblur="return checkmobAvailability()">
                            <span id="user-availability-status1"></span>
                        </div>




                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit" id="submit" name="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/global.js"></script>


    </body>


    <!-- register24:03-->

</html>