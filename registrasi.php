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

              <p><img src="assets/img/diagnose.jpg" alt="Image" width="280px" class="img-fluid"></p>


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
                    <input type="number" class="form-control" name="umur" id="umur" placeholder="Umur">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <select class="form-control" name="jk" id="daftar_sebagai" required>
                      <option value="">--- Jenis Kelamin ---</option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control mt-3" name="alamat" id="alamat" cols="30" rows="7" placeholder="Alamat"></textarea>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-12">
                  <!-- data-toggle="modal" data-target="#exampleModal"  -->
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

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hasil Deteksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p><img src="assets/img/diagnose.jpg" alt="Image" width="150px" class="img-fluid"></p>
      <p id="nama_hasil"></p>
      <p id="umur_hasil"></p>
      <p id="jk_hasil"></p>
      <p id="berat_hasil"></p>
      <p id="tinggi_hasil"></p>
      <p id="kategori_hasil"></p>
      <p id="alamat_hasil"></p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.reload()">Tutup</button>
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