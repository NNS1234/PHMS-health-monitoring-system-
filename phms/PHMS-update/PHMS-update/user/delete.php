<?php
include('includes/dbconnection.php');
include('includes/connect.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `dietinfo` where id=$id";

    $result=mysqli_query($con,$sql);

    if($result)
    {
        //echo "Deleted Successfully";
        header('location:addDiet.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>