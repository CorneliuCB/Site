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

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link active" href="#header">Home</a></li>
        <li><a class="nav-link" href="#about">About</a></li>
        <li><a class="nav-link" href="#resume">Resume</a></li>
        <li><a class="nav-link" href="#services">Services</a></li>
        <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link" href="">Puncte: 0</a></li>
        <li><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <div class="social-links">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

  </div>
</header><!-- End Header -->

<!-- ======= About Section ======= -->
<section id="about" class="about">

  <!-- ======= About Me ======= -->
  <?php
  require_once "pages/about.php";
  ?>

</section><!-- End About Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <?php
  require_once "pages/resume.php";
  ?>
</section><!-- End Resume Section -->

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
  require_once "pages/contact.php";
  ?>
</section><!-- End Contact Section -->

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