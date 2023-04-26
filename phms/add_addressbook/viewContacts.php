<?php
include './connect.php';

if (isset($_POST['deleteItem'])) {
    // here comes your delete query: use $_POST['deleteItem'] as your id
    $delete = $_POST['deleteItem'];
    $sql = "DELETE FROM contacts where `id` = '$delete'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die(mysqli_error($con));
    } else {
    }
}
?>

?>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../user/assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../user/assets/css/medicinestyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../user/assets/css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../user/assets/img/favicon.ico">
</head>

<body>
    <div class="main-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark1 fixed-top">
            <a class="navbar-brand" href="#"><b>PHMS</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link " href="../user/dashboard.php">My Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                  <a class="nav-link" href="register.php">Register</a>
                </li> -->
                </ul>
            </div>
        </nav>

        <div class="page-wrapper">
            <div class="content" style="text-align: center;">


                <p class="text-center" id="deleteRes"></p>
                <div style="text-align: center;">
                    <table class="table table-condensed table-responsive" style="margin-left: 50rem;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Category</th>
                                <th>Email</th>
                                <th>Permanent Address</th>
                                <th>Temporary Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqlget = "SELECT * FROM contacts";
                            $exec = mysqli_query($con, $sqlget);
                            while ($row = mysqli_fetch_array($exec)) {
                                echo '<tr id="' . $row['ID'] . '">
						<td>' . $row['Name'] . '</td>
						<td>' . $row['Mobile'] . '</td>
                        <td>' . $row['category'] . '</td>
						<td>' . $row['Email'] . '</td>
						<td style="word-wrap:break-word;">' . $row['Permanant_Address'] . '</td>
						<td>' . $row['Temporary_Address'] . '</td>
						<td style="width: 32rem;" > <button class="btn btn-danger"><a href="delete.php? deleteid=' . $row['ID'] . '" class="text-light">Delete</a></button></td></td>
					  </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>