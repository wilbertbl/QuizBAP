<?php
use App\Models\vm_27;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KRS - Wilbert Bernard Lo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Kelly - v4.9.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <h1 class="logo me-auto me-lg-0"><a href="/">Wilbert Bernard Lo</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/resume">Resume & Education</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links">
                <a class="active" href="/viewkrs">View Krs</a>
                <a href="https://free.facebook.com/people/Wilbert-Bernard-Lo/100012239225252/?_rdc=1&_rdr"
                    class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/wilbertbernardlo/" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/wilbert-bernard-lo-5b8b40211/" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>
        </div>

    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>KRS</h2>
                </div>

                <div class="row">
                    <style>
                        table tr {
                            padding: 10px;
                        }
                    </style>
                    <table style="padding: 2px">
                        <tr>
                            <td><b>Nama</b></td>
                            <td><b>Wilbert Bernard Lo</b></td>
                        </tr>
                        <tr>
                            <td><b>StudentID</b></td>
                            <td><b>03081200027</b></td>
                        </tr>
                        <tr>
                            <td><b>Term</b></td>
                            <td><b>1212</b></td>
                        </tr>
                    </table>
                    <div>
                        <br>
                    </div>

                    <table style="padding: 10px;">
                        <tr>
                            <td><b>Kode Matakuliah</b></td>
                            <td><b>Nama Matakuliah</b></td>
                            <td><b>SKS</b></td>
                        </tr>
                        <?php
                        $mahasiswas = vm_27::get();

                        foreach ($mahasiswas as $vm_27) {
                            echo '<tr>';
                            echo '<td>' . $vm_27->kode_matakuliah . '</td>';
                            echo '<td>' . $vm_27->nama_matakuliah . '</td>';
                            echo '<td>' . $vm_27->sks . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </table>
                </div>

            </div>
        </section><!-- End Resume Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Wilbert Bernard Lo</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
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
