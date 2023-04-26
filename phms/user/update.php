<?php

include('includes/dbconnection.php');
include('includes/connect.php');

$id = $_GET['updateid'];




if (isset($_POST['food']) && $_POST['food'] != '') {
    $food_name = $_POST['food'];
    $calorie = $_POST['calories'];
    $description = $_POST['desc'];
    $date = $_POST['diet-date'];
    $time = $_POST['time'];
    $sql = "update `dietinfo` set food_name='$food_name', calorie='$calorie', description='$description', date='$date', time='$time' where id=$id";


    $result = mysqli_query($con, $sql);

    if (!$result) {
        die(mysqli_error($con));
    } else {
        unset($_POST);
        echo '<script>header("Location:addDiet.php")</script>';
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <title>add_diet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <form method="POST" action="addDiet.php">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Add Diet Details
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="form">
                                    <div class="row fieldRow">
                                        <div class="col-xs-2">
                                            <label for="food" class="fieldLabel">
                                                Food:
                                            </label>
                                        </div>
                                        <div class="col-xs-10" id="nameContainer">
                                            <input type="text" id="food" name="food" class="form-control" placeholder="Enter Food " />
                                        </div>

                                    </div>
                                    <div class="row fieldRow">
                                        <div class="col-xs-2">
                                            <label for="calories" class="fieldLabel">
                                                Calories:
                                            </label>
                                        </div>
                                        <div class="col-xs-10" id="nameContainer">
                                            <input type="text" id="calories" name="calories" class="form-control" placeholder="Enter Calories per meal " />
                                        </div>

                                    </div>
                                    <div class="row fieldRow">
                                        <div class="col-xs-2">
                                            <label for="weight" class="fieldLabel">
                                                Current Weight:
                                            </label>
                                        </div>
                                        <div class="col-xs-10" id="nameContainer">
                                            <input type="weight" id="weight" name="weight" class="form-control" placeholder="Enter Weight(lbs) " />
                                        </div>

                                    </div>
                                    <div class="row fieldRow">
                                        <div class="col-xs-2">
                                            <label for="height" class="fieldLabel">
                                                Current Height:
                                            </label>
                                        </div>
                                        <div class="col-xs-10" id="nameContainer">
                                            <input type="height" id="height" name="height" class="form-control" placeholder="Enter Height(in) " />
                                        </div>

                                    </div>
                                    <div class="row fieldRow">
                                        <div class="col-xs-3">
                                            <label for="desc" class="fieldLabel">
                                                Description:
                                            </label>
                                        </div>
                                        <div class="col-xs-12" id="nameContainer">
                                            <textarea type="textbox" id="desc" name="desc" class="form-control" placeholder="Enter description " row=3> </textarea>
                                        </div>

                                    </div>
                                    <div class="row fieldRow">
                                        <div class="col-xs-2">
                                            <label for="diet-date" class="fieldLabel">
                                                Date:
                                            </label>
                                        </div>
                                        <div class="col-xs-10">
                                            <input type="date" id="diet-date" name="diet-date" value="date" checked />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <label for="time" class="fieldLabel">
                                                Time:
                                            </label>
                                        </div>
                                        <div class="form">
                                            <div class="col-xs-4 dose">
                                                <label>
                                                    <input type="checkbox" id="morning" name="time" value="morning" checked /> Morning
                                                </label>
                                            </div>
                                            <div class="col-xs-3 units">
                                                <label>
                                                    <input type="checkbox" id="noon" name="time" value="noon" /> Noon
                                                </label>
                                            </div>
                                            <div class="col-xs-3 units">
                                                <label>
                                                    <input type="checkbox" id="night" name="time" value="night" /> Night
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row fieldRow">
                                    <div class="col-xs-10 col-xs-offset-2">
                                        <input type="submit" id="addPersonBtn" name="addPersonBtn" class="btn btn-primary pull-left" value="Update" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </form>

</body>

</html>