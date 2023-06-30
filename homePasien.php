<?php
session_start();

if (isset($_SESSION['level']) && isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Informasi Reservasi Dokter</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href=""><img src="assets/img/logoR.png" class="img-fluid animated"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> -->
            <li><a class="nav-link scrollto" href="halamanReservasi.php"><b>Reservasi</b></a></li>
            <li><a class="nav-link scrollto" href="halamanPembayaran.php"><b>Pembayaran</b></a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            

            <!-- <li class="dropdown"><a href="#"><span>Fitur</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="reservasi/daftar_janji_temu.php">Daftar Reservasi</a></li>
              <li><a href="reservasi/edit_hapus.php">Edit Data Reservasi</a></li> 
            </ul>
          </li> -->
            <li><a href="">
                <h5>Selamat Datang, <?php echo $username; ?></h5>
              </a></li>
            <li><a class="getstarted scrollto" href="logout.php">LogOut</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>Solusi Terbaik Untuk Kesehatan Anda.</h1>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/doc-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Tentang Kami</h2>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p>
                MedReserve adalah platform inovatif yang menyediakan layanan reservasi dokter secara online.
                Kami memahami betapa berharganya waktu Anda, dan itulah mengapa kami berkomitmen untuk memudahkan
                proses mencari dan mengatur janji temu dengan dokter yang tepat.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> MedReserve menyediakan akses mudah dan cepat ke dokter pilihan anda</li>
                <li><i class="ri-check-double-line"></i> Menghindari waktu tunggu yang lama dan mendapatkan jadwal yang sesuai dengan preferensi anda</li>
                <li><i class="ri-check-double-line"></i> MedReserve didesain dengan antarmuka yang sederhana dan mudah digunakan.</li>
              </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                MedReserve adalah solusi yang inovatif dan efektif dalam memudahkan reservasi dokter,
                memberikan akses yang lebih baik ke layanan kesehatan, serta membantu pasien mengelola
                kesehatan mereka dengan lebih baik.
              </p>
              <a href="#" class="btn-learn-more">Learn More</a>
            </div>
          </div>

        </div>
      </section><!-- End About Us Section -->


      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Pelayanan</h2>
            <p>Sebagai platform reservasi dokter terkemuka, MedReserve menyediakan akses mudah dan cepat ke ribuan dokter yang berkualitas, spesialis, dan rumah sakit terpercaya di seluruh wilayah.
              Dengan menggunakan teknologi terbaru, kami menciptakan lingkungan online yang aman, terpercaya, dan nyaman bagi pasien dan dokter.</p>
          </div>

          <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="">Pengalaman Pengguna yang Mudah</a></h4>
                <p>MedReserve didesain dengan antarmuka yang sederhana dan mudah digunakan. Pasien dapat dengan cepat mencari dan memesan janji temu dengan beberapa klik,
                  menjadikan pengalaman pengguna mereka lancar dan efisien.</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Profil Dokter Lengkap</a></h4>
                <p>MedReserve menyediakan profil lengkap dokter, termasuk spesialisasi, pengalaman, dan ulasan dari pasien sebelumnya.</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="">Penghematan Waktu dan Biaya</a></h4>
                <p>Dengan mengurangi waktu yang dihabiskan untuk mencari dokter dan mengatur janji temu secara tradisional, MedReserve membantu pasien menghemat waktu berharga.</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-layer"></i></div>
                <h4><a href="">Kemitraan dengan Institusi Medis</a></h4>
                <p>MedReserve menjalin kemitraan dengan berbagai institusi medis dan rumah sakit terkemuka.</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->

      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

          <div class="row">
            <div class="col-lg-9 text-center text-lg-start">
              <h3>Call To Action</h3>
              <p>Tim dukungan pelanggan MedReserve siap membantu pasien dalam mengatasi pertanyaan atau masalah yang mungkin timbul selama menggunakan platform. Mereka memberikan pelayanan yang ramah dan responsif, memastikan kepuasan pengguna.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>

        </div>
      </section><!-- End Cta Section -->

      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Team</h2>
            <p>Kelompok 4 Praktikum Proyek Pengembangan Perangkat Lunak</p>
          </div>

          <div class="row">

            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Moch. Dzikri Azhari Ali</h4>
                  <span>Scrum Master</span>
                  <p>3411201121</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Akbar Satrio N</h4>
                  <span>Product Owner</span>
                  <p>3411201122</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Muhammad Iqbal Farhansyah S</h4>
                  <span>Developer</span>
                  <p>3411201123</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Muhammad Fikri Eina</h4>
                  <span>Developer</span>
                  <p>3411201127</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Regi Wisma Putra</h4>
                  <span>Developer</span>
                  <p>3411201132</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Adam Razaki</h4>
                  <span>Developer</span>
                  <p>3411201136</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Benedictus Benny S.</h4>
                  <span>Developer</span>
                  <p>3411201139</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Obit Revian Oktia</h4>
                  <span>Developer</span>
                  <p>3411201144</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Rahmadi Dimas Wirianto</h4>
                  <span>Developer</span>
                  <p>3411201150</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Team Section -->

      <!-- ======= Footer ======= -->
      <footer id="footer">

        <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Kel4</h3>
                <p>
                  Jl. Terusan Jend. Sudirman,<br>
                  Cibeber, Kec. Cimahi Sel., Kota<br>
                  Cimahi, Jawa Barat<br><br>
                  <strong>Phone:</strong> 022-6656190<br>
                  <strong>Email:</strong> humas@medreserve.com<br>
                </p>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="HomePage.php">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>Anda bisa menjangkau kami dalam memperoleh informasi terkait pelayanan kami di :</p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>Kel4</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </footer><!-- End Footer -->

      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
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

<?php
} else {
  header("Location: formLogin.php");
  exit();
}
?>