<?php
session_start();
include('includes/dbconnection.php');
include('includes/connect.php');


if (isset($_POST['food']) && $_POST['food'] != '') {
    $food_name = $_POST['food'];
    $calorie = $_POST['calories'];
    $description = $_POST['desc'];
    $date = $_POST['diet-date'];
    $time = $_POST['time'];
    $height = (int)$_POST['height'];
    $weight = (int)$_POST['weight'];
    $bmi = 703 *  $weight / ($height * $height);
    $sql = "insert into `dietinfo` (food_name, calorie, description, date, time, height, weight, bmi) values ('$food_name','$calorie','$description','$date','$time','$height','$weight','$bmi')";


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


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" type="text/css" href="./assets/css/medicinestyle.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>

<body>
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
                                                            <input type="checkbox" id="noon" name="time" value="noon" />
                                                            Noon
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
                                                <input type="submit" id="addPersonBtn" name="addPersonBtn" class="btn btn-primary pull-left" value="Add Diet Details" />
                                                <input type="Reset" id="resetFormBtn" name="resetFormBtn" class="btn btn-danger" value="Reset" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </form>
            <div class="row" id="peopleList">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                DIET LISTING PAGE
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-responsive table-bordered table-hover table-stripped">
                                <thead>
                                    <tr>
                                        <th colspan="6">
                                            DIET List
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            FOOD NAME
                                        </th>
                                        <th>
                                            CALORIES
                                        </th>
                                        <th>
                                            DESCRIPTION
                                        </th>
                                        <th>
                                            DATE
                                        </th>
                                        <th>
                                            TIME
                                        </th>
                                        <th>
                                            OPERATIONS
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sqlget = "SELECT * FROM dietinfo";
                                    $exec = mysqli_query($con, $sqlget);

                                    while ($res = mysqli_fetch_array($exec)) {
                                        $val1 = $res['id'];
                                        $val2 = $res['food_name'];
                                        $val3 = $res['calorie'];
                                        $val4 = $res['description'];
                                        $val5 = $res['date'];
                                        $val6 = $res['time'];



                                        echo '<tr>
                <td>' . $val1 . '</td><td>' . $val2 . '</td><td>' . $val3 . '</td><td>' . $val4 . '</td><td>' . $val5 . '</td><td>' . $val6 . '</td> <td>
                <button class="btn btn-primary"><a href="update.php? updateid=' . $val1 . '" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php? deleteid=' . $val1 . '" class="text-light">Delete</a></button></td>
            </tr>';
                                    }

                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="peopleList">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                BMI Monitoring
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php
                            $sqlget = "SELECT * FROM dietinfo";
                            $exec = mysqli_query($con, $sqlget);
                            $dataPoints = array();
                            while ($res = mysqli_fetch_array($exec)) {
                                array_push($dataPoints, array("y" => $res['bmi'], "label" =>  $res['date']));
                            }
                            // $dataPoints = array(
                            //     array("y" => 25, "label" => "Sunday"),
                            //     array("y" => 15, "label" => "Monday"),
                            //     array("y" => 25, "label" => "Tuesday"),
                            //     array("y" => 5, "label" => "Wednesday"),
                            //     array("y" => 10, "label" => "Thursday"),
                            //     array("y" => 0, "label" => "Friday"),
                            //     array("y" => 20, "label" => "Saturday")
                            // );

                            ?>
                            <script>
                                window.onload = function() {

                                    var chart = new CanvasJS.Chart("chartContainer", {
                                        title: {
                                            text: "BMI"
                                        },
                                        axisY: {
                                            title: "bmi"
                                        },
                                        data: [{
                                            type: "line",
                                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                        }]
                                    });
                                    chart.render();

                                }
                            </script>
                            </head>

                            <body>
                                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./script.js"></script>
    </div>
    </div>
</body>


</html>