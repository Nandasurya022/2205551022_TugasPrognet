<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Nanda Surya Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: Nanda
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">Nanda Surya</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <ul>
          <li><a href="about.html">About</a></li>
                </ul>
              </li>
          <li><a href="tugasjavascripts.html">Tugas Javascripts</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main"><!-- Start main -->

  <!-- ======= Start Hasil Form ======= -->
  <section id="form" class="form-mf sect-pt4 route">
    <div class="container mt-5">
      <h1 class="text-center">Hasil Form Biodata</h1>
        <table class="table" border="2">
          <thead>
            <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // kolom nama lengkap
                echo "<tr>";
                echo "<td>"."Nama Lengkap"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$namalengkap = $_POST['namalengkap']."</td>";
                echo "</tr>";
                // kolom nim
                echo "<tr>";
                echo "<td>"."NIM"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$nim = $_POST['nim']."</td>";
                echo "</tr>";
                // kolom e-mail
                echo "<tr>";
                echo "<td>"."E-mail"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$email = $_POST['email']."</td>";
                echo "</tr>";
                // kolom username
                echo "<tr>";
                echo "<td>"."Username"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$username = $_POST['username']."</td>";
                echo "</tr>";
                // kolom program studi
                echo "<tr>";
                echo "<td>"."Hobi"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$hobi = $_POST['hobi']."</td>";
                echo "</tr>";
                // kolom jenis kelamin
                echo "<tr>";
                echo "<td>"."Jenis Kelamin"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$jeniskelamin = $_POST['jeniskelamin']."</td>";
                echo "</tr>";
                // kolom mata kuliah
                if (isset($_POST['matakuliah'])) {
                    $matakuliah = $_POST['matakuliah'];
                    echo "<tr>";
                    echo "<td>"."Mata Kuliah"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>"."Mata Kuliah Hari Ini :"."</td>";
                    echo "</tr>";
                    for ($i=0; $i < count($matakuliah) ; $i++){
                        echo "<tr>";
                        echo "<td>".""."</td>";
                        echo "<td>".""."</td>";
                        echo "<td>"."- ".$matakuliah[$i]."</td>";
                        echo "</tr>";
                    }
                }
              }
            ?>
          </thead>
        </table>
      <a href="tugasjavascripts.html" class="previous">&laquo; Previous</a>
    </div>
  </section>
  <!-- ======= End Hasil Form ======= -->

</main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>