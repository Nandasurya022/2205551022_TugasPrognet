<?php
    $servername = "prognet.localnet";
    $username = "2205551022";
    $password = "2205551022";
    $dbname = "db_2205551022";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);

    $idtodetails=$_GET['nim'];
?>

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

<body class="page-index">

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
          <li><a href="index.html">Home</a></li>
        </ul>
        <ul>
          <li><a href="about.html">About</a></li>
        </ul>
        <ul>
       <li><a href="tugasjavascripst.html">Tugas Prognet 1</a></li>
        </ul>
        <ul>
          <li><a href="tugasjava.html">Tugas Prognet 2</a></li>
        </ul>
        <ul>
          <li><a href="tugas_dbsql.php"class="active">Tugas Prognet 3</a></li>
        </ul>
        <ul>
        <li><a class="nav-link scrollto" href="dbsql_select.php">List Tugas Prognet 3</a></li>
    </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/nanda222.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Tugas Prognet 3</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

  <main id="main"><!-- Start main -->

  <!-- ======= Start Hasil Form ======= -->
  <section id="form" class="form-mf sect-pt4 route">
    <div class="container mt-5">
      <h1 class="text-center mb-5">Biodata Mahasiswa</h1>
        <table class="table" border="2">
          <thead>
            <?php
                $sql = "SELECT * FROM tb_data_mhs WHERE nim='$idtodetails'";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    // kolom nim
                    echo "<tr>";
                    echo "<td>"."NIM"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['nim']."</td>";
                    echo "</tr>";
                    // kolom nama lengkap
                    echo "<tr>";
                    echo "<td>"."Nama Lengkap"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['nama_lengkap']."</td>";
                    echo "</tr>";
                    // kolom jenis kelamin
                    echo "<tr>";
                    echo "<td>"."Jenis Kelamin"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['jenis_kelamin']."</td>";
                    echo "</tr>";
                    // kolom fakultas
                    echo "<tr>";
                    echo "<td>"."Fakultas"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['fakultas']."</td>";
                    echo "</tr>";
                    // kolom program studi
                    echo "<tr>";
                    echo "<td>"."Alamat"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['alamat']."</td>";
                    echo "</tr>";
                    // kolom tanggal lahir
                    echo "<tr>";
                    echo "<td>"."Tanggal Lahir"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['tgl_lahir']."</td>";
                    echo "</tr>";
                    // kolom e-mail
                    echo "<tr>";
                    echo "<td>"."E-mail"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "</tr>";
                    // kolom hobi
                    echo "<tr>";
                    echo "<td>"."Hobi"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['hobi']."</td>";
                    echo "</tr>";
                }
            ?>
          </thead>
        </table>
      <a href="dbsql_select.php" class="previous">&laquo; Previous</a>
    </div>
  </section>
  <!-- ======= End Hasil Form ======= -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="mt-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Portofolio</strong>. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ======= End  Footer ======= -->

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