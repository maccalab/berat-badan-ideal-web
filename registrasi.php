<!doctype html>
<html lang="en">
  <head>
    <?php
    include ('env.php');
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/landingPage/favicon/favicon.ico" type="image/x-icon" />
    

    <title>Registrasi | Deteksi Berat badan Ideal</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">Halo, Silahkan mengisi Biodata!</h3>
              <p>Silahkan mengisi biodata pada form registrasi.</p>

              <p><img src="assets/img/undraw_welcome_cats_thqn.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              
              <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <select class="form-control" name="daftar_sebagai" id="daftar_sebagai">
                      <option value="">--- Jenis Kelamin ---</option>
                      <option value="laki-laki">Laki-laki</option>
                      <option value="perempuan">Perempuan</option>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control mt-3" name="alamat" id="alamat" cols="30" rows="7" placeholder="Alamat"></textarea>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Deteksi" class="btn btn-primary rounded-0 py-2 px-4 btn-registrasi">
                  <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Registrasi berhasil, silahkan melakukan pengecekan Suhu dan menunggu konfirmasi! <br> <a href="<?=$BASE_URL;?>registrasi.php"><i class="badge badge-danger">Kembali</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/main.js"></script>

  </body>
</html>