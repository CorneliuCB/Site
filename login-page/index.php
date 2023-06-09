<?php
session_start();
$_SESSION['isLogged'] = true;
//var_dump($_SESSION['isLogged']);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Colorlib Templates">
  <meta name="author" content="Colorlib">
  <meta name="keywords" content="Colorlib Templates">

  <!-- Title Page-->
  <title>Sing Up</title>

  <!-- Icons font CSS-->
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

  <!-- Vendor CSS-->
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
  <div class="wrapper wrapper--w680">
    <div class="card card-4">
      <div class="card-body">
        <h2 class="title">Registration Form</h2>
        <form method="POST" action="../index.php">
        <div class="row row-space">
            <div class="col-2">
              <div class="input-group">
                <label class="label">Nume</label>
                <input class="input--style-4" type="text" name="nume">
              </div>
            </div>
            <div class="col-2">
              <div class="input-group">
                <label class="label">Prenume</label>
                <input class="input--style-4" type="text" name="prenume">
              </div>
            </div>
          </div>
          <div class="row row-space">
            <div class="col-2">
              <div class="input-group">
                <label class="label">Data nașterii</label>
                <div class="input-group-icon">
                  <input class="input--style-4 js-datepicker" type="text" name="data_nasterii">
                  <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="input-group">
                <label class="label">Sex</label>
                <div class="p-t-10">
                  <label class="radio-container m-r-45">Masculin
                    <input type="radio" checked="checked" name="sex">
                    <span class="checkmark"></span>
                  </label>
                  <label class="radio-container">Feminin
                    <input type="radio" name="sex">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-space">
            <div class="col-2">
              <div class="input-group">
                <label class="label">Email</label>
                <input class="input--style-4" type="email" name="email">
              </div>
            </div>
            <div class="col-2">
              <div class="input-group">
                <label class="label">Număr de telefon</label>
                <input class="input--style-4" type="text" name="telefon">
              </div>
            </div>
          </div>
          <div class="input-group">
            <label class="label">Orașul</label>
            <div class="rs-select2 js-select-simple select--no-search">
              <select name="subiect">
                <option disabled="disabled" selected="selected">Alegeți opțiunea</option>
                <option>Chișinău</option>
                <option>Bălți</option>
                <option>Tiraspol</option>
                <option>Cahul</option>
                <option>Ungheni</option>
              </select>
              <div class="select-dropdown"></div>
            </div>
          </div>
          <div class="p-t-15">
            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body>

</html>
<!-- end document-->