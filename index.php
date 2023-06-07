<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Warehouse STO Cikampek</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body class="page-index">
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">WH STO Cikampek</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a href="index.html" class="active">Home</a></li> -->
          <li><a href="admin/login.html">Login</a></li>
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Selamat Datang</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Di Website Warehouse STO Cikampek</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#main" class="btn-get-started">Klik Disini</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">
        <div class="section-header">
          <h2>Isi Data di Bawah</h2>
        </div>
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <form action="input.php" method="POST" > <!-role="form" class="php-email-form"->
              <div class="form-group row">
                <label for="teknisi" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="teknisi" placeholder="Contoh: UMAY"
                    onkeyup="this.value = this.value.toUpperCase();" required />
                </div>
              </div>
              <div class="form-group row">
                <label for="mitra" class="col-sm-2 col-form-label">Mitra</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" name="mitra" value="TA"
                    onkeyup="this.value = this.value.toUpperCase();" required />
                </div>
              </div>
              <div class="form-group row">
                <label for="notiket" class="col-sm-2 col-form-label">No Tiket</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="notiket"
                    placeholder="Contoh: INxxxxxxxxx/WAxxxxxxxxxxxx" onkeyup="this.value = this.value.toUpperCase();" required />
                </div>
              </div>
              <div class="form row">
                <label for="nointernet" class="col-sm-2 col-form-label">No Internet</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nointernet" placeholder="Contoh: 12xxxxxxxxxx"
                    onkeyup="this.value = this.value.toUpperCase();" required />
                </div>
              </div>
              <div class="form-group row">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Jenis Pekerjaan</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" name="pekerjaan" value="Gangguan"
                    onkeyup="this.value = this.value.toUpperCase();" required />
                </div>
              </div>
              <!-- <div class="form-group row">
                <label for="material" class="col-sm-2 col-form-label">Material</label>
                <div class="col-sm-10">
                  <select id="option" class="form-control selectpicker" data-selected-text-format="count">
                    <option value="Pilih Material">Pilih Material</option>
                    <option value="dc">AC-OF-SM-1B</option>
                    <option value="adapter">ADAPTER</option>
                    <option disabled value="ils">SOC ILS</option>
                    <option value="sum">SOC SUM</option>
                    <option value="fuj">SOC FUJ</option>
                    <option value="sleeve">SLEEVE TIPE 3</option>
                    <option value="protection">PROTECTION SLEEVE</option>
                    <option value="4">SP 1/4</option>
                    <option value="8">SP 1/8</option>
                    <option value="16">SP 1/16</option>
                    <option value="pc">PC</option>
                    <option value="otp">OTP</option>
                    <option value="prekso">PREKSO</option>
                    <option value="ont">ONT</option>
                    <option value="remote">Remote</option>
                    <option value="clamp">S-CLAMP</option>
                    <option value="belt">STAINLES BELT</option>
                    <option value="sclamp">S-CLAMP</option>
                    <option value="fo">SUSPENSION FO</option>
                    <option value="tiang">TIANG GALVANIS</option>
                    <option value="tray">TRAY CABLE TC-2</option>
                    <option value="coocker">CLAMP COOCKER</option>
                    <option value="5lubang">CLMAP RING 5 LUBANG</option>
                  </select>
                  <input type="material" class="form-control" name="material" placeholder="Jumlah" required/>
                </div>
              </div> -->
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your message has been sent. Thank you!
                </div>
              </div>
              <div class="text-center">
                <button type="submit" name="submit">Kirim Material</button>
              </div>
            </form>
          </div>
          <!-- End Contact Form -->
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>STO Cikampek 2023</span></strong>. All Rights Reserved
        </div>
        <!-- <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Fil9es -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>