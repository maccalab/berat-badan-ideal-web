<!doctype html>
<html lang="en">
  <head>
    <?php
    include ('env.php');
    session_start();
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/landingPage/favicon/favicon.ico" type="image/x-icon" />
    
    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/landingPage/css/libs.bundle.css" />
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/landingPage/css/theme.bundle.css" />
    
    <!-- Title -->
    <title>Sistem Monitoring Suhu</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="assets/landingPage/img/logo-macca.png" class="navbar-brand-img" alt="...">
        </a>
    
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
    
          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>
          <!-- Button -->
        
            <button type="button" class="navbar-btn btn btn-sm btn-info-soft lift ms-auto" data-bs-target="#bantuanModal" data-bs-toggle="modal">
              <span class="fe fe-help-circle d-none d-md-inline p-0 m-0"></span> Bantuan 
            </button>

        </div>
    
      </div>
    </nav>

    <!-- WELCOME -->
    <section class="position-relative pt-12 pt-md-14 mt-n11">

      <!-- Shape -->
      <div class="shape shape-fluid-x shape-blur-2 text-light">
        <svg viewBox="0 0 1313 768" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M442.794 768c163.088 0 305.568-88.227 382.317-219.556l.183.556s.249-.749.762-2.181a440.362 440.362 0 0033.192-71.389C901.996 397.81 989.306 277.09 1144.29 206l-.92-.693C1230.34 171.296 1295.63 94.049 1312.83 0H1.294v295.514c-.663 9.909-1 19.908-1 29.986 0 244.386 198.114 442.5 442.5 442.5z" fill="currentColor"/></svg></div>

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center text-center text-md-start">
          <div class="col-12 col-md-5 col-lg-6 order-md-1">

            <!-- Image -->
            <img src="assets/landingPage/img/illustrations/landing-logo.jpg" alt="..." class="img-fluid mw-110 float-end mb-6 mb-md-0" data-aos="fade-right">

          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-2 px-6" data-aos="fade-left">

            <!-- Heading -->
            <h1 class="display-3 text-center text-md-start mb-2">
              Selamat Datang di Sistem Deteksi berat Badan Ideal.
            </h1>
            <div class="text-center text-md-start mt-4">
              <?php if(isset($_SESSION['login_user'])) : ?>
                <a href="<?=$BASE_URL;?>dashboard.php" class="btn btn-success-soft shadow lift me-1">
                  <span class="fe fe-monitor d-none d-md-inline p-0 m-0"></span> Beranda 
                </a>
              <?php else : ?>
                <a href="<?=$BASE_URL;?>registrasi.php" class="btn btn-info-soft  shadow lift me-1">
                  <span class="fe fe-log-in d-none d-md-inline p-0 m-0"></span> Deteksi 
                </a>
              <?php endif; ?>
              
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- HUB -->
    <section class="py-8 pt-md-11 pb-md-9">
       <!-- / .container -->
    </section>

    <!-- FOOTER -->
    <footer class="py-2 btn-success-soft">
      <div class="container">
        <div class="row">
          <div class="col">
            <p class="text-center text-muted small mb-0">
              &copy; <?= date('Y');
              ?> <a href="https://maccalab.com/" target="_blank" class="text-muted">Deteksi berat Badan Ideal by MaccaLab</a>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </footer>

    <!-- Modal -->
<div class="modal fade" id="bantuanModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Bantuan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Silahkan melakukan registrasi dengan menginputkan nama, umur, jenis kelamin dan alamat untuk mengetahui berat badan ideal.</p>
        <br>
        <p>Terdapat masalah? Hubungi : Admin (+62813228992XX)</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
    </div>
  </div>
</div>

    <!-- JAVASCRIPT -->
    
    <!-- Vendor JS -->
    <script src="assets/landingPage/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="assets/landingPage/js/theme.bundle.js"></script>

  </body>
</html>
