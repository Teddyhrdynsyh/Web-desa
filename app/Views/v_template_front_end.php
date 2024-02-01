
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('front_end') ?>/assets/img/favicon.png" rel="icon">
  <link href="<?=base_url('front_end') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('front_end') ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url('front_end') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url('front_end') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('front_end') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url('front_end') ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url('front_end') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url('front_end') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('front_end') ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.9.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
     <img src="<?= base_url('logo/logo.png') ?>" width="80px">
      <h1 class="logo me-auto"><a href="<?= base_url('index.php') ?>">DESA CIGUGUR</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="<?= base_url('index.php') ?>">Home</a></li>
          <li><a href="<?= base_url('Home/sejarah') ?>">Sejarah</a></li>
          <li><a href="<?= base_url('Home/berita') ?>">Berita</a></li>
          <li><a href="<?= base_url('Home/gallery') ?>">Gallery</a></li>
          <li><a href="#footer">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="<?= base_url('Auth') ?>" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->

<?php if ($page) {
     echo view ($page);
} ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Tentang Kami</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Site Map</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#visi">Visi-Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#sejarah">Sejarah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#footer">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              Jl.Bypass, Cigugur Kidul 41266 <br>
              Pusakajaya, Subang <br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 856 3743 2372<br>
              <strong>Email:</strong> cigugurbersemi@gmail.com<br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('front_end') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=base_url('front_end') ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?=base_url('front_end') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('front_end') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url('front_end') ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('front_end') ?>/assets/js/main.js"></script>

</body>

</html>