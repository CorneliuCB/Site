<?php
global $a, $points;
$points = 0;
session_start();
//var_dump($_SESSION['isLogged']);
if(isset($_SESSION['isLogged']))
$a = $_SESSION['isLogged'];
unset($_SESSION['isLogged']);

if ($a)
  $points = 9;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alegem Împreună</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="favicon.png">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header">
  <div class="container">

    <h1><a href="index.html">Hai la vot!</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
    <h2><span>Alegerea ta, Viitorul nostru</span></h2>

    <div class="Timer">
      <p id="demo" class="demo"></p>

    </div>
    <script>(function () {
        var js, fs, d = document, id = "tars-widget-script", b = "https://tars-file-upload.s3.amazonaws.com/bulb/";
        if (!d.getElementById(id)) {
          js = d.createElement("script");
          js.id = id;
          js.type = "text/javascript";
          js.src = b + "js/widget.js";
          fs = d.getElementsByTagName("script")[0];
          fs.parentNode.insertBefore(js, fs)
        }
      })();
      window.tarsSettings = {"convid": "xoyInS"};</script>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link active" href="#header">Acasă</a></li>
        <li><a class="nav-link" href="#about">Informații</a></li>
        <li><a class="nav-link" href="#services">Asistent virtual</a></li>
        <li><a class="nav-link" href="#portfolio">Noutăți</a></li>
        <li><a class="nav-link" href="#contact">Tombolă</a></li>
<!--        <li><a class="nav-link" href="#posts">Posturi</a></li>-->
        <li><a class="nav-link" href="#resume">Contacte</a></li>
        <li><a class="nav-link" href="#score">Puncte: <?php echo $points; ?></a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <div class="social-links">
      <a href="https://www.facebook.com/europalibera.org/?locale=ru_RU" class="facebook" target="_blank">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="https://www.instagram.com/_.vlad.c._/" class="instagram" target="_blank">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/in/vlad-corcodel-461a2a250/" class="instagram" target="_blank">
        <i class="bi bi-linkedin"></i>
      </a>
      <div id="login-container" style="position: fixed; top: 20px; right: 20px;">
        <a href="#" class="login">
          <img src="assets/img/login.jpg" alt="Login" class="bi"
               style="border-radius: 50%; width: 40px; height: 40px; object-fit: cover;"/>
        </a>
      </div>

      <script>
        document.getElementById("login-container").addEventListener("click", function () {
          window.location.href = "login-page/";
        });
      </script>

    </div>

  </div>
</header><!-- End Header -->

<!-- ======= About Section ======= -->
<section id="about" class="about">

  <!-- ======= About Me ======= -->
  <?php
  require_once "pages/score.php";
  ?>

</section><!-- End About Section -->



<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <?php
  require_once "pages/services.php";
  ?>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <?php
  require_once "pages/portfolio.php";
  ?>
</section><!-- End Portfolio Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <?php
  require_once "pages/resume.php";
  ?>
</section><!-- End Contact Section -->

<!-- ======= Resume Section ======= -->
<!--<section id="posts" class="posts">-->
<!--  --><?php
//  require_once "pages/posts.php";
//  ?>
<!--</section><!-- End Resume Section -->-->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <?php
  require_once "pages/contact.php";
  ?>
</section><!-- End Resume Section -->

<!-- ======= Score ======= -->
<section id="score" class="score">
  <?php
  require_once "pages/about.php";
  ?>
</section><!-- Score -->

<div class="credits"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>