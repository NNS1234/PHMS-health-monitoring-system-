<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $newpassword = md5($_POST['newpassword']);
    $sql = "SELECT Email FROM tbluser WHERE Email=:email and MobileNumber=:mobile";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $con = "update tbluser set Password=:newpassword where Email=:email and MobileNumber=:mobile";
        $chngpwd1 = $dbh->prepare($con);
        $chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
        $chngpwd1->bindParam(':mobile', $mobile, PDO::PARAM_STR);
        $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
        $chngpwd1->execute();
        echo "<script>alert('Your Password succesfully changed');</script>";
    } else {
        echo "<script>alert('Email id or Mobile no is invalid');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<!-- login-->

<head>
    <title>PHMS || Forgot Password Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <script type="text/javascript">
        function valid() {
            if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
                alert("New Password and Confirm Password Field do not match  !!");
                document.chngpwd.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="../index.php"><b>PHMS</b></a>
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
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

            </ul>

        </div>
    </nav>
    <p style="padding-top: 20px;padding-left: 20px"><a href="../index.php"><i class="fa fa-home" aria-hidden="true" style="font-size: 30px;padding-right: 10px"></i>Back Home!!!</a></p>
    <div class="page-wrapper bg-red p-t-130 p-b-100 font-poppins ">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Forgot Password ?</h2>
                    <form class="form-signin" method="post" name="chngpwd" onSubmit="return valid();">

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" value="" name="email" required="true">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" name="mobile" required="true" maxlength="10" pattern="[0-9]+">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="newpassword" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmpassword" required="true" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <a href="login.php" style="color: primary" class="text-center">Return to Login</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn" name="submit">Reset</button>
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
</body>

</html>