<?php

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <style>
      .panel-primary>.panel-heading {
        color: #fff;
        background-color: rgb(6, 57, 112);
        border-color: rgb(6, 57, 112);
      }

      .container {
        background-color: #ffffff;
        padding: 30px 30px;
        width: 400px;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 73%;
        left: 50%;
        border-radius: 5px;
        font-family: 'Poppins', sans-serif;
        box-shadow: 25px 25px 30px rgba(0, 0, 0, 0.15);
      }

      .container h1 {
        background: #024b94;
        color: white;
        text-align: center;
        font-size: 23px;
        letter-spacing: 1px;
        margin-top: -30px;
        margin-left: -30px;
        margin-right: -30px;
        margin-bottom: 40px;
      }

      .row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 40px;
      }

      .row span {
        font-weight: 500;
      }

      input[type="range"] {
        width: 70%;
        height: 3.5px;
        -webkit-appearance: none;
        appearance: none;
        background-color: #dcdcdc;
        border-radius: 3px;
        outline: none;
      }

      input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        height: 15px;
        width: 15px;
        background-color: #1c1c1c;
        border-radius: 50%;
        cursor: pointer;
      }

      #result {
        font-size: 30px;
        font-weight: 700;
        letter-spacing: 1px;
        text-align: center;
        color: #0be881;
      }

      #category {
        font-size: 18px;
        text-align: center;
        letter-spacing: 1px;
      }

      .display {
        box-shadow: 0 0 20px rgba(0, 139, 253, 0.25);
        margin-bottom: 60px;
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
          <div class="container">
            <h1>Easy BMI Calculator</h1>
            <div class="display">
              <p id="result">20.0</p>
              <p id="category">Normal weight</p>
            </div>
            <div class="row">
              <input type="range" min="20" max="200" value="20" id="weight" oninput="calculate()">
              <span id="weight-val">20 kg</span>
            </div>
            <div class="row">
              <input type="range" min="100" max="250" value="100" id="height" oninput="calculate()">
              <span id="height-val">100 cm</span>
            </div>


          </div>
          <div class="w3-container w3-pale-red">
            <h3>BMI of under 18.5</h3>
            <p> BMI of under 18.5 indicates that a person has insufficient weight, so they may need to put on some weight. They should ask a doctor or dietitian for advice.</p>
          </div>
          <div class="w3-container w3-pale-blue">
            <h3>BMI of 18.5–24.9</h3>
            <p> A BMI of 18.5–24.9 indicates that a person has a healthy weight for their height. By maintaining a healthy weight, they can lower their risk of developing serious health problems.</p>
          </div>
          <div class="w3-container w3-pale-green">
            <h3>BMI of 25–29.9</h3>
            <p> A BMI of 25–29.9 indicates that a person is slightly overweight. A doctor may advise them to lose some weight for health reasons. They should talk with a doctor or dietitian for advice.</p>
          </div>
          <div class="w3-container w3-light-grey">
            <h3>BMI of over 30</h3>
            <p> A BMI of over 30 indicates that a person has obesity. Their health may be at risk if they do not lose weight. They should talk with a doctor or dietitian for advice.</p>
          </div>




          <!--Script-->
          <script type="text/javascript">
            function calculate() {
              //Need to determine the constant of some id functions.
              var bmi;
              var result = document.getElementById("result");
              //The value of the height slider
              var height = parseInt(document.getElementById("height").value);
              //The value of the weight slider
              var weight = parseInt(document.getElementById("weight").value);

              //The value of height and width should be displayed in the webpage using "textContent".
              document.getElementById("weight-val").textContent = weight + " kg";
              document.getElementById("height-val").textContent = height + " cm";

              //Now I have added the formula for calculating BMI in "bmi"
              bmi = (weight / Math.pow((height / 100), 2)).toFixed(1);
              //With the help of "textContent" we have arranged to display in the result page of BMI
              result.textContent = bmi;


              //Now we have to make arrangements to show the text


              //When the BMI is less than 18.5, you can see the text below
              if (bmi < 18.5) {
                category = "Underweight 😒";
                result.style.color = "#ffc44d";
              }

              //If BMI is >=18.5 and <=24.9
              else if (bmi >= 18.5 && bmi <= 24.9) {
                category = "Normal Weight 😍";
                result.style.color = "#0be881";
              }

              //If BMI is >= 25 and <= 29.9 
              else if (bmi >= 25 && bmi <= 29.9) {
                category = "Overweight 😮";
                result.style.color = "#ff884d";
              }

              //If BMI is <= 30
              else {
                category = "Obese 😱";
                result.style.color = "#ff5e57";
              }
              //All of the above text is stored in "category".

              //Now you have to make arrangements to display the information in the webpage with the help of "textContent"
              document.getElementById("category").textContent = category;
            }
          </script>
          <br>
        </div>
      </div>

    </div>
    </div>


  </body> <?php }  ?>